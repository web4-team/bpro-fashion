<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('frontend.mainpage');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/artbothome', 'ArtbotHomeController@index')->name('artbothome');

Route::namespace('Admin')->prefix('admin')->name('admin.')->middleware('can:manage.users')->group(function(){
    Route::resource('/users', 'UsersController', ['except' => ['show', 'create', 'store']]);
});
// Route::get('course', 'CourseController@index')->name('coursepage');
Route::resource('courses', 'CourseController');
 Route::resource('students', 'StudentController');
// Route::get('/students/pdf', 'StudentController@index');
Route::get('/downloadSPDF/{id}','StudentController@downloadSPDF');
// Employee
Route::resource('/employees', 'EmployeesController');
Route::get('/employee/payroll/{id}', 'PayrollController@payrollIndex')->name('payrolls.show');
Route::get('/payrolls/create/{id}', 'PayrollController@create')->name('payrolls.create');
Route::post('/payrolls/{id}', 'PayrollController@store')->name('payrolls.store');
Route::get('/employee/payroll/{id}/edit', 'PayrollController@edit')->name('payrolls.edit');
Route::patch('/payrolls/update/{id}', 'PayrollController@update')->name('payrolls.update');
// Departments
Route::resource('/departments', 'DepartmentsController');

// Salaries
Route::resource('/salaries', 'SalariesController');

// Divisions
Route::resource('/divisions', 'DivisionsController');

// Cities
Route::resource('/cities', 'CitiesController');

// States
Route::resource('/states', 'StatesController');

// Countries
Route::resource('/countries', 'CountriesController');

// Batches
Route::resource('batch', 'BatchController');

// Items
Route::resource('item', 'ItemController');

// Income/Expense
Route::resource('expense', 'ExpenseController');
Route::get('/downloadExpense/{id}','ExpenseController@downloadExpense');
Route::get('/income/expense/{id}', 'ExpenseController@expenseIndex')->name('expenses.index');
Route::get('/expenses/create/{id}', 'ExpenseController@create')->name('expenses.create');
Route::post('/expenses/{id}', 'ExpenseController@store')->name('expenses.store');
Route::get('/income/expense/{id}/edit', 'ExpenseController@edit')->name('expenses.edit');
Route::patch('/expenses/update/{id}', 'ExpenseController@update')->name('expenses.update');
Route::resource('income', 'IncomeController');




// Sale
Route::resource('/sale', 'SaleController');
Route::get('/item/sale/{id}', 'SaleController@saleIndex')->name('sales.show');
Route::get('/sales/create/{id}', 'SaleController@create')->name('sales.create');
Route::post('/sales/{id}', 'SaleController@store')->name('sales.store');
Route::get('/item/sale/{id}/edit', 'SaleController@edit')->name('sales.edit');
Route::patch('/sales/update/{id}', 'SaleController@update')->name('sales.update');
Route::get('/downloadSale/{id}','SaleController@downloadSale');
// register


