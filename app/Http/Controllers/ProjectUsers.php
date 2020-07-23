<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProjectUser;
use Illuminate\Support\Facades\Auth;

class ProjectUsers extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        //
        $projects = Auth::user()->projects;
        return view('projectUsers.index')->with('projects', $projects);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        //
        $validatedData = $request->validate([
            'project' => ['required'],
        ]);

        $exists = ProjectUser::where('user_id', Auth::id())->where('project_id', $request->input('project'))->exists();
        
        if (!$exists) {
            $projectUser = new ProjectUser;
            $projectUser->user_id = Auth::id();
            $projectUser->project_id = $request->input('project');
            $projectUser->save();
        }
        return view('projectUsers.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        //
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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        $project_user = ProjectUser::findOrFail($id);
        if ($project_user->user_id === Auth::id()) {
            $project_user->delete();
        }
        return redirect('projects/' . $id);
    }

}
