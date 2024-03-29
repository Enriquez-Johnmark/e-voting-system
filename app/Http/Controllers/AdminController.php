<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class AdminController extends Controller
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
    protected $redirectTo = RouteServiceProvider::HOME;
    protected function redirectTo(){
        if(Auth::user()->role == 1){
            return route('admin.dashboard');
        }
        elseif(Auth::user()-> role == 2){
            return route('voter.dashboard');
        }
    }
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
    // protected function validator(array $data)
    // {
    //     return Validator::make($data, [
    //         'firstname' => ['required', 'string', 'max:255'],
    //         'lastname' => ['required', 'string', 'max:255'],
    //         'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
    //         'password' => ['required', 'string', 'min:8', 'confirmed'],
    //     ]);
    // }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    // protected function create(array $data)
    // {
    //     return User::create([
    //         'firstname' => $data['firstname'],
    //         'lastname' => $data['lastname'],
    //         'email' => $data['email'],
    //         'role'=>1,
    //         'password' => Hash::make($data['password']),
    //     ]);

    // }

    // public function create(array $data)
    // {
    //     return User::create([
    //         'firstname' => $data['firstname'],
    //         'lastname' => $data['lastname'],
    //         'email' => $data['email'],
    //         'role'=>1,
    //         'password' => Hash::make($data['password']),
    //     ]);

    // }

    public function showForm(){
      return view ('admin.register');
    }

    public function store(Request $request)
    {
      $data = $request->all();
      $admin = new User;
      $admin->firstname           = $data['firstname'];
      $admin->lastname            = $data['lastname'];
      $admin->email               = $data['email'];
      $admin->password            = Hash::make($data['password']);
      $admin->role                = 1;
      $admin->save();
        return redirect('/login')->with('success', 'Register Sucessfully'); 

    }

    
}
