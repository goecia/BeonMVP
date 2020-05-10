<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelpController extends Controller
{
    /**
     * Returns the "help" view.
     *
     * @return Illuminate\Support\Facades\View
     */
    public function index()
    {
        return view('help');
    }
}
