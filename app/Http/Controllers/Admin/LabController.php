<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use App\Models\Audio;
use App\Models\BeonsLab;
use Illuminate\Database\Eloquent\ModelNotFoundException;


class LabController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('admin');
    }

    /**
     * Show the Lab dashboard.
     *
     * @return Illuminate\Support\Facades\View
     */
    public function index()
    {
        try {
            $response = view('admin.lab');
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            $response = 'ERROR: View not found. Please contact the administrator.';
        }

        return $response;
    }

    /**
     * After any CRUD operation, returns the full values to refresh UI.
     *
     * @return array
     */
    public function refreshAudio()
    {
        // Initialize variables
        $response = array(
            'success' => true,
            'message' => 'Ok',
            'data' => array(
                'insert' => array(),
                'delete' => array(),
            )
        );

        try {
            $userId = Auth::user()->isAdmin() ? 0 : Auth::user()->getId();
            $audio = Audio::all()->whereIn('fk_users', [0, $userId]);

            foreach ($audio as $k => $v) {
                $response['data']['insert'][] = array(
                    'id' => $v->id,
                    'name' => $v->name,
                    'type' => $v->type,
                    'filename' => ('audio/' . $v->type . '/' . $v->filename)
                );

                // If user is not an admin and the audio belongs to an admin, dont fill the "delete" array.
                if ($userId !== 0 && $v->fk_users === 0) {
                    continue;
                }

                $response['data']['delete'][] = array(
                    'id' => $v->id,
                    'name' => $v->name,
                    'type' => $v->type,
                    'filename' => ('audio/' . $v->type . '/' . $v->filename),
                );
            }
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            $response['success'] = false;
            $response['message'] = 'ERROR: Could not refresh audio. Please contact the administrator.';
            $response['data'] = null;
        }

        return Response()->json($response);
    }

    /**
     * After any CRUD operation, returns the full values to refresh UI.
     *
     * @return array
     */
    public function refreshBeons()
    {
        // Initialize variables
        $response = array(
            'success' => true,
            'message' => 'Ok',
            'data' => array()
        );

        try {
            $userId = Auth::user()->isAdmin() ? 0 : Auth::user()->getId();
            $getAllBeons = BeonsLab::all()->where('fk_users', $userId);

            // Since Laravel returns an object on single retrieves (from DB), we need to parse and save into a "data" response.
            foreach ($getAllBeons as $k => $v) {
                $response['data'][] = $v;
            }
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            $response['success'] = false;
            $response['message'] = 'ERROR: Could not load beons. Please contact the administrator.';
            $response['data'] = null;
        }

        return Response()->json($response);
    }

    /**
     * After any CRUD operation, returns the full values to refresh UI.
     *
     * @param Illuminate\Http\Request
     * @return App\Http\Controllers\JsonResponse JSON
     */
    public function loadBeon(Request $request)
    {
        // Initialize variables
        $response = array(
            'success' => true,
            'message' => 'Ok',
            'data' => array(
                'id' => null,
                'name' => '',
                'text' => ''
            )
        );

        try {
            $userFolder = Auth::user()->isAdmin() ? 0 : Auth::user()->getId();
            $id = $request->input('id');

            $beon = BeonsLab::find($id);

            $filename = $beon->filename;
            $text = Storage::disk('beons_lab')->get($userFolder . '/' . $filename);

            $response['data']['id'] = $beon->id;
            $response['data']['name'] = $beon->name;
            $response['data']['text'] = $text;

            $response['message'] = 'Loaded: "' . $response['data']['name'] . '" on ' . date('d/m/Y H:i:s') . '.';
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            $response['success'] = false;
            $response['message'] = 'ERROR: Beon not found. Please contact the administrator.';
            $response['data'] = null;
        }

        return Response()->json($response);
    }

    /**
     * Saves or Updates a beon. 
     *
     * @param Illuminate\Http\Request
     * @return App\Http\Controllers\JsonResponse JSON
     */
    public function saveBeon(Request $request)
    {
        // Initialize variables
        $response = array(
            'success' => true,
            'message' => 'Ok',
            'data' => array(
                'id' => null
            )
        );

        try {
            $user = Auth::user()->getId();

            $id = $request->input('id');
            $name = $request->input('name');
            $text = $request->input('text');
            $filename = strtolower(str_replace(' ', '_', $name));

            $beonExists = BeonsLab::find($id);

            // If user folder doesn't exists, create it.
            if(!Storage::disk('beons_lab')->exists($user . '/')) {
                Storage::disk('beons_lab')->makeDirectory($user, 0777, true);
            }

            if (empty($beonExists)) {
                $beons = new BeonsLab;
                $beons->fk_users = $user;
                $beons->name = $name;
                $beons->filename = $filename;
                $beons->save();

                Storage::disk('beons_lab')->put($user . '/' . $filename, $text, 'public');

                $response['message'] = 'Inserted new beon: "' . $name . '" on ' . date('d/m/Y H:i:s') . ".";
                $response['data']['id'] = $beons->id;
            } else {
                // Get original filename to save the same file
                $oldFilename = $beonExists->filename;

                // Updates the name in DB but keeps the same namefile
                BeonsLab::where('id', $id)->update(['name' => $name]);
                Storage::disk('beons_lab')->put($user . '/' . $oldFilename, $text, 'public');

                // Attemp to rename the file as well. Failing cuz the move function does not have an option for file permissions and cannot be rewriten.
                // Storage::disk('beons_lab')->move($user . '/' . $oldFilename, $user . '/' . $filename);
                // BeonsLab::where('id', $id)->update(['name' => $name, 'filename' => $filename]);
                // Storage::disk('beons_lab')->put($user . '/' . $filename, $text, 'public');

                $response['message'] = 'Saved beon: "' . $name . '" on ' . date('d/m/Y H:i:s') . ".";
            }
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            $response['success'] = false;
            $response['message'] = 'ERROR: Your beon could not be saved. Please contact the administrator.';
        }

        return Response()->json($response);
    }

    /**
     * Deletes a beon from database and its local file.
     *
     * @param Illuminate\Http\Request
     * @return App\Http\Controllers\JsonResponse JSON
     */
    public function deleteBeon(Request $request)
    {
        // Initialize variables
        $response = array(
            'success' => true,
            'message' => 'Ok',
            'data' => array()
        );

        try {
            $userFolder = Auth::user()->isAdmin() ? 0 : Auth::user()->getId();
            $id = $request->input('id');
            $name = $request->input('name');

            $beon = BeonsLab::findOrFail($id);
            $beonFilename = $beon->filename;

            $beon->destroy($id);

            // if (!(Storage::disk('beons_lab')->delete($userFolder . "/" . $beonFilename))) {
            //     throw new \Exception('ERROR: Failed to delete beon. Please contact the administrator.');
            // }

            $response['message'] = 'Successfully deleted beon: "' . $name . '" on "' . date('d/m/Y H:i:s') . ".";
        } catch (ModelNotFoundException $e) {
            Log::error($e->getMessage());
            $response['success'] = false;
            $response['message'] = 'ERROR: Your beon could not be found and thus, not deleted. Please contact the administrator.';
            $response['data'] = null;
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            $response['success'] = false;
            $response['message'] = 'ERROR: Your beon could not be deleted. Please contact the administrator.';
            $response['data'] = null;
        }

        return Response()->json($response);
    }

    /**
     * Uploads an audio in MP4 format. Creates the entry on database.
     *
     * @param Illuminate\Http\Request
     * @return App\Http\Controllers\JsonResponse JSON
     */
    public function uploadAudio(Request $request)
    {
        // Initialize variables
        $response = array(
            'success' => true,
            'message' => 'Ok',
            'data' => array()
        );

        $name = '';
        $type = '';
        $audioFile = null;
        $audioExtension = '';
        $checkAudioName = null;
        $audioDisk = '';

        try {
            $userId = Auth::user()->isAdmin() ? 0 : Auth::user()->getId();

            $audioFile = $request->file('audiofile');
            $audioExtension = $request->file('audiofile')->getClientOriginalExtension();

            if (!$audioFile->isValid()) {
                throw new \Exception('ERROR: Audio file contains errors.');
            }

            if ($audioExtension !== 'mp4' && $audioExtension !== 'aac') {
                throw new \Exception('ERROR: Please provide a MP4 audio.');
            }

            $name = explode('.', strtolower($request->file('audiofile')->getClientOriginalName()))[0];
            $fileName = strtolower(str_replace(' ', '_', $name)) . '.mp4';

            $checkAudioName = Audio::where('name', '=', $name)->first();
            if ($checkAudioName) {
                throw new \Exception('ERROR: Audio with the same name already exists.');
            }

            $type = strtolower($request->input('type'));
            $audioDisk = 'audio_' . $type;

            if (!(Storage::disk($audioDisk)->put($name . '.mp4', file_get_contents($audioFile), 'public'))) {
                throw new \Exception('ERROR: Failed to save file to disk.');
            }

            $audio = new Audio();
            $audio->fk_users = $userId;
            $audio->name = $name;
            $audio->filename = $fileName;
            $audio->type = $type;
            $audio->save();

            $response['message'] = 'Saved audio: "' . $name . '" on ' . date('d/m/Y H:i:s') . ".";
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            $response['success'] = false;
            $response['message'] = $e->getMessage();
            $response['data'] = null;
        }

        return Response()->json($response);
    }

    /**
     * Delete an audio from database and its local file.
     *
     * @param Illuminate\Http\Request
     * @return App\Http\Controllers\JsonResponse JSON
     */
    public function deleteAudio(Request $request)
    {
        // Initialize variables
        $response = array(
            'success' => true,
            'message' => 'Ok',
            'data' => array()
        );

        $type = '';
        $audioDisk = '';
        $audioFilename = '';

        try {
            $id = $request->input('id');
            $name = $request->input('name');

            $audio = Audio::findOrFail($id);
            $type = $audio->type;
            $audioFilename = $audio->filename;
            $audioDisk = 'audio_' . $type;

            if (!(Audio::destroy($id))) {
                throw new \Exception('ERROR: Failed to delete entry. Please contact the administrator.');
            }

            if (!(Storage::disk($audioDisk)->delete($audioFilename))) {
                throw new \Exception('ERROR: Failed to delete audio. Please contact the administrator.');
            }

            $response['message'] = 'Successfully deleted audio: "' . $name . '" on "' . date('d/m/Y H:i:s') . ".";
        } catch (ModelNotFoundException $e) {
            Log::error($e->getMessage());
            $response['success'] = false;
            $response['message'] = 'ERROR: Your audio could not be found and thus, not deleted. Please contact the administrator.';
            $response['data'] = null;
        } catch (Exception $e) {
            Log::error($e->getMessage());
            $response['success'] = false;
            $response['message'] = $e->getMessage();
            $response['data'] = null;
        }

        return Response()->json($response);
    }
}
