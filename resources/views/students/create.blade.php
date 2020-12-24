@extends('layouts.master')
@section('content')
	<!-- Header -->
    <div class="header pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <h3 class="h2 text-dark d-inline-block mb-0">Create New Student</h3>
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item"><a href="#">Student Lists</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Create Student</li>
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
	<div class="col-lg-12">   
	<div class="card mb-4">
          <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h4 class="m-0 font-weight-bold text-primary">Registration Form</h4>
          </div>
					
          <div class="card-body">
					
    <form method="post" action="{{route('students.store')}}"class="col-md-6 mb-4">
        	@csrf
        	<div class="form-group">
			    <label for="code" class="text-dark">Student Code</label>
			    <input type="code" class="form-control text-dark" name="code">
			</div>
			<div class="form-group">
				<label for="class" class="text-dark">Choose Batch</label>
				<select name="batch" class="custom-select custom-select-md text-dark">
				  	@foreach($batch as $row)
					  <option value="{{$row->id}}">{{$row->name}}</option>
					@endforeach
				</select>
			</div>
        	<div class="form-group">
				<label for="class" class="text-dark">Choose Course</label>
				<select name="course" class="custom-select custom-select-md text-dark">
				  	@foreach($course as $row)
					<option value="{{$row->id}}">{{$row->name}}</option>
					@endforeach
				</select>
			</div>
			
			<div class="form-group">
  			    <label for="accept_date" class="text-dark">Accept Date</label>
  			    <input type="date" class="form-control" name="accept_date">
    		</div>
        	<div class="form-group">
  			    <label for="name" class="text-dark">Name</label>
  			    <input type="text" class="form-control text-dark" name="name">
    		</div>
			<div class="form-group">
  			    <label for="dob" class="text-dark">Date of Birth</label>
  			    <input type="date" class="form-control text-dark" name="dob">
    		</div>
    		<div class="form-group">
  			    <label for="age" class="text-dark">Age</label>
  			    <input type="number" class="form-control text-dark" name="age">
    		</div>			
			<div class="form-group">
			    <label for="phone" class="text-dark">Phone</label>
			    <input type="number" class="form-control text-dark" name="phone">
			</div>
			<div class="form-group">
			    <label for="email" class="text-dark">Email</label>
			    <input type="text" class="form-control text-dark" name="email">
			</div>
			<div class="form-group">
			    <label for="education" class="text-dark">Education</label>
			    <input type="text" class="form-control text-dark" name="education">
			</div>
			<div class="form-group">
			    <label for="address" class="text-dark">Address</label>
			    <textarea class="form-control text-dark" name="address" rows="2"></textarea>
			</div>
			<div class="form-group">
			    <label for="objective" class="text-dark">Objective of join this class</label>
			    <textarea class="form-control text-dark" name="objective" rows="2"></textarea>
			</div>
			<div class="form-group">
			    <label for="comment" class="text-dark">Comment Box</label>
			    <textarea class="form-control text-dark" name="comment" rows="3"></textarea>
			</div>
			<fieldset class="form-group">
				<label for="bpro" class="text-dark">How do you Know B Pro</label>
				<div class="col-sm-10">
					<div class="form-check form-check-inline">
					  <input class="form-check-input" type="checkbox" name="bpro" value="facebook">
					  <label class="form-check-label" for="inlineCheckbox1" class="text-dark">Facebook</label>
					</div>
					<div class="form-check form-check-inline">
					  <input class="form-check-input" type="checkbox" name="bpro" value="friend">
					  <label class="form-check-label" for="inlineCheckbox2" class="text-dark">Friends</label>
					</div>
					<div class="form-check form-check-inline">
					  <input class="form-check-input" type="checkbox" name="bpro" value="other">
					  <label class="form-check-label" for="inlineCheckbox3" class="text-dark">Other</label>
					</div>
				</div>
			</fieldset>	    
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