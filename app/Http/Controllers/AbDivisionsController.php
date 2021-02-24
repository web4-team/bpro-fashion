<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AbDivision;

class AbDivisionsController extends Controller
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
        $divisions = AbDivision::all();
        return view('artbot_system.ab_divisions.index')->with('divisions', $divisions);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('artbot_system.ab_divisions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $division = new AbDivision();
        $division->division_name = $request->input('division_name');
       
        if($division->save()){
            $request->session()->flash('success', 'New Position has been created');
        }else{
            $request->session()->flash('error', 'There was an error Creating the Position');
        }

        return redirect('/ab_divisions');
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
        $division = AbDivision::find($id);
        return view('artbot_system.ab_divisions.edit')->with('division', $division);
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
        $division = AbDivision::find($id);
        $division->division_name = $request->input('division_name');
       
        if($division->save()){
            $request->session()->flash('success', 'Selected Position has been updated');
        }else{
            $request->session()->flash('error', 'There was an error updating the Position');
        }

        return redirect('/ab_divisions');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $division = AbDivision::find($id);
        $division->delete();
        return redirect('/ab_divisions')->with('info', 'Selected Position has been deleted!');
    }
}
