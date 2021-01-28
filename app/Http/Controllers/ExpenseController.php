<?php

namespace App\Http\Controllers;
use Session;
use App\Expense;
use App\Income;
use PDF;
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
    // $incomes=Income::find();
    // $expenses=Expense::all();
    // return view ('DailyExpense.expense.index',compact('incomes','expenses'));
    }


    public function downloadExpense($id) {
        $incomes = Income::find($id);
        $expense=Expense::all();
        $amount_sum =Expense::all()->where('income_id',$id)->sum('amount');

        
        $pdf = PDF::loadView('DailyExpense.expense.voucher', compact('incomes','amount_sum','expense'));
        // $customPaper = array(0,0,650,450);
        $pdf->setPaper('A4', 'portrait');
        return $pdf->download($incomes->category.".pdf");
    }

    public function expenseIndex($id)
    {
    $incomes=Income::find($id);
    $expenses=Expense::all();
    $sum_expense =Expense::all()->where('income_id',$id)->sum('amount');
    return view ('DailyExpense.expense.index',compact('incomes','expenses','sum_expense'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $income = Income::findOrFail($id);
        return view ('DailyExpense.expense.create',compact('income'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$id)
    {
        $request-> validate ([
            'expense_category'=>'required',
            'expense_amount'=>'required'
        ]);
        $expense= new Expense([
            'category'=>$request->get('expense_category'),
            'description'=>$request->get('expense_description'),
            'amount'=>$request->get('expense_amount'),
            'date'=>$request->get('expense_date'),
            'income_id'=>$id,
        ]);
        $expense->save();
        
        Session::flash('success', 'Expense Created');
        return redirect()->route('expenses.index',['id'=>$id]);
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
        $exp = Expense::findOrFail($id);
        return view('DailyExpense.expense.edit')->with('exp',$exp);
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
   
        
        $expense = Expense::findOrFail($id);
        $expense->category = $request->get('expense_category');
         $expense->description = $request->get('expense_description');
         $expense->amount = $request->get('expense_amount');
         $expense->date = $request->get('expense_date');
       
        $expense->save();       
        

        
        Session::flash('success', 'Expense Updated.');
        return redirect()->route('expenses.index',['id'=>$expense->income_id]);
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
        Session::flash('success', 'Expense Deleted.');
        return redirect()->route('expenses.index',['id'=>$expense->income_id]);
    }
}
