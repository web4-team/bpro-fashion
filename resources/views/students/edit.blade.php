@extends('layouts.master')
@section('content')
	<!-- Header -->
    <div class="header pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <h6 class="h2 text-dark d-inline-block mb-0">Update Forms</h6>
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item"><a href="#">Update</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Update</li>
                </ol>
              </nav>
            </div>
            <div class="col-lg-6 col-5 text-right">
              <a href="{{route('students.index')}}" class="btn btn-primary btn-sm">Back to Table</a>
              
            </div>
          </div>
        </div>
      </div>
    </div>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
	<div class="row">
      	<div class="col-md-2"></div>
        <form method="post" action="{{route('students.update',$student->id)}}"class="col-md-8 mb-4">
        	@csrf
        	@method('PUT')
        	<div class="my-4">
        		<h1 class="text-center text-dark">Registration Form</h1>
        	</div>
        	<div class="form-group">
				<label for="class" class="text-dark">Choose Course</label>
				<select name="course" value="{{$student->course}}" class="custom-select custom-select-md text-dark">
				  <option value="1">First Class</option>
				  <option value="2">Second Class</option>
				  <option value="3">Third Class</option>
				</select>
			</div>
			<div class="form-group">
  			    <label for="accept_date" class="text-dark">Accept Date</label>
  			    <input type="date" class="form-control" name="accept_date" value="{{$student->accept_date}}">
    		</div>
        	<div class="form-group">
  			    <label for="name" class="text-dark">Name</label>
  			    <input type="text" class="form-control text-dark" name="name" value="{{$student->name}}">
    		</div>
			<div class="form-group">
  			    <label for="dob" class="text-dark">Date of Birth</label>
  			    <input type="date" class="form-control text-dark" name="dob" value="{{$student->dob}}">
    		</div>
    		<div class="form-group">
  			    <label for="age" class="text-dark">Age</label>
  			    <input type="number" class="form-control text-dark" name="age" value="{{$student->age}}">
    		</div>			
			<div class="form-group">
			    <label for="phone" class="text-dark">Phone</label>
			    <input type="number" class="form-control text-dark" name="phone" value="{{$student->phone}}">
			</div>
			<div class="form-group">
			    <label for="email" class="text-dark">Email</label>
			    <input type="text" class="form-control text-dark" name="email" value="{{$student->email}}">
			</div>
			<div class="form-group">
			    <label for="education" class="text-dark">Education</label>
			    <input type="text" class="form-control text-dark" name="education" value="{{$student->education}}">
			</div>
			<div class="form-group">
			    <label for="address" class="text-dark">Address</label>
			    <textarea class="form-control text-dark" name="address" value="" rows="2">{{$student->address}}</textarea>
			</div>
			<div class="form-group">
			    <label for="objective" class="text-dark">Objective of join this class</label>
			    <textarea class="form-control text-dark" name="objective" value="" rows="3">{{$student->objective}}</textarea>
			</div>
			<fieldset class="form-group">
				<label for="bpro" class="text-dark">How do you Know B Pro</label>
				<div class="col-sm-10">
					<div class="form-check form-check-inline">
					  <input class="form-check-input" type="checkbox" name="bpro" value="{{$student->bpro}}">
					  <label class="form-check-label" for="inlineCheckbox1" class="text-dark">Facebook</label>
					</div>
					<div class="form-check form-check-inline">
					  <input class="form-check-input" type="checkbox" name="bpro" value="{{$student->bpro}}">
					  <label class="form-check-label" for="inlineCheckbox2" class="text-dark">Friends</label>
					</div>
					<div class="form-check form-check-inline">
					  <input class="form-check-input" type="checkbox" name="bpro" value="{{$student->bpro}}">
					  <label class="form-check-label" for="inlineCheckbox3" class="text-dark">Other</label>
					</div>
				</div>
			</fieldset>	    
	  	    <div class="form-group row">
	  		    <div class="col-sm-10">
	  		      <button type="submit" class="btn btn-primary">Update</button>
	  		    </div>
	  	    </div>
	    </form>
    </div>
@endsection