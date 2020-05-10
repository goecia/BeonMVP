<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\UsersBeons;
use App\Models\BeonsPublished;

class HomeController extends Controller
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
     * Returns the "home" view.
     *
     * @return Illuminate\Support\Facades\View
     */
    public function index()
    {
        $beons = array();
        $userId = Auth::user()->isAdmin() ? 0 : Auth::user()->getId();
        $usersBeons = UsersBeons::where('fk_users', '=', $userId)->pluck('fk_beons_published')->toArray();
        $beons = BeonsPublished::whereIn('id', $usersBeons)->get();

        return view('home', ['beons' => $beons]);
    }

    /**
     * Returns a static view from published beons.
     *
     * @param int
     * @return void
     */
    public function getPublished($beonId)
    {
        $response = array(
            'success' => true,
            'message' => 'Ok',
            'data' => null
        );

        try {
            // $userId = Auth::user()->isAdmin() ? 0 : Auth::user()->getId();
            $publishedBeon = BeonsPublished::findOrFail($beonId);
            $fkUserId = $publishedBeon->fk_users;
            $beonFilename = $publishedBeon->filename;
            // TODO: Verify user can access to this beon.
            return Storage::disk('beons_published')->get('/' . $fkUserId . '/' . $beonFilename);
        } catch (Exception $e) {
            Log::error($e->getMessage());
            $response['success'] = false;
            $response['message'] = 'ERROR: This Beon either do not exists or does not belong to your user.';
            $response['data'] = null;
        }

        return $response;
    }
}
