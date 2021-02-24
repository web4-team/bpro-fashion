<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AbCountry;

class AbCountriesController extends Controller
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
        $countries = AbCountry::all();
        return view('artbot_system.ab_countries.index')->with('countries', $countries);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('artbot_system.ab_countries.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $country = new AbCountry();
        $country->country_name = $request->input('country_name');
       
        if($country->save()){
            $request->session()->flash('success', 'New Country has been created');
        }else{
            $request->session()->flash('error', 'There was an error Creating the Country');
        }

        return redirect('/ab_countries');
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
        $country = AbCountry::find($id);
        return view('artbot_system.ab_countries.edit')->with('country', $country);
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
        $country = AbCountry::find($id);
        $country->country_name = $request->input('country_name');
       
        if($country->save()){
            $request->session()->flash('success', 'Selected Country has been updated');
        }else{
            $request->session()->flash('error', 'There was an error updating the Country');
        }

        return redirect('/ab_countries');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $country = AbCountry::find($id);
        $country->delete();
        return redirect('/ab_countries')->with('info', 'Selected Country has been deleted!');
    }
}
