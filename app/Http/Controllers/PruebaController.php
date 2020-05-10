<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Audio;

class PruebaController extends Controller
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
     * Shows the current test.
     *
     * @return Illuminate\Support\Facades\View
     */
    public function index()
    {
        return view('prueba');
    }

    /**
     * Downloads an audio file by given audio id.
     *
     * @param integer
     * @return Illuminate\Contracts\Routing File
     */
    public function downloadAudio($audioId)
    {
        // TODO: Add validations.
        $audio = Audio::select('filename', 'type')->where('id', $audioId)->get();
        $audioType = $audio[0]->type;
        $audioFilename = $audio[0]->filename;
        $path = public_path("audio/{$audioType}/{$audioFilename}");

        return response()->download($path);
    }
}
