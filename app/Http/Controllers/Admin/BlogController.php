<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\BlogEntries;

class BlogController extends Controller
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
     * Saves the blog entry onto DB.
     *
     * @param Illuminate\Http\Request
     * @return App\Http\Controllers\JsonResponse JSON
     */
    public function saveEntry(Request $request)
    {
        // Initialize variables
        $response = array(
            'success' => true,
            'message' => 'Ok',
            'data' => array()
        );

        try {
            $title = $request->input('title');
            $entry = $request->input('text');
            $fk_users = Auth::user()->getId();

            $beons = new BlogEntries;
            $beons->title = $title;
            $beons->entry = $entry;
            $beons->fk_users = $fk_users;
            $beons->save();

            $response['message'] = 'Inserted new entry: "' . $title . '" on ' . date('d/m/Y H:i:s') . ".";
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            $response['success'] = false;
            $response['message'] = 'ERROR: Your post could not be saved. Please contact the administrator.';
        }

        return $response;
    }
}
