<?php

namespace App\Http\Controllers;


use App\Models\Exercise;
use App\Models\Project;
use App\Models\Game;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProjectController extends Controller
{
    public function uploadfile(request $request)
    {
        $path=$request->file('work')->store('upload');
        echo $path;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {       
        $projects = Project::where("user_id", Auth::user()->id)->get();
        $exercises = Exercise::where("patient_id", Auth::user()->id)->get() ;
        $gamel_s = Game::where("user_id", Auth::user()->id)
                        ->whereIn('type', [1, 3, 5])
                         ->whereColumn([
                                ['do_lowvalue', '=', 'lowvalue'],
                                ['do_highvalue', '=', 'highvalue']
                        ])   
                        ->get();
        $gamer_s = Game::where("user_id", Auth::user()->id)
                        ->whereIn('type', [2, 4, 6])
                        ->whereColumn([
                            ['do_lowvalue', '=', 'lowvalue'],
                            ['do_highvalue', '=', 'highvalue']
                        ])
                        ->get();


        return view("project/index", [
            'projects' => $projects ,
            'exercises' => $exercises ,
            'gamel_s' => $gamel_s ,
            'gamer_s' => $gamer_s ,
        ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("project/create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=> 'required|unique:projects'
        ]);

        Project::create([
            'name' => $request->post('name'),
            'user_id' => Auth::user()->id
        ]);

        return redirect()->route('project.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $model = Project::findOrFail($id);
        return view('project/edit', ['model'=>$model]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $model = Project::findOrFail($id);
        $request->validate([
            'name'=> 'required|unique:projects,name,'.$id.',id'
        ]);

        $model->update([
            'name'=>$request->post('name')
        ]);

        return redirect()->route('project.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = Project::findOrFail($id);
        $model->delete();
    }
}
