<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\BeonsPublished;

class AdminController extends Controller
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
     * Display a listing of the resource.
     *
     * @return Illuminate\Support\Facades\View
     */
    public function index()
    {
        try {
            $data = $this->getAllUsers();
            $response = view('admin.admin', ['data' => $data]);
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            $response = 'ERROR: View not found. Please contact the administrator.';
        }

        return $response;
    }

    /**
     * Returns all users from DB.
     *
     * @return array
     */
    public function getAllUsers()
    {
        try {
            $response = User::all();
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            $response = 'ERROR: Could not pull data from DB. Please contact the administrator.';
        }

        return $response;
    }

    /**
     * Switches an user from Normal to Admin and viceversa.
     *
     * @param int
     * @return void
     */
    public function toggleAdmin(Request $request)
    {
        $response = array(
            'success' => true,
            'message' => 'Ok',
            'data' => null
        );

        try {
            $id = $request->input('id');

            $user = User::find($id);
            $user->admin = !$user->admin;
            $user->save();
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            $response['success'] = false;
            $response['message'] = 'ERROR: Could not switch admin privileges.';
            $response['data'] = null;
        }

        return Response()->json($response);
    }

    /**
     * Returns a static view from published beons.
     *
     * @param int
     * @return void
     */
    public function getPublished($beonId) // ESTO ESTA DENTRO DEL ADMIN CONTROLLER POR ESO UN USUARIO NORMAL NO PUEDE ENTRAR
    {
        $response = array(
            'success' => true,
            'message' => 'Ok',
            'data' => null
        );

        try {
            $userId = Auth::user()->isAdmin() ? 0 : Auth::user()->getId();
            $publishedBeon = BeonsPublished::findOrFail($beonId);
            $beonFilename = $publishedBeon->filename;
            // TODO: Verify user can access to this beon.
            return Storage::disk('beons_published')->get('/' . $userId . '/' . $beonFilename);
        } catch (Exception $e) {
            Log::error($e->getMessage());
            $response['success'] = false;
            $response['message'] = 'ERROR: This Beon either do not exists or does not belong to your user.';
            $response['data'] = null;
        }

        return $response;
    }
}
