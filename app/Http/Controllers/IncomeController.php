<?php

namespace App\Http\Controllers;

use App\Income;
use Illuminate\Http\Request;

class IncomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $incomes = Income::all();
        
        return view('DailyExpense.income.index',compact('incomes'));
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('DailyExpense.income.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store (Request $request)
    {
            $request-> validate ([
            'income_category'=>'required',
            'income_amount'=>'required'
        ]);
        $income= new Income([
            'category'=>$request->get('income_category'),
            'description'=>$request->get('income_description'),
            'amount'=>$request->get('income_amount'),
            'date'=>$request->get('income_date')
        ]);
        $income->save();
        
        return redirect('/income')->with('success', 'Income Successfully Added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Income  $income
     * @return \Illuminate\Http\Response
     */
    public function show(Income $income)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Income  $income
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $incomes = Income::find($id);
        return view('DailyExpense.income.edit', compact('incomes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Income  $income
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       
            
         $incomes = Income::find($id);
         
         $incomes->category = $request->get('income_category');
         $incomes->description = $request->get('income_description');
         $incomes->amount = $request->get('income_amount');
         $incomes->date = $request->get('income_date');
            
              
            
        
        $incomes->save();
        return redirect('/income')->with('success', 'Incomes are successfully Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Income  $income
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $income = Income::find($id);
        $income->delete();

        return redirect('/income')->with('success', 'Your items have been deleted!'); 
    }
}
