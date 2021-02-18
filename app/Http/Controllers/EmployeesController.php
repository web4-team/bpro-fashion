<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Employee;
use App\Department;
use App\Country;
use App\City;
use App\Salary;
use App\Division;
use App\State;
use App\Gender;
use DB;

class EmployeesController extends Controller
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
        $employees = Employee::all();
        return view('employees.index')->with('employees',$employees);
    }

    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $states       = State::orderBy('state_name','asc')->get();
        $countries = Country::orderBy('country_name','asc')->get();
        $cities = City::orderBy('city_name','asc')->get();
        $divisions = Division::orderBy('division_name','asc')->get();
        $genders = Gender::orderBy('gender_name','asc')->get();
        $departments = Department::orderBy('dept_name','asc')->get();
       

        return view('employees.create')->with([
            'genders'      => $genders,
            'states'       => $states,
            'countries'    => $countries,
            'cities'       => $cities,
            'divisions'    => $divisions,
            'departments'  => $departments,
            
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

      
         /**
         * 
         *  Handle the image file upload which will be stored
         *  in storage/app/public/employee_images
         */
        $fileNameToStore = $this->handleImageUpload($request);

        /**
         *  Create new object of Employee
         */
        $employee = new Employee();
        
        /**
         *  setEmployee is also a method of this controller
         *  which i have created, so i can use it for update 
         *  method.
         */
        $this->setEmployee($employee,$request,$fileNameToStore);
        
        return redirect('/employees')->with('success','New Employee has been created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $employee = Employee::find($id);
        return view('employees.show')->with('employee',$employee);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $departments  = Department::orderBy('dept_name','asc')->get();
        $countries    = Country::orderBy('country_name','asc')->get();
        $cities       = City::orderBy('city_name','asc')->get();
        $states       = State::orderBy('state_name','asc')->get();
        
        $divisions    = Division::orderBy('division_name','asc')->get();
        $genders      = Gender::orderBy('gender_name','asc')->get();

        $employee = Employee::find($id);
        return view('employees.edit')->with([
            'departments'  => $departments,
            'countries'    => $countries,
            'cities'       => $cities,
            'states'       => $states,
            
            'divisions'    => $divisions,
            'genders'      => $genders,       
            'employee'     => $employee
        ]);
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
      
        $employee = Employee::find($id);
        $old_picture = $employee->picture;
        if($request->hasFile('picture')){
            //Upload the image
            $fileNameToStore = $this->handleImageUpload($request);
            //Delete the previous image
            Storage::delete('public/employee_images/'.$employee->picture);
        }else{
            $fileNameToStore = '';
        }
        
        /**
         *  updating an existing employee with setEmployee
         *  method
         */
        $this->setEmployee($employee,$request,$fileNameToStore);
        return redirect('/employees')->with('success','Selected Employee has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $employee = Employee::find($id);
        $employee->payrolls()->delete();
        $employee->delete();
        Storage::delete('public/employee_images/'.$employee->picture);
        return redirect('/employees')->with('success','Selected Employee has been deleted!');
    }

     /**
     * Save a new resource or update an existing resource.
     *
     * @param  App\Employee $employee
     * @param  \Illuminate\Http\Request  $request
     * @param  string $fileNameToStore
     * @return Boolean
     */
    private function setEmployee(Employee $employee,Request $request,$fileNameToStore){

       


        $employee->first_name   = $request->input('first_name');
        $employee->last_name    = $request->input('last_name');
        $employee->email        = $request->input('email');
        $employee->age          = $request->input('age');
        $employee->address      = $request->input('address');
        $employee->phone        = $request->input('phone');
        //Format Date then insert it to the database
        $employee->join_date    = date('Y-m-d', strtotime(str_replace('-', '/', $request->input('join_date'))));
        //Format Date then insert it to the database
        $employee->birth_date   = date('Y-m-d', strtotime(str_replace('-', '/', $request->input('birth_date'))));
        $employee->gender_id    = $request->input('gender');
        $employee->division_id  = $request->input('division');
        
        $employee->dept_id      = $request->input('department');
        $employee->city_id      = $request->input('city');
        $employee->state_id     = $request->input('state');
        $employee->country_id   = $request->input('country');
        
        /**
         *  we are checking if there is an image
         *  because if we are updating an employee
         *  but not changing the employee image then
         *  it will save  '' (means null) to picture field and we don't
         *  want that. 
         */
        if($request->hasFile('picture')){
            $employee->picture = $fileNameToStore;
        }
        
        $employee->save();
    }

    /**
     * Handle image upload when creating a new resource
     * or updating an existing resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string
     */
    public function handleImageUpload(Request $request){

     

           $request->validate([
            'first_name'=>'required',
            'last_name'=>'required',
            'email'=>'required',
            'age'=>'required',
            'address'=>'required',
            'join_date'=>'required',
            'birth_date'=>'required',
            'gender'=>'required',
            'division'=>'required',
            'department'=>'required',
            'city'=>'required',
            'country'=>'required',
            'picture'=>'required|image|mimes:bmp,png,jpg,gif,jpeg',
            'state'=>'required'
            
        ]);

        if( $request->hasFile('picture') ){
            
            //get filename with extension
            $filenameWithExt = $request->file('picture')->getClientOriginalName();
            
            //get just filename
            $filename = pathInfo($filenameWithExt,PATHINFO_FILENAME);
            
            // get just extension
            $extension = $request->file('picture')->getClientOriginalExtension();
            
            /**
             * filename to store
             * 
             *  we are appending timestamp to the file name
             *  and prepending it to the file extension just to
             *  make the file name unique.
             */
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            
            //upload the image
            $path = $request->file('picture')->storeAs('public/employee_images',$fileNameToStore);
        }
        /**
         *  return the file name so we can add it to database.
         */
        return $fileNameToStore;
    }
}