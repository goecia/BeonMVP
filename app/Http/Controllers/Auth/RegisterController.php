<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Http\Controllers\Controller;
use App\Jobs\SendVerificationEmail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use App\Models\BeonsLab;
use App\Models\UsersBeons;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users', 
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'email_token' => base64_encode($data['email']),
        ]);
    }

    /**
    * Handle a registration request for the application.
    *
    * @param \Illuminate\Http\Request $request
    * @return \Illuminate\Http\Response
    */
    public function register(Request $request)
    {
        try {
            $this->validator($request->all())->validate();
            event(new Registered($user = $this->create($request->all())));
            dispatch_now(new SendVerificationEmail($user));
            return view('verification');
        } catch (\Exception $e) {
            var_dump($e->getMessage());
        }
    }

    /**
    * Handle a registration request for the application.
    *
    * @param $token
    * @return \Illuminate\Http\Response
    */
    public function verify($token)
    {
        $user = User::where('email_token',$token)->first();
        $user->verified = 1;
        if($user->save()){
            $this->createDefaults($user->id);
            return view('emailconfirm',['user'=>$user]);
        }
    }

    /**
    * Creates defaults for new users.
    * This will create a default beon for lab, and the previous seen landing beons on published.
    *
    * @param integer
    * @return void
    */
    protected function createDefaults($userId)
    {
        try {
            $this->createDefaultBeonsLab($userId);
            $this->createDefaultUsersBeons($userId);
        } catch (\Exception $e) {
            Log::error("ERROR: Registering user | " . date('d/m/Y H:i:s') . " | " . $e->getMessage());
        }
    }

    /**
    * Creates user folder on "/public/beons/lab/{$userId}".
    * Copies default "El Cilindro" beon to "/public/beons/lab/{$userId}/el_cilindro.txt".
    *
    * @param integer
    * @return void
    */
    private function createDefaultBeonsLab($userId)
    {
        $defaultName = "El Cilindro";
        $defaultFilename = "el_cilindro.txt";
        $defaultBeon = Storage::disk('beons_lab')->get("0/{$defaultFilename}");

        // Create the new user folder.
        if(!Storage::disk('beons_lab')->exists($userId . '/')) {
            Storage::disk('beons_lab')->makeDirectory($userId, 0777, true);
        }

        // Save default beon lab to new user folder
        if(!Storage::disk('beons_lab')->exists($userId . "/{$defaultFilename}")) {
            Storage::disk('beons_lab')->put($userId . "/{$defaultFilename}", $defaultBeon, 'public');
        }

        // Save new default entry to DB
        $beons = new BeonsLab;
        $beons->fk_users = $userId;
        $beons->name = $defaultName;
        $beons->filename = $defaultFilename;
        $beons->save();
    }

    /**
    * Creates entries into "users_beons" table to reflect that user has watched the landing ones.
    *
    * @param integer
    * @return void
    */
    private function createDefaultUsersBeons($userId)
    {
        $defaultBeons = array(1, 2, 3); // TODO: put this array on a config file.

        foreach ($defaultBeons as $defaultBeon) {
            // Save the entry.
            $usersBeons = new UsersBeons;
            $usersBeons->fk_users = $userId;
            $usersBeons->fk_beons_published = $defaultBeon;
            $usersBeons->save();
        }
    }
}
