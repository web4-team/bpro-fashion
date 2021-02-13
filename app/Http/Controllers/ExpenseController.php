<?php

namespace App\Http\Controllers;

use App\Expense;
use App\Income;
use Illuminate\Http\Request;

class ExpenseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $exps = Expense::all();
        return view('DailyExpense.expense.index',compact('exps'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $incomes = Income::all();
        return view('DailyExpense.expense.create',compact('incomes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $exp = new Expense([
            
            'income_id' => $request->get('income_id'),
            'description' => $request->get('description'),
            'amount' => $request->get('expense_amount'),
            'given' => $request->get('given_amount'),
            
            'date'=>$request->get('expense_date'),
            
            
        ]);
        $exp->save();
        //dd($request);
        return redirect('/expense')->with('success', 'Successfully Created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Expense  $expense
     * @return \Illuminate\Http\Response
     */
    public function show(Expense $expense)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Expense  $expense
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $expense = Expense::find($id);
        $incomes = Income::all();
        return view('DailyExpense.expense.edit',compact('expense','incomes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Expense  $expense
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       
            
         $expense = Expense::find($id);
            $expense->income_id = $request->get('income_id');
            
            $expense->description = $request->get('description');             
            $expense->amount = $request->get('expense_amount');
            $expense->given = $request->get('given_amount');
            $expense->date = $request->get('expense_date');

            
           
            

            
            
        
        $expense->save();
        return redirect('/expense')->with('success', 'successfully Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Expense  $expense
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
     $expense=Expense::find($id);
     $expense->delete();
     return redirect('/expense')->with('success', 'Has been Deleted!');
    }


     public function findExpense(Request $request)
    {
        $from_date=request()->input('fromdate');
        $to_date=request()->input('todate');
        $exps=Expense::where('date','>=',$from_date)->where('date','<=',$to_date)->get();

        return view ('DailyExpense.expense.index',compact('exps'));

    }
}
