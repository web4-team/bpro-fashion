<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AbCity;

class AbCitiesController extends Controller
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
        $cities = AbCity::all();
        return view('artbot_system.ab_cities.index')->with('cities', $cities);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('artbot_system.ab_cities.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $city = new AbCity();
        $city->city_name = $request->input('city_name');
        $city->zip_code = $request->input('zip_code');
       
        if($city->save()){
            $request->session()->flash('success', 'New field has been created');
        }else{
            $request->session()->flash('error', 'There was an error Creating the field');
        }

        return redirect('/ab_cities');
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
        $city = AbCity::find($id);
        return view('artbot_system.ab_cities.edit')->with('city', $city);
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
        $city = AbCity::find($id);
        $city->city_name = $request->input('city_name');
        $city->zip_code = $request->input('zip_code');
       
        if($city->save()){
            $request->session()->flash('success', 'Selected field has been updated');
        }else{
            $request->session()->flash('error', 'There was an error updating the field');
        }

        return redirect('/ab_cities');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $city = AbCity::find($id);
        $city->delete();
        return redirect('/ab_cities')->with('info', 'Selected field has been deleted!');
    }
}
