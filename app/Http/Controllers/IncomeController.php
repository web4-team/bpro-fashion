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
        return view('DailyExpense.income.create');    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            $request->validate([
            'category'=>'required',
            
            
        ]);

        $income = new Income([
            'category' => $request->get('category')     
                      
        ]);
        $income->save();
        
        return redirect('income')->with('success', 'Successfully Added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Income  $income
     * @return \Illuminate\Http\Response
     */
    public function show(Income $income)
    {
        //
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
        $request->validate([
            'category'=>'required',
          
            
        ]);
            
         $incomes = Income::find($id);
         
            $incomes->category = $request->get('category');
          
              
            
        
        $incomes->save();
        return redirect('/income')->with('success', 'Your incomes are successfully Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Income  $income
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        $income=Income::find($id);
        $income->expense()->delete();
        $income->delete();
        return redirect('/income')->with('success', ' have been deleted!'); 
    }
}
