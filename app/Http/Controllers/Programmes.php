<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Programme;

class Programmes extends Controller {

    public function __construct() {
        $this->middleware('auth')->except(['index', 'show']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        //
        $programmes = Programme::all();
        return view('programmes.index')->with('programmes', $programmes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        //
        return view('programmes.create');
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
            'name' => ['required'],
            'description' => ['required'],
        ]);

        $program = new Programme;
        $program->user_id = $request->user()->id;
        $program->name = $request->input('name');
        $program->description = $request->input('description');
        $program->save();
        return redirect('/program/' . $program->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        $program = Programme::find($id);
        return view('programmes.show')->with('program', $program);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        //  
        $program = Programme::find($id);
        return view('programmes.edit')->with('program', $program);
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
        $programe = Programme::find($id);

        $validatedData = $request->validate([
            'name' => ['required'],
            'description' => ['required']
        ]);

        $programe->name = $request->input('name');
        $programe->description = $request->input('description');
        $programe->update();
        return redirect('/program/' . $programe->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        //
        $programe = Programme::find($id);
        $programe->delete();
    }

}
