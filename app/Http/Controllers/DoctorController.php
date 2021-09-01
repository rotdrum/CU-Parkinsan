<?php

namespace App\Http\Controllers;

use App\Models\Exercise;
use App\Models\Doctor;
use App\Models\User;
use App\Models\Game;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use SweetAlert;


class DoctorController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function showLogin()
    {
        return view('doctor/doctorlogin');
    }

    public function showRegister()
    {
        return view('doctor/doctorregister');
    }

    public function showdoctorregister($id)
    {
        $doctors = Doctor::where("id", $id)->get() ;

        return view("doctor/register", [
            'doctors' => $doctors
        ]);
    }


    public function showHome($id)
    {
        $doctors = Doctor::where("id", $id)->get() ;

        return view("doctor/doctorhome", [
            'doctors' => $doctors
        ]);
    }

    
    public function showtest($id)
    {
        $doctors = Doctor::where("id", $id)->get();
        $exercises = Exercise::join('users', 'exercise.patient_id', '=', 'users.id')
                     ->where("doctor_id", $id)
                     ->orderBy('fname')
                     ->get() ;


        return view("doctor/doctortest", [
            'doctors' => $doctors,
            'exercises' => $exercises
        ]);
    }

    public function showreport($id)
    {
        $doctors = Doctor::where("id", $id)->get() ;
        $exercises = Exercise::join('users', 'exercise.patient_id', '=', 'users.id')
            ->where("doctor_id", $id)
            ->orderBy('fname')
            ->get() ;

        return view("doctor/doctorreport", [
            'doctors' => $doctors,
            'exercises' => $exercises
        ]);
    }

    public function showprofile($id)
    {
        $doctors = Doctor::where("id", $id)->get() ;

        return view("doctor/doctorprofile", [
            'doctors' => $doctors
        ]);
    }

    public function showrecommend($id)
    {
        $doctors = Doctor::where("id", $id)->get() ;

        return view("doctor/doctorrecommend", [
            'doctors' => $doctors
        ]);
    }

    public function vrshowrecommend($id)
    {
        $doctors = Doctor::where("id", $id)->get() ;

        return view("doctor/doctorvrrecommend", [
            'doctors' => $doctors
        ]);
    }

    public function boxshowrecommend($id)
    {
        $doctors = Doctor::where("id", $id)->get() ;

        return view("doctor/doctorboxrecommend", [
            'doctors' => $doctors
        ]);
    }


     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function doRegister(Request $request)
    {
    
        $request->validate([
            'tname' => ['required', 'string', 'max:255'],
            'fname' => ['required', 'string', 'max:255'],
            'lname' => ['required', 'string', 'max:255'],
            'age' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:4', 'confirmed'],
        ]);

        $passwordHide = $request->post('password');
        $username = $request->post('username');

        Doctor::create([
            'tname' => $request->post('tname'),
            'fname' => $request->post('fname'),
            'lname' => $request->post('lname'),
            'age' => $request->post('age'),
            'email' => $request->post('email'),
            'username' => $username,
            'password' => Hash::make($passwordHide)
        ]);

        $id = Doctor::where('username', $username)->pluck('id');
        $doctors = Doctor::where("id", $id)->get() ;

                return view("doctor/doctorhome", [
                    'doctors' => $doctors
                ]);
    }

    

    protected function validator(array $data)
    {
        return Validator::make($data, [
        ]);
    }
    protected function create(array $data)
    {
        return Doctor::create([
            'tname' => $data['tname'],
            'fname' => $data['fname'],
            'lname' => $data['lname'],
            'age' => $data['age'],
            'email' => $data['email'],
            'username' => $data['username'],      
            'password' => Hash::make($data['password']),
        ]);
    }
    
    public function doLogin(Request $request)
    {
        
        $username = $request->input('username');
        $password = $request->input('password');
        $id = Doctor::where('username', $username)->pluck('id');
        $passDBs = Doctor::where('username', $username)->pluck('password');
        
        
            if($username=='parkinsan' && $password=='chula'){
                return view("admin/adminhome");
            }
            else  if(empty($passDBs[0])){
                return redirect()->route('showdoctorLogin');
            }
           else if (Hash::check($password, $passDBs[0])) {
                $doctors = Doctor::where("id", $id)->get() ;
                return view("doctor/doctorhome", [
                    'doctors' => $doctors
                ]);
            }
            else {
                return redirect()->route('showdoctorLogin');
            }  
        
    }


    public function doctorsearch($id, Request $request)
    {
        
        $username = $request->input('username');

        if(empty($username)){
            return redirect()->route('showdoctortest' , $id);
        }

        $doctors = Doctor::where("id", $id)->get() ;
        $patients = User::where("username", $username)->get() ;
        $exercises = Exercise::join('users', 'exercise.patient_id', '=', 'users.id')
                     ->where("doctor_id", $id) 
                     ->where("username", $username)
                     ->select('exercise.*', 'users.id', 'users.username', 'users.username' , 'users.tname', 'users.fname', 'users.lname', 'users.age'  ) 
                     ->get() ;

        if(empty($patients[0])){
            return redirect()->route('showdoctortest' , $id);
        }

        return view("doctor/doctorsearch", [
            'doctors' => $doctors ,
            'patients' => $patients,
            'exercises' => $exercises
        ]);
    }

    public function doctorsearchreport($id, Request $request)
    {
        $username = $request->input('username');

        if(empty($username)){
            return redirect()->route('showdoctorreport' , $id);
        }

        $doctors = Doctor::where("id", $id)->get() ;
        $patients = User::where("username", $username)->get() ;
        $exercises = Exercise::join('users', 'exercise.patient_id', '=', 'users.id')
                     ->where("doctor_id", $id) 
                     ->where("username", $username) 
                     ->select('exercise.*', 'users.id', 'users.username', 'users.username' , 'users.tname', 'users.fname', 'users.lname', 'users.age'  ) 
                     ->get() ;

        $user_id = User::where("username", $username)->pluck("id") ;
        $games = Game::where("user_id", $user_id)->get() ;


        if(empty($patients[0])){
            return redirect()->route('showdoctorreport' , $id);
        }


        return view("doctor/doctorsearchreport", [
            'doctors' => $doctors ,
            'patients' => $patients,
            'exercises' => $exercises,
            'games' => $games,
        ]);
    }

    public function doctorcreate($id, Request $request)
    {
        $default = 0 ;

        $request->validate([
            'ex_ignore_r' => ['required'],
            'ex_clasp_r' => ['required'],
            'ex_pleats_r' => ['required'],
            'ex_ignore_l' => ['required'],
            'ex_clasp_l' => ['required'],
            'ex_pleats_l' => ['required'],
            'comment' => ['required', 'string', 'max:255'],
            'patient_id' => ['required'],
        ]);

        Exercise::create([
            'ex_ignore_r' => $request->post('ex_ignore_r'),
            'ex_clasp_r' => $request->post('ex_clasp_r'),
            'ex_pleats_r' => $request->post('ex_pleats_r'),
            'ex_ignore_l' => $request->post('ex_ignore_l'),
            'ex_clasp_l' => $request->post('ex_clasp_l'),
            'ex_pleats_l' => $request->post('ex_pleats_l'),

            'do_ignore_r' => $default,
            'do_clasp_r' => $default,
            'do_pleats_r' => $default,
            'do_ignore_l' => $default,
            'do_clasp_l' => $default,
            'do_pleats_l' => $default,

            's_ignore_r' => $default,
            's_clasp_r' => $default,
            's_pleats_r' => $default,
            's_ignore_l' => $default,
            's_clasp_l' => $default,
            's_pleats_l' => $default,

            'comment' => $request->post('comment'),
            'patient_id' => $request->post('patient_id'),
            'doctor_id' => $id,
        ]);


        return redirect()->route('showdoctortest' , $id);


    }


  


}
