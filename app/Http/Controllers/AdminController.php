<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gamesetting;


class AdminController extends Controller
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
        return view('admin/adminlogin');
    }

    public function showHome()
    {
        return view('admin/adminhome');
    }
    
    
    public function settinggame()
    {
        $games = Gamesetting::get() ;
        
        return view("admin/adminsettinggame", [
            'games' => $games
        ]);
    }

    public function updatesettinggame1(Request $request)
    {   
        $id1 = 1 ;
        $id2 = 2 ;
        $id3 = 3 ;
        $id4 = 4 ;
        $id5 = 5 ;
        $value1 = $request->input('value1');
        $value2 = $request->input('value2');
        $value3 = $request->input('value3');
        $value4 = $request->input('value4');
        $value5 = $request->input('value5');

        $request->validate([
            'value1'=> 'required',
            'value2'=> 'required',
            'value3'=> 'required',
            'value4'=> 'required',
            'value5'=> 'required',
        ]);

        $model = Gamesetting::findOrFail($id1);
        $model->update([
            'timer' => $value1
        ]);

        $model = Gamesetting::findOrFail($id2);
        $model->update([
            'timer' => $value2
        ]);

        $model = Gamesetting::findOrFail($id3);
        $model->update([
            'timer' => $value3
        ]);

        $model = Gamesetting::findOrFail($id4);
        $model->update([
            'timer' => $value4
        ]);

        $model = Gamesetting::findOrFail($id5);
        $model->update([
            'timer' => $value5
        ]);

        return redirect()->route('settinggame');
    }


    public function updatesettinggame2(Request $request)
    {   
        $id1 = 6 ;
        $id2 = 7 ;
        $id3 = 8 ;
        $id4 = 9 ;
        $id5 = 10 ;
        $value1 = $request->input('value1');
        $value2 = $request->input('value2');
        $value3 = $request->input('value3');
        $value4 = $request->input('value4');
        $value5 = $request->input('value5');

        $request->validate([
            'value1'=> 'required',
            'value2'=> 'required',
            'value3'=> 'required',
            'value4'=> 'required',
            'value5'=> 'required',
        ]);

        $model = Gamesetting::findOrFail($id1);
        $model->update([
            'timer' => $value1
        ]);

        $model = Gamesetting::findOrFail($id2);
        $model->update([
            'timer' => $value2
        ]);

        $model = Gamesetting::findOrFail($id3);
        $model->update([
            'timer' => $value3
        ]);

        $model = Gamesetting::findOrFail($id4);
        $model->update([
            'timer' => $value4
        ]);

        $model = Gamesetting::findOrFail($id5);
        $model->update([
            'timer' => $value5
        ]);

        return redirect()->route('settinggame');
    }

    
    public function updatesettinggame3(Request $request)
    {   
        $id1 = 11 ;
        $id2 = 12 ;
        $id3 = 13 ;
        $id4 = 14 ;
        $id5 = 15 ;
        $value1 = $request->input('value1');
        $value2 = $request->input('value2');
        $value3 = $request->input('value3');
        $value4 = $request->input('value4');
        $value5 = $request->input('value5');

        $request->validate([
            'value1'=> 'required',
            'value2'=> 'required',
            'value3'=> 'required',
            'value4'=> 'required',
            'value5'=> 'required',
        ]);

        $model = Gamesetting::findOrFail($id1);
        $model->update([
            'timer' => $value1
        ]);

        $model = Gamesetting::findOrFail($id2);
        $model->update([
            'timer' => $value2
        ]);

        $model = Gamesetting::findOrFail($id3);
        $model->update([
            'timer' => $value3
        ]);

        $model = Gamesetting::findOrFail($id4);
        $model->update([
            'timer' => $value4
        ]);

        $model = Gamesetting::findOrFail($id5);
        $model->update([
            'timer' => $value5
        ]);

        return redirect()->route('settinggame');
    }

    public function updatesettinggame4(Request $request)
    {   
        $id1 = 16 ;
        $id2 = 17 ;
        $id3 = 18 ;
        $id4 = 19 ;
        $id5 = 20 ;
        $value1 = $request->input('value1');
        $value2 = $request->input('value2');
        $value3 = $request->input('value3');
        $value4 = $request->input('value4');
        $value5 = $request->input('value5');

        $request->validate([
            'value1'=> 'required',
            'value2'=> 'required',
            'value3'=> 'required',
            'value4'=> 'required',
            'value5'=> 'required',
        ]);

        $model = Gamesetting::findOrFail($id1);
        $model->update([
            'timer' => $value1
        ]);

        $model = Gamesetting::findOrFail($id2);
        $model->update([
            'timer' => $value2
        ]);

        $model = Gamesetting::findOrFail($id3);
        $model->update([
            'timer' => $value3
        ]);

        $model = Gamesetting::findOrFail($id4);
        $model->update([
            'timer' => $value4
        ]);

        $model = Gamesetting::findOrFail($id5);
        $model->update([
            'timer' => $value5
        ]);

        return redirect()->route('settinggame');
    }

    public function updatesettinggame5(Request $request)
    {   
        $id1 = 21 ;
        $id2 = 22 ;
        $id3 = 23 ;
        $id4 = 24 ;
        $id5 = 25 ;
        $value1 = $request->input('value1');
        $value2 = $request->input('value2');
        $value3 = $request->input('value3');
        $value4 = $request->input('value4');
        $value5 = $request->input('value5');

        $request->validate([
            'value1'=> 'required',
            'value2'=> 'required',
            'value3'=> 'required',
            'value4'=> 'required',
            'value5'=> 'required',
        ]);

        $model = Gamesetting::findOrFail($id1);
        $model->update([
            'timer' => $value1
        ]);

        $model = Gamesetting::findOrFail($id2);
        $model->update([
            'timer' => $value2
        ]);

        $model = Gamesetting::findOrFail($id3);
        $model->update([
            'timer' => $value3
        ]);

        $model = Gamesetting::findOrFail($id4);
        $model->update([
            'timer' => $value4
        ]);

        $model = Gamesetting::findOrFail($id5);
        $model->update([
            'timer' => $value5
        ]);

        return redirect()->route('settinggame');
    }

    public function updatesettinggame6(Request $request)
    {   
        $id1 = 26 ;
        $id2 = 27 ;
        $id3 = 28 ;
        $id4 = 29 ;
        $id5 = 30 ;
        $value1 = $request->input('value1');
        $value2 = $request->input('value2');
        $value3 = $request->input('value3');
        $value4 = $request->input('value4');
        $value5 = $request->input('value5');

        $request->validate([
            'value1'=> 'required',
            'value2'=> 'required',
            'value3'=> 'required',
            'value4'=> 'required',
            'value5'=> 'required',
        ]);

        $model = Gamesetting::findOrFail($id1);
        $model->update([
            'timer' => $value1
        ]);

        $model = Gamesetting::findOrFail($id2);
        $model->update([
            'timer' => $value2
        ]);

        $model = Gamesetting::findOrFail($id3);
        $model->update([
            'timer' => $value3
        ]);

        $model = Gamesetting::findOrFail($id4);
        $model->update([
            'timer' => $value4
        ]);

        $model = Gamesetting::findOrFail($id5);
        $model->update([
            'timer' => $value5
        ]);

        return redirect()->route('settinggame');
    }

    public function doLogin(Request $request)
    {
        
        $username = $request->input('username');
        $password = $request->input('password');
        
            if($username=='parkinsan' && $password=='chula'){
                return redirect()->route('showadminhome');
            } 
            else {
                return redirect()->route('showdoctorLogin');
            }

    }


}
