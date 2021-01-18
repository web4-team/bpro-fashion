<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Salary;

class SalariesController extends Controller
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
        $salaries = Salary::all();
        return view('sys_mg.salaries.index')->with('salaries', $salaries);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sys_mg.salaries.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $salary = new Salary();
        $salary->s_amount = $request->input('s_amount');
       
        if($salary->save()){
            $request->session()->flash('success', 'New Salary has been created');
        }else{
            $request->session()->flash('error', 'There was an error Creating the Salary');
        }

        return redirect('/salaries');
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
        $salary = Salary::find($id);
        return view('sys_mg.salaries.edit')->with('salary', $salary);
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
        $salary = Salary::find($id);
        $salary->s_amount = $request->input('s_amount');
       
        if($salary->save()){
            $request->session()->flash('success', 'Selected Salary has been updated');
        }else{
            $request->session()->flash('error', 'There was an error updating the Salary');
        }

        return redirect('/salaries');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $salary = Salary::find($id);
        $salary->delete();
        return redirect('/salaries')->with('info', 'Selected Salary has been deleted!');
    }
}
