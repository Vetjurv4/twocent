<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Programme;
use App\Project;

class Projects extends Controller {

    /**
     * Create a new controller instance.
     *
     * @return void
     */
     public function __construct() {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id) {
        //
        $program = Programme::findOrFail($id);
        return view('projects.index')->with('program', $program);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id) {
        //   
        return view('projects.create')->with('id', $id);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id) {


        $validatedData = $request->validate([
            'name' => ['required'],
            'responsibility' => ['required'],
            'description' => ['required']
        ]);

        $program = Programme::findOrFail($id);
        if ($program !== null) {
            $project = new Project;
            $project->programme_id = $program->id;
            $project->name = $request->input('name');
            $project->responsibility = $request->input('responsibility');
            $project->description = $request->input('description');
            $project->save();
        }else{
            return redirect()->back();
        }



        return redirect('program/'.$program->id.'/projects');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        //
        $project = Project::findOrFail($id);
        return view('projects.show')->with('project', $project);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        //
        $project = Project::findOrFail($id);
        return view('projects.edit')->with('project', $project);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        //
        $vlidatedData = $request->validate([
            'name' => ['required'],
            'responsibility' => ['required'],
            'description' => ['required']
        ]);
        
        $project = Project::findOrFail($id);
        if($project !== null){
            $project->name = $request->input('name');
            $project->responsibility = $request->input('responsibility');
            $project->description = $request->input('description');
            $project->update();
        }else{
            return redirect()->back();
        }
        return redirect('projects/'.$project->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        //
    }

}
