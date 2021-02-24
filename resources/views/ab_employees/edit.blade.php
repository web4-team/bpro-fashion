@extends('artbotlayouts.master')
@section('content')
	<!-- Header -->
    <div class="header pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <h6 class="h2 text-dark d-inline-block mb-0">Update Form</h6>
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item"><a href="#">Update</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Update</li>
                </ol>
              </nav>
            </div>
            <div class="col-lg-6 col-5 text-right">
              <a href="{{route('ab_employees.index')}}" class="btn btn-primary btn-sm">Back to Table</a>
              
            </div>
          </div>
        </div>
      </div>
    </div>

	<div class="row">
      	<div class="col-md-3"></div>
        <form method="post" action="{{route('ab_employees.update',$employee->id)}}" class="col-md-6 mb-4" enctype="multipart/form-data">
        	@csrf
        	@method('PUT')
        	<div class="my-4">
        		<h3 class="text-center text-dark">Update Employee</h3>
        	</div>
        	<div class="form-group row">
                <label for="first_name" class="col-sm-3 col-form-label text-dark">First Name</label>
                <div class="col-sm-9">
			    <input type="text" class="form-control text-dark" name="first_name"  id="first_name" value="{{old('first_name') ? : $employee->first_name}}">
                </div>
            </div>

            <div class="form-group row">
                <label for="last_name" class="col-sm-3 col-form-label text-dark">Last Name</label>
                <div class="col-sm-9">
			    <input type="text" class="form-control text-dark" name="last_name"  id="last_name" value="{{old('last_name') ? : $employee->last_name}}">
                </div>
            </div>

            <div class="form-group row">
                <label for="email" class="col-sm-3 col-form-label text-dark">Email</label>
                <div class="col-sm-9">
			    <input type="email" class="form-control text-dark" name="email"  id="email" value="{{old('email') ? : $employee->email}}">
                </div>
            </div>

            <div class="form-group row">
                <label for="age" class="col-sm-3 col-form-label text-dark">Age</label>
                <div class="col-sm-9">
			    <input type="number" class="form-control text-dark" name="age"  id="age" value="{{old('age') ? : $employee->age}}">
                </div>
            </div>

            <div class="form-group row">
                <label for="birth_date" class="col-sm-3 col-form-label text-dark">Date of Birth</label>
                <div class="col-sm-9">
			    <input type="date" class="form-control datepicker text-dark" name="birth_date"  id="birth_date" value="{{Request::old('birth_date') ? : $employee->birth_date}}">
                </div>
            </div>

            <div class="form-group row">
                <label for="gender" class="col-sm-3 col-form-label text-dark">Gender</label>
                <div class="col-sm-9">
                    <select name="gender" class="form-control">
                        <option value="" disabled>Choose a gender</option>
                        @foreach($genders as $gender)
                            <option value="{{$gender->id}}" {{old('gender') ? 'selected' : '' }} {{ $employee->empGender==$gender ? 'selected' : '' }} >{{$gender->gender_name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <label for="phone" class="col-sm-3 col-form-label text-dark">Phone</label>
                <div class="col-sm-9">
			    <input type="number" class="form-control text-dark" name="phone"  id="phone" value="{{old('phone') ? : $employee->phone}}">
                </div>
            </div>

            <div class="form-group row">
                <label for="address" class="col-sm-3 col-form-label text-dark">Address</label>
                <div class="col-sm-9">
                    <textarea name="address" id="address" class="form-control text-dark" >{{Request::old('address') ? : $employee->address}}</textarea>
                </div>
            </div>
         
            <div class="form-group row">
                <label for="city" class="col-sm-3 col-form-label text-dark">City</label>
                <div class="col-sm-9">
                    <select name="city" class="form-control">
                        <option value="" disabled>Choose a City</option>
                        @foreach($cities as $city)
                            <option value="{{$city->id}}" {{ old('city') ? 'selected' : '' }} {{ $employee->empCity==$city ? 'selected' : '' }} >{{$city->city_name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>

           
            
            <div class="form-group row">
                <label for="state" class="col-sm-3 col-form-label text-dark">State/Region</label>
                <div class="col-sm-9">
                    <select name="state" class="form-control">
                        <option value="" disabled>Choose a State/Region</option>
                        @foreach($states as $state)
                            <option value="{{$state->id}}" {{ old('state') ? 'selected' : '' }} {{ $employee->empState==$state ? 'selected' : '' }} >{{$state->state_name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <label for="country" class="col-sm-3 col-form-label text-dark">Country</label>
                <div class="col-sm-9">
                    <select name="country" class="form-control">
                        <option value="" disabled>Choose a Country</option>
                        @foreach($countries as $country)
                            <option value="{{$country->id}}" {{ $employee->empCountry==$country ? 'selected' : '' }}>{{$country->country_name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <label for="division" class="col-sm-3 col-form-label text-dark">Position</label>
                <div class="col-sm-9">
                    <select name="division" class="form-control">
                        <option value="" disabled>Choose a position</option>
                        @foreach($divisions as $division)
                            <option value="{{$division->id}}" {{ old('division') ? 'selected' : '' }} {{ $employee->empDivision==$division ? 'selected' : '' }} >{{$division->division_name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
         
            
            <div class="form-group row">
                <label for="department" class="col-sm-3 col-form-label text-dark">Department</label>
                <div class="col-sm-9">
                    <select name="department" class="form-control">
                        <option value="" disabled>Choose a Department</option>
                        @foreach($departments as $department)
                            <option value="{{$department->id}}" {{old('department') ? 'selected' : ''}} {{ $employee->empDepartment==$department ? 'selected' : '' }} >{{$department->dept_name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <label for="join_date" class="col-sm-3 col-form-label text-dark">Join Date</label>
                <div class="col-sm-9">
			    <input type="date" class="form-control datepicker text-dark" name="join_date"  id="join_date" value="{{Request::old('join_date') ? : $employee->join_date}}">
                </div>
            </div>

            <div class="form-group row ">
                
                    <label for="picture" class="col-sm-3 col-form-label text-dark">Picture</label>
                    <div class="col-sm-9">
                    <input type="file" name="picture">
                    <div class="file-path-wrapper">
                        <input class="file-path validate" type="text" value="{{old('picture') ? : $employee->picture }}">
                        <span class="{{$errors->has('picture') ? 'helper-text red-text' : ''}}">{{$errors->has('picture') ? $errors->first('picture') : ''}}</span>
                    </div>
                    </div>
               
                
            </div>
           



	  	    <div class="form-group row">
	  		    <div class="col-sm-10">
	  		      <button type="submit" class="btn btn-primary">Update</button>
	  		    </div>
	  	    </div>
	    </form>
    </div>
@endsection