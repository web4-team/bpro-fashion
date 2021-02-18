<?php

namespace App\Http\Controllers;

use App\Expense;
use App\Income;
use App\Category;
use Session;
use Illuminate\Http\Request;

class ExpenseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function expenseIndex($id)
    {   
        $income=Income::find($id);
        $category=Category::all();
        $exps=Expense::where('income_id',$id)->get();
       
        
        
        return view('DailyExpense.expense.index',compact('income','exps','category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $incomes = Income::find($id);
        $category=Category::all();

        return view('DailyExpense.expense.create',compact('incomes','category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$id)
    {

        $exp = new Expense([
            
            'category_id' => $request->get('category_id'),
            'description' => $request->get('description'),
            'amount' => $request->get('expense_amount'),
            'given' => $request->get('given_amount'),
            
            'date'=>$request->get('expense_date'),
            'income_id' => $id,
            
            
        ]);
        $exp->save();
        //dd($request);
         Session::flash('success', 'Expense Created');
        return redirect()->route('expense.show',['id'=>$id]);
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
        $category=Category::all();
        
        return view('DailyExpense.expense.edit',compact('expense','category'));
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
            
            
            $expense->description = $request->get('description');             
            $expense->amount = $request->get('expense_amount');
            $expense->given = $request->get('given_amount');
            $expense->date = $request->get('expense_date');

            
           
            

            
            
        
        $expense->save();
        Session::flash('success', 'Expense List Updated.');
        return redirect()->route('expense.show',['id'=>$expense->income_id]);
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
    
    Session::flash('success', 'Expense List Deleted.');
    return redirect()->route('expense.show',['id'=>$expense->income_id]);
    }



     public function findexpense(Request $request, $id)

    {
        $income=Income::find($id);
        $from_date=request()->input('fromdate');
        $to_date=request()->input('todate');
        $exps=Expense::where('income_id',$id)->where('date','>=',$from_date)->where('date','<=',$to_date)->get();

        return view ('DailyExpense.expense.index',compact('exps','income'));

    }
}
