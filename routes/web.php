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

Route::resource('/st_register', 'StudentRegController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/home','HomeController@searchHome')->name('home.search');

Route::namespace('Admin')->prefix('admin')->name('admin.')->middleware('can:manage.users')->group(function(){
    Route::resource('/users', 'UsersController', ['except' => ['show', 'create', 'store']]);
});

Route::middleware('can:schoolmanage.users')->group(function(){
Route::resource('courses', 'CourseController');
Route::resource('students', 'StudentController');
// Batches
Route::resource('batch', 'BatchController');


// Route::get('/students/pdf', 'StudentController@index');
Route::get('/downloadPDF/{id}','StudentController@downloadPDF');
Route::get('/student/{id}','StudentController@new_edit')->name('students.new_edit');


});


//====================================
Route::middleware('can:manage.users')->group(function(){
// Employee
    
    Route::resource('/employees', 'EmployeesController');

    Route::get('/employee/payroll/{id}', 'PayrollController@payrollIndex')->name('payrolls.show');
 
    Route::get('/payrolls/create/{id}', 'PayrollController@create')->name('payrolls.create');
    Route::get('/empReport', 'PayrollController@report')->name('employees.report');
    Route::post('/payrolls/{id}', 'PayrollController@store')->name('payrolls.store');
    Route::get('/employee/payroll/{id}/edit', 'PayrollController@edit')->name('payrolls.edit');
    Route::patch('/payrolls/update/{id}', 'PayrollController@update')->name('payrolls.update');
	Route::get('/empReport', 'PayrollController@report')->name('employees.report');


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

});

Route::middleware('can:usermanage.users')->group(function(){
// Items
Route::resource('item', 'ItemController');

Route::resource('category', 'CategoryController');

// Income/Expense
Route::resource('income', 'IncomeController');

Route::get('/income/expense/{id}', 'ExpenseController@expenseIndex')->name('expense.show');

Route::post('/income/expense/{id}', 'ExpenseController@findexpense')->name('expense.search');

Route::get('expenses/create/{id}', 'ExpenseController@create')->name('expense.create');
Route::patch('expense/update/{id}', 'ExpenseController@update')->name('expense.update');
Route::get('/income/expense/{id}/edit', 'ExpenseController@edit')->name('expense.edit');
Route::delete('income/expense/{id}', 'ExpenseController@destroy')->name('expense.destroy');
Route::post('expense/{id}', 'ExpenseController@store')->name('expense.store');


// Sale
Route::resource('/sale', 'SaleController');
Route::get('/item/sale/{id}', 'SaleController@saleIndex')->name('sales.show');
Route::post('/item/sale/{id}','SaleController@searchSale')->name('sale.search');
Route::get('/sales/create/{id}', 'SaleController@create')->name('sales.create');
Route::post('/sales/{id}', 'SaleController@store')->name('sales.store');
Route::get('/item/sale/{id}/edit', 'SaleController@edit')->name('sales.edit');
Route::patch('/sales/update/{id}', 'SaleController@update')->name('sales.update');
Route::get('/downloadSale/{id}','SaleController@downloadSale');

});

//=======================================================================================

// ArtBot Myanmar Route
//dashboard
Route::get('/artbothome', 'ArtbotHomeController@index')->name('artbothome');

Route::resource('ab_course', 'AbCourseController');
Route::resource('ab_students', 'AbStudentController');
Route::resource('ab_batch', 'AbBatchController');
Route::resource('ab_items', 'AbItemController');
Route::get('/ab_downloadPDF/{id}','AbStudentController@downloadPDF');



Route::resource('ab_sale', 'AbSaleController');
Route::get('/ab_items/ab_sale/{id}', 'AbSaleController@saleIndex')->name('ab_sales.show');
Route::post('/ab_items/ab_sale/{id}','AbSaleController@searchSale')->name('ab_sale.search');
Route::get('/ab_sales/create/{id}', 'AbSaleController@create')->name('ab_sales.create');
Route::post('/ab_sales/{id}', 'AbSaleController@store')->name('ab_sales.store');
Route::get('/ab_items/ab_sale/{id}/edit', 'AbSaleController@edit')->name('ab_sales.edit');
Route::patch('/ab_sales/update/{id}', 'AbSaleController@update')->name('ab_sales.update');

Route::resource('ab_category', 'AbCategoryController');

Route::resource('ab_income', 'AbIncomeController');

Route::get('/ab_income/ab_expense/{id}', 'AbExpenseController@expenseIndex')->name('ab_expense.show');

Route::post('/ab_income/ab_expense/{id}', 'AbExpenseController@findexpense')->name('ab_expense.search');

Route::get('ab_expenses/create/{id}', 'AbExpenseController@create')->name('ab_expense.create');
Route::patch('ab_expense/update/{id}', 'AbExpenseController@update')->name('ab_expense.update');
Route::get('/ab_income/ab_expense/{id}/edit', 'AbExpenseController@edit')->name('ab_expense.edit');
Route::delete('ab_income/ab_expense/{id}', 'AbExpenseController@destroy')->name('ab_expense.destroy');
Route::post('ab_expense/{id}', 'AbExpenseController@store')->name('ab_expense.store');

Route::resource('/ab_employees', 'AbEmployeesController');

Route::get('/ab_employee/ab_payroll/{id}', 'AbPayrollController@payrollIndex')->name('ab_payrolls.show');

Route::get('/ab_payrolls/create/{id}', 'AbPayrollController@create')->name('ab_payrolls.create');
Route::get('/ab_empReport', 'AbPayrollController@report')->name('ab_employees.report');
Route::post('/ab_payrolls/{id}', 'AbPayrollController@store')->name('ab_payrolls.store');
Route::get('/ab_employee/ab_payroll/{id}/edit', 'AbPayrollController@edit')->name('ab_payrolls.edit');
Route::patch('/ab_payrolls/update/{id}', 'AbPayrollController@update')->name('ab_payrolls.update');


// Departments
Route::resource('/ab_departments', 'AbDepartmentsController');
// Divisions
Route::resource('/ab_divisions', 'AbDivisionsController');
// Cities
Route::resource('/ab_cities', 'AbCitiesController');
// States
Route::resource('/ab_states', 'AbStatesController');
// Countries
Route::resource('/ab_countries', 'AbCountriesController');