<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Hashing\BcryptHasher;
use App\Models\User;

class UserProfileController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Returns the "userprofile" view if the user has been previously authenticated.
     *
     * @return Illuminate\Support\Facades\View
     */
    public function index()
    {
        return view('userprofile');
    }

    /**
     * Updates user password with given entry.
     *
     * @param Illuminate\Http\Request
     * @return App\Http\Controllers\JsonResponse JSON
     */
    public function updatePassword(Request $request)
    {
        $this->validate($request, [
            'password' => 'required|string|min:6|confirmed',
        ]);

        // Initialize variables
        $response = array(
            'success' => true,
            'message' => 'Password successfully updated.',
            'data' => array()
        );

        try {
            $userId = Auth::user()->getId();
            $currentPassword = $request->input('current-password');
            $password = $request->input('password');

            $hasher = new BcryptHasher();
            $passwordValidation = $hasher->check($password, $user['password']);

            User::where('id', $userId)->update(['password' => $password]);
        } catch (Exception $e) {
            Log::error($e->getMessage());
            $response['success'] = false;
            $response['message'] = 'ERROR: Could not update password. Please contact the administrator.';
        }

        return $response;
    }

    /**
     * Updates user email with given entry.
     *
     * @param Illuminate\Http\Request
     * @return App\Http\Controllers\JsonResponse JSON
     */
    public function updateEmail(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|string|email|max:200|unique:users',
        ]);

        // Initialize variables
        $response = array(
            'success' => true,
            'message' => 'Email successfully updated.',
            'data' => array()
        );

        try {
            $userId = Auth::user()->getId();
            $email = $request->input('email');

            User::where('id', $userId)->update(['email' => $email]);
        } catch (Exception $e) {
            Log::error($e->getMessage());
            $response['success'] = false;
            $response['message'] = 'ERROR: Could not update email. Please contact the administrator.';
        }

        return $response;
    }

    /**
     * Updates user name with given entry.
     *
     * @param Illuminate\Http\Request
     * @return App\Http\Controllers\JsonResponse JSON
     */
    public function updateName(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|max:70|min:4|confirmed',
        ]);

        // Initialize variables
        $response = array(
            'success' => true,
            'message' => 'Name successfully updated.',
            'data' => array()
        );

        try {
            $userId = Auth::user()->getId();
            $name = $request->input('name');

            User::where('id', $userId)->update(['name' => $name]);
        } catch (Exception $e) {
            Log::error($e->getMessage());
            $response['success'] = false;
            $response['message'] = 'ERROR: Could not update name. Please contact the administrator.';
        }

        return $response;
    }

    /**
     * Updates user avatar with given entry.
     *
     * @param Illuminate\Http\Request
     * @return App\Http\Controllers\JsonResponse JSON
     */
    public function updateAvatar(Request $request)
    {
        $this->validate($request, [
            'avatar' => 'required|image|mimes:jpeg,jpg,png,bmp,gif|max:666|dimensions:min_width=100,min_height=100,max_width=1000,max_height=1000',
        ]);

        // Initialize variables
        $response = array(
            'success' => true,
            'message' => 'Ok',
            'data' => array()
        );

        try {
            $userId = Auth::user()->getId();
            $avatar = $request->file('avatar');
            $avatarExtension = $request->file('avatar')->getClientOriginalExtension();
            $avatarName = time() . "_{$userId}.{$avatarExtension}";
            $user = User::findOrFail($userId);
            $oldAvatarName = $user->avatar;

            // Update DB avatar
            User::where('id', $userId)->update(['avatar' => $avatarName]);

            // Delete old avatar (if it's not the default one) and upload the new one
            if ($oldAvatarName !== "adefault.jpg") {
                Storage::disk('avatars')->delete($oldAvatarName);
            }
            Storage::disk('avatars')->put($avatarName, file_get_contents($avatar), 'public');
        } catch (Exception $e) {
            Log::error($e->getMessage());
            $response['success'] = false;
            $response['message'] = 'ERROR: Could not update avatar. Please contact the administrator.';
        }

        return $response;
    }
}
