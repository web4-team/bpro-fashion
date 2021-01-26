<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Carbon;
use App\Income;
use App\Expense;


class SummaryController extends Controller
{
   public function index(){

  

   	$sum_income=Income::whereDay('date', Carbon::now()->day)->sum('amount');
   	$sum_expense=Expense::whereDay('date', Carbon::now()->day)->sum('amount');
   	$balance=$sum_income-$sum_expense;
   	$incomes=Income::all();
   	$expenses=Expense::all();
   	return view ('DailyExpense.summary',compact('incomes','expenses','sum_income','sum_expense','balance'));

   }
}
