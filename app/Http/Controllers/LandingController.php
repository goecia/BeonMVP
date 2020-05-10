<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use App\Models\Feedback;
use App\Models\User;

class LandingController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['only' => 'getCilindro']);
    }

    /**
     * Saves the feedback given on landing page.
     *
     * @param Illuminate\Http\Request
     * @return string
     */
    public function saveLandingFeedback(Request $request)
    {
        // Initialize variables
        $response = array(
            'success' => true,
            'message' => 'Ok',
            'data' => null
        );

        try {
            $name = $request->input('nombre');
            $email = $request->input('mail');
            $message = $request->input('texto');

            $feedback = new Feedback;
            $feedback->name = $name;
            $feedback->email = $email;
            $feedback->message = $message;
            $feedback->save();
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            $response['success'] = false;
            $response['message'] = 'ERROR: Guest feedback could not be saved. Please contact the administrator.';
        }

        return Response()->json($response);
    }

    /**
     * Returns the "cilindro" view if the user has been previously authenticated.
     *
     * @return Illuminate\Support\Facades\View
     */
    public function getCilindro()
    {
        return view('landing.cilindro');
    }

    /**
     * Checks if given email is already registered.
     *
     * @param Illuminate\Http\Request
     * @return boolean
     */
    public function checkUniqueEmail(Request $request)
    {
        // Initialize variables
        $response = array(
            'success' => true,
            'message' => 'Ok',
            'data' => null
        );

        try {
            $response['data'] = User::where('email', $request->input('email'))->first() ? false : true;
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            $response['success'] = false;
            $response['message'] = 'ERROR: Could not retrieve email. Please contact the administrator.';
        }

        return Response()->json($response);
    }
}
