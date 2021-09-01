<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

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
    protected $redirectTo = '/project';

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
            'tname' => ['required', 'string', 'max:255'],
            'fname' => ['required', 'string', 'max:255'],
            'lname' => ['required', 'string', 'max:255'],
            'age' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:4', 'confirmed'],
            'ignore_r' => ['required'],
            'clasp_r' => ['required'],
            'pleats_r' => ['required'],
            'ignore_l' => ['required'],
            'clasp_l' => ['required'],
            'pleats_l' => ['required'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        if($data['ignore_l'] == 1){
            $ignore_l = $data['ignore_l'] - 0.0001 ;
        }else{
            $ignore_l = $data['ignore_l'] ;
        }

        if($data['ignore_r'] == 1){
            $ignore_r = $data['ignore_r'] - 0.0001 ;
        }else{
            $ignore_r = $data['ignore_r'] ;
        }

        return User::create([
            'tname' => $data['tname'],
            'fname' => $data['fname'],
            'lname' => $data['lname'],
            'age' => $data['age'],
            'email' => $data['email'],
            'username' => $data['username'],      
            'password' => Hash::make($data['password']),
            'ignore_r' => $ignore_r,
            'clasp_r' => $data['clasp_r'],
            'pleats_r' => $data['pleats_r'],
            'ignore_l' => $ignore_l,
            'clasp_l' => $data['clasp_l'],
            'pleats_l' => $data['pleats_l'],
        ]);
    }
}
