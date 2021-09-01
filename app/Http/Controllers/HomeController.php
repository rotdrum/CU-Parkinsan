<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Exercise;
use App\Models\User;
use App\Models\Game;
use App\Models\Gamesetting;
use Illuminate\Support\Facades\Auth;

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
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    

    public function playmethod()
    {
        return view('patient/playmethod');
    }


    public function gamemode()
    {
        $cl_games = Gamesetting::where("type", 1)->get() ;
        $cr_games = Gamesetting::where("type", 2)->get() ;
        $pl_games = Gamesetting::where("type", 3)->get() ;
        $pr_games = Gamesetting::where("type", 4)->get() ;
        $sl_games = Gamesetting::where("type", 5)->get() ;
        $sr_games = Gamesetting::where("type", 6)->get() ;

        return view("patient/gamemode", [
            'cl_games' => $cl_games ,
            'cr_games' => $cr_games ,
            'pl_games' => $pl_games ,
            'pr_games' => $pr_games ,
            'sl_games' => $sl_games ,
            'sr_games' => $sr_games 
        ]);
    }

    public function showgamebox($gamesetting_id, $id)
    {
        $gamesettings = Gamesetting::where("id", $gamesetting_id)->get() ;
        $games = Game::where("id", $id)->get() ;

        return view("patient/boxgame/box", [
            'gamesettings' => $gamesettings ,
            'games' => $games ,
        ]);
    }


    public function showgamevr($gamesetting_id, $id)
    {
        $gamesettings = Gamesetting::where("id", $gamesetting_id)->get() ;
        $games = Game::where("id", $id)->get() ;

        return view("patient/vrgame/vr", [
            'gamesettings' => $gamesettings ,
            'games' => $games ,
        ]);
    }

    public function showtestvr1($id)
    {
        $exercises = Exercise::where("id", $id)->get() ;

        return view("patient/vrtest/vr1", [
            'exercises' => $exercises ,
        ]);
    }

    public function showtestvr2($id)
    {
        $exercises = Exercise::where("id", $id)->get() ;

        return view("patient/vrtest/vr2", [
            'exercises' => $exercises ,
        ]);
    }

    public function showtestvr3($id)
    {
        $exercises = Exercise::where("id", $id)->get() ;

        return view("patient/vrtest/vr3", [
            'exercises' => $exercises ,
        ]);
    }

    public function showtestvr4($id)
    {
        $exercises = Exercise::where("id", $id)->get() ;

        return view("patient/vrtest/vr4", [
            'exercises' => $exercises ,
        ]);
    }

    public function showtestvr5($id)
    {
        $exercises = Exercise::where("id", $id)->get() ;

        return view("patient/vrtest/vr5", [
            'exercises' => $exercises ,
        ]);
    }

    public function showtestvr6($id)
    {
        $exercises = Exercise::where("id", $id)->get() ;

        return view("patient/vrtest/vr6", [
            'exercises' => $exercises ,
        ]);
    }



    
    public function showtestbox1($id)
    {
        $exercises = Exercise::where("id", $id)->get() ;

        return view("patient/boxtest/box1", [
            'exercises' => $exercises ,
        ]);
    }

    public function showtestbox2($id)
    {
        $exercises = Exercise::where("id", $id)->get() ;

        return view("patient/boxtest/box2", [
            'exercises' => $exercises ,
        ]);
    }

    public function showtestbox3($id)
    {
        $exercises = Exercise::where("id", $id)->get() ;

        return view("patient/boxtest/box3", [
            'exercises' => $exercises ,
        ]);
    }

    public function showtestbox4($id)
    {
        $exercises = Exercise::where("id", $id)->get() ;

        return view("patient/boxtest/box4", [
            'exercises' => $exercises ,
        ]);
    }


    public function showtestbox5($id)
    {
        $exercises = Exercise::where("id", $id)->get() ;

        return view("patient/boxtest/box5", [
            'exercises' => $exercises ,
        ]);
    }


    public function showtestbox6($id)
    {
        $exercises = Exercise::where("id", $id)->get() ;

        return view("patient/boxtest/box6", [
            'exercises' => $exercises ,
        ]);
    }

    public function updategameboxmode1(Request $request, $id)
    {   
        $value_h = $request->input('vel_h');
        $value_l = $request->input('vel_l');

        $model = Game::findOrFail($id);
      
        $request->validate([
            'vel_h'=> 'required',
            'vel_l'=> 'required',
        ]);

        $model->update([
            'do_lowvalue' => $value_l ,
            'do_highvalue' => $value_h ,
        ]);

        return redirect()->route('gamemode');
    }

    public function updatevrmode1(Request $request)
    {   
        $id = $request->input('id');
        $value = $request->input('value_');

        $model = Exercise::findOrFail($id);
        $request->validate([
            'value_'=> 'required'
        ]);

        $model->update([
            'do_ignore_l' => $value
        ]);

        return redirect()->route('showtestvr2' , $id);
    }


    public function updatevrmode2(Request $request)
    {   
        $id = $request->input('id');
        $value = $request->input('value_');

        $model = Exercise::findOrFail($id);
        $request->validate([
            'value_'=> 'required'
        ]);

        $model->update([
            'do_pleats_l' => $value
        ]);

        return redirect()->route('showtestvr3' , $id);
    }


    public function updatevrmode3(Request $request)
    {   
        $id = $request->input('id');
        $value = $request->input('value_');

        $model = Exercise::findOrFail($id);
        $request->validate([
            'value_'=> 'required'
        ]);

        $model->update([
            'do_clasp_l' => $value
        ]);

        return redirect()->route('showtestvr4' , $id);
    }

    public function updatevrmode4(Request $request)
    {   
        $id = $request->input('id');
        $value = $request->input('value_');

        $model = Exercise::findOrFail($id);
        $request->validate([
            'value_'=> 'required'
        ]);

        $model->update([
            'do_ignore_r' => $value
        ]);

        return redirect()->route('showtestvr5' , $id);
    }

    public function updatevrmode5(Request $request)
    {   
        $id = $request->input('id');
        $value = $request->input('value_');

        $model = Exercise::findOrFail($id);
        $request->validate([
            'value_'=> 'required'
        ]);

        $model->update([
            'do_pleats_r' => $value
        ]);

        return redirect()->route('showtestvr6' , $id);
    }

    public function updatevrmode6(Request $request)
    {   
        $id = $request->input('id');
        $value = $request->input('value_');

        $model = Exercise::findOrFail($id);
        $request->validate([
            'value_'=> 'required'
        ]);

        $model->update([
            'do_clasp_r' => $value
        ]);

        return redirect()->route('testmode');
    }

    public function updateboxmode1(Request $request)
    {   
        $id = $request->input('id');
        $value = $request->input('value_');

        $model = Exercise::findOrFail($id);
        $request->validate([
            'value_'=> 'required'
        ]);

        $model->update([
            'do_ignore_l' => $value
        ]);

        return redirect()->route('showtestbox2' , $id);
    }

    public function updateboxmode2(Request $request)
    {   
        $id = $request->input('id');
        $value = $request->input('value_');

        $model = Exercise::findOrFail($id);
        $request->validate([
            'value_'=> 'required'
        ]);

        $model->update([
            'do_pleats_l' => $value
        ]);

     
        return redirect()->route('showtestbox3' , $id);
    }

    public function updateboxmode3(Request $request)
    {   
        $id = $request->input('id');
        $value = $request->input('value_');


        $model = Exercise::findOrFail($id);
        $request->validate([
            'value_'=> 'required'
        ]);

        $model->update([
            'do_clasp_l' => $value
        ]);


        return redirect()->route('showtestbox4' , $id);
    }

    public function updateboxmode4(Request $request)
    {   
        $id = $request->input('id');
        $value = $request->input('value_');

        $model = Exercise::findOrFail($id);
        $request->validate([
            'value_'=> 'required'
        ]);

        $model->update([
            'do_ignore_r' => $value
        ]);

        return redirect()->route('showtestbox5' , $id);
    }

    public function updateboxmode5(Request $request)
    {   
        $id = $request->input('id');
        $value = $request->input('value_');

        $model = Exercise::findOrFail($id);
        $request->validate([
            'value_'=> 'required'
        ]);

        $model->update([
            'do_pleats_r' => $value
        ]);

        return redirect()->route('showtestbox6' , $id);
    }

    public function updateboxmode6(Request $request)
    {   
        $id = $request->input('id');
        $value = $request->input('value_');

        $model = Exercise::findOrFail($id);
        $request->validate([
            'value_'=> 'required'
        ]);

        $model->update([
            'do_clasp_r' => $value
        ]);

        return redirect()->route('testmode');
    }



    public function creategamebox(Request $request)
    {
        $gamesetting_id = $request->post('id');

        if($request->post('type') == 1){
            $lowvalue = Auth::user()->clasp_l;
            $highvalue = Auth::user()->ignore_l;
        }
        else if($request->post('type') == 2){
            $lowvalue = Auth::user()->clasp_r;
            $highvalue = Auth::user()->ignore_r;

        }
        else if($request->post('type') == 3){
            $lowvalue = Auth::user()->pleats_l;
            $highvalue = Auth::user()->ignore_l;
        }
        else if($request->post('type') == 4){
            $lowvalue = Auth::user()->pleats_r;
            $highvalue = Auth::user()->ignore_r;
        }
        else if($request->post('type') == 5){
            $lowvalue = Auth::user()->ignore_l - 0.0100;
            $highvalue = Auth::user()->ignore_l;
        }
        else if($request->post('type') == 6){
            $lowvalue = Auth::user()->ignore_r - 0.0100;
            $highvalue = Auth::user()->ignore_r;
        }

        $request->validate([
            'lavel' => ['required'],
            'type' => ['required'],
        ]);

        $ids = Game::where("user_id", Auth::user()->id)
                ->where("lavel", $request->post('lavel'))
                ->where("type", $request->post('type'))
                ->where("lowvalue", $lowvalue)
                ->where("highvalue", $highvalue)
                ->pluck('id');

        
        if(empty($ids[0])) {
            Game::create([
                'lavel' => $request->post('lavel'),
                'type' => $request->post('type'),
                'lowvalue' => $lowvalue,
                'highvalue' => $highvalue,
                'do_lowvalue' => 0,
                'do_highvalue' => 0,
                'user_id' => Auth::user()->id,
                'do_value' => 0,
                'status' => 0
            ]);

            $ids = Game::where("user_id", Auth::user()->id)
                    ->where("lavel", $request->post('lavel'))
                    ->where("type", $request->post('type'))
                    ->where("lowvalue", $lowvalue)
                    ->where("highvalue", $highvalue)
                    ->pluck('id');
        }
       

        $type = $request->post('type');
        $lavel = $request->post('lavel');

        $id = $ids[0];

        return redirect()->route('showgamebox' , [
            $gamesetting_id,
            $id
        ]);

    }


    public function creategamevr(Request $request)
    {
        $gamesetting_id = $request->post('id');

        if($request->post('type') == 1){
            $lowvalue = Auth::user()->clasp_l;
            $highvalue = Auth::user()->ignore_l;
        }
        else if($request->post('type') == 2){
            $lowvalue = Auth::user()->clasp_r;
            $highvalue = Auth::user()->ignore_r;

        }
        else if($request->post('type') == 3){
            $lowvalue = Auth::user()->pleats_l;
            $highvalue = Auth::user()->ignore_l;
        }
        else if($request->post('type') == 4){
            $lowvalue = Auth::user()->pleats_r;
            $highvalue = Auth::user()->ignore_r;
        }
        else if($request->post('type') == 5){
            $lowvalue = Auth::user()->ignore_l - 0.0100;
            $highvalue = Auth::user()->ignore_l;
        }
        else if($request->post('type') == 6){
            $lowvalue = Auth::user()->ignore_r - 0.0100;
            $highvalue = Auth::user()->ignore_r;
        }

        $request->validate([
            'lavel' => ['required'],
            'type' => ['required'],
        ]);

        $ids = Game::where("user_id", Auth::user()->id)
                ->where("lavel", $request->post('lavel'))
                ->where("type", $request->post('type'))
                ->where("lowvalue", $lowvalue)
                ->where("highvalue", $highvalue)
                ->pluck('id');

        
        if(empty($ids[0])) {
            Game::create([
                'lavel' => $request->post('lavel'),
                'type' => $request->post('type'),
                'lowvalue' => $lowvalue,
                'highvalue' => $highvalue,
                'do_lowvalue' => 0,
                'do_highvalue' => 0,
                'user_id' => Auth::user()->id,
                'do_value' => 0,
                'status' => 0
            ]);

            $ids = Game::where("user_id", Auth::user()->id)
                    ->where("lavel", $request->post('lavel'))
                    ->where("type", $request->post('type'))
                    ->where("lowvalue", $lowvalue)
                    ->where("highvalue", $highvalue)
                    ->pluck('id');
        }
       

        $type = $request->post('type');
        $lavel = $request->post('lavel');

        $id = $ids[0];

        return redirect()->route('showgamevr' , [
            $gamesetting_id,
            $id
        ]);

    }




    public function gameboxmode()
    {
        return view('patient/gameboxmode');
    }

    public function gamevrmode()
    {
        return view('patient/gamevrmode');
    }

    public function testmode()
    {
        $exercises = Exercise::where("patient_id", Auth::user()->id)->get() ;

        return view("patient/testmode", [
            'exercises' => $exercises
        ]);
    }

    public function profile()
    {
        $patients = User::where("id", Auth::user()->id)->get() ;

        return view("patient/profile", [
            'patients' => $patients
        ]);
    }



}
