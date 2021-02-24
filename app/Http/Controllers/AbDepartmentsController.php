<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AbDepartment;

class AbDepartmentsController extends Controller
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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $departments = AbDepartment::all();
        return view('artbot_system.ab_departments.index')->with('departments', $departments);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('artbot_system.ab_departments.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $department = new AbDepartment();
        $department->dept_name = $request->input('dept_name');
       
        if($department->save()){
            $request->session()->flash('success', 'New Department has been created');
        }else{
            $request->session()->flash('error', 'There was an error Creating the Department');
        }

        return redirect('/ab_departments');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $department = AbDepartment::find($id);
        return view('artbot_system.ab_departments.edit')->with('department', $department);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $department = AbDepartment::find($id);
        $department->dept_name = $request->input('dept_name');
       
        if($department->save()){
            $request->session()->flash('success', 'Selected Department has been updated');
        }else{
            $request->session()->flash('error', 'There was an error updating the Department');
        }

        return redirect('/ab_departments');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $department = AbDepartment::find($id);
        $department->delete();
        return redirect('/ab_departments')->with('info', 'Selected Department has been deleted!');
    }
}
