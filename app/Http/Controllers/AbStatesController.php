<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AbState;

class AbStatesController extends Controller
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
        $states = AbState::all();
        return view('artbot_system.ab_states.index')->with('states', $states);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('artbot_system.ab_states.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $state = new AbState();
        $state->state_name = $request->input('state_name');
       
        if($state->save()){
            $request->session()->flash('success', 'New State has been created');
        }else{
            $request->session()->flash('error', 'There was an error Creating the State');
        }

        return redirect('/ab_states');
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
        $state = AbState::find($id);
        return view('artbot_system.ab_states.edit')->with('state', $state);
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
        $state = AbState::find($id);
        $state->state_name = $request->input('state_name');
       
        if($state->save()){
            $request->session()->flash('success', 'Selected State has been updated');
        }else{
            $request->session()->flash('error', 'There was an error updating the State');
        }

        return redirect('/ab_states');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $state = AbState::find($id);
        $state->delete();
        return redirect('/ab_states')->with('info', 'Selected State has been deleted!');
    }
}
