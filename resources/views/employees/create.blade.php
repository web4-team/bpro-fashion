@extends('layouts.master')
@section('content')
	<!-- Header -->
    <div class="header pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <h3 class="h2 text-dark d-inline-block mb-0">Create New Employee</h3>
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item"><a href="#">Employee Lists</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Create Employee</li>
                </ol>
              </nav>
            </div>
            <div class="col-lg-6 col-5 text-right">
              <a href="{{route('employees.index')}}" class="btn btn-primary btn-sm">Back to Table</a>
              
            </div>
          </div>
        </div>
      </div>
    </div>

	<div class="row">
	<div class="col-lg-12">   
	<div class="card mb-4">
          <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h4 class="m-0 font-weight-bold text-primary">Employee Information</h4>
          </div>
					
          <div class="card-body">
          	@if ($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div><br />
    @endif
					
    <form method="post" action="{{route('employees.store')}}" enctype="multipart/form-data" class="col-md-6 mb-4">
        	@csrf
        	<div class="form-group">
			    	<label for="first_name" class="text-dark">First Name</label>
			    	<input type="text" class="form-control text-dark" name="first_name" id="first_name" value="{{Request::old('first_name') ? : ''}}">
			    	@error('first_name')
						    	<span class="invalid-feedback alert-danger" role="alert">
		                          <strong>{{ $message }}</strong>
		                      	</span>
							@enderror
					</div>

					<div class="form-group">
			    	<label for="last_name" class="text-dark">Last Name</label>
			    	<input type="text" class="form-control text-dark" name="last_name" id="last_name" value="{{Request::old('last_name') ? : ''}}">
					</div>

					<div class="form-group">
			    	<label for="email" class="text-dark">Email</label>
			    	<input type="email" class="form-control text-dark" name="email" id="email" value="{{Request::old('email') ? : ''}}">
					</div>

					<div class="form-group">
			    	<label for="age" class="text-dark">Age</label>
			    	<input type="number" class="form-control text-dark" name="age" id="age" value="{{Request::old('age') ? : ''}}">
					</div>

					<div class="form-group">
						<label for="join_date">Date of birth</label>
						<input name="birth_date" id="join_date" class="form-control" type="date">
					</div>
					
					<div class="form-group">
						<label for="class" class="text-dark">Gender</label>
							<select name="gender" class="custom-select custom-select-md text-dark">
								<option value="" disabled {{ old('gender') ? '' : 'selected' }}>Choose a gender</option>
				  			@foreach($genders as $gender)
								<option value="{{$gender->id}}" {{ old('gender') ? 'selected' : '' }}>{{$gender->gender_name}}</option>
								@endforeach
							</select>
					</div>

					<div class="form-group">
			    	<label for="phone" class="text-dark">Phone</label>
			    	<input type="number" class="form-control text-dark" name="phone" id="phone" value="{{Request::old('phone') ? : ''}}">
					</div>

					<div class="form-group">
			    		<label for="address" class="text-dark">Address</label>
			    		<textarea class="form-control text-dark" name="address" id="address" rows="3">{{Request::old('address') ? : ''}}</textarea>
					</div>

					<div class="form-group">
						<label for="class" class="text-dark">City</label>
							<select name="city" class="custom-select custom-select-md text-dark">
								<option value="" disabled {{ old('city') ? '' : 'selected' }}>Choose a city</option>
				  			@foreach($cities as $city)
								<option value="{{$city->id}}" {{ old('city') ? 'selected' : '' }}>{{$city->city_name}}</option>
								@endforeach
							</select>
					</div>

					


					<div class="form-group">
						<label for="class" class="text-dark">State/Region</label>
							<select name="state" class="custom-select custom-select-md text-dark">
								<option value="" disabled {{ old('state') ? '' : 'selected' }}>Choose a state/region</option>
				  			@foreach($states as $state)
								<option value="{{$state->id}}" {{ old('state') ? 'selected' : '' }}>{{$state->state_name}}</option>
								@endforeach
							</select>
					</div>

					<div class="form-group">
						<label for="class" class="text-dark">Country</label>
							<select name="country" class="custom-select custom-select-md text-dark">
								<option value="" disabled {{ old('country') ? '' : 'selected' }}>Choose a country</option>
				  			@foreach($countries as $country)
								<option value="{{$country->id}}" {{ old('country') ? 'selected' : '' }}>{{$country->country_name}}</option>
								@endforeach
							</select>
					</div>
        			
					<div class="form-group">
						<label for="class" class="text-dark">Position</label>
							<select name="division" class="custom-select custom-select-md text-dark">
								<option value="" disabled {{ old('division') ? '' : 'selected' }}>Choose a position</option>
				  			@foreach($divisions as $division)
								<option value="{{$division->id}}" {{ old('division') ? 'selected' : '' }}>{{$division->division_name}}</option>
								@endforeach
							</select>
					</div>

			

					<div class="form-group">
						<label for="class" class="text-dark">Department</label>
							<select name="department" class="custom-select custom-select-md text-dark">
								<option value="" disabled {{ old('department') ? '' : 'selected' }}>Choose a department</option>
				  			@foreach($departments as $department)
								<option value="{{$department->id}}" {{ old('department') ? 'selected' : '' }}>{{$department->dept_name}}</option>
								@endforeach
							</select>
							
					</div>
				
				
				
					<div class="form-group">
						<label for="join_date">Join Date</label>
						<input name="join_date" id="join_date" class="form-control" type="date">
					</div>
					
					<div class="form-group">
						<label for="picture">Picture</label>
						<input type="file" name="picture" accept = 'image/jpeg , image/jpg, image/gif, image/png'>
					</div> 
			
	  	    <div class="form-group row">
	  		    <div class="col-sm-10">
	  		      <button type="submit" class="btn btn-primary">Create</button>
	  		    </div>
	  	    </div>
	  </form>
  </div>
	</div>
	</div>
	</div>
@endsection