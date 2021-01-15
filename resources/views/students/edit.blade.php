@extends('layouts.master')
@section('content')
@section('style')
	<link href="{{asset('backend/summernote/bootstrap.min.css" rel="stylesheet')}}">
	<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
@endsection
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
      		
	        <form method="post" action="{{route('students.update',$student->id)}}"class="card-body mb-4">
	        	@csrf
	        	@method('PUT')
	        	<div class="mb-4 py-3 d-flex flex-row">
			      <h1 class="m-0 font-weight-bold text-primary text-center">Update Form</h1>
			    </div>
	        	
	        	<div class="row">
	        		<div class="form-group col-md-5">
				    <label for="code" class="text-dark"><strong>Student Code</strong></label>
				    <input type="code" class="form-control text-dark" name="code" value="{{$student->code}}">
					</div>
					<div class="form-group col-md-5">
						<label for="batch" class="text-dark"><strong>Choose Batch</strong></label>
						<select name="batch" value="{{$student->batch}}" class="custom-select custom-select-md text-dark">
						  	@foreach($batch as $row)
						  		<option value="{{$row->id}}" @if($student->batch_id==$row->id) {{'selected'}}  @endif>{{$row->name}}
						  		</option>
						  	@endforeach
						</select>
					</div>
	        	</div>
	        	<div class="row">
	        		<div class="form-group col-md-5">
					<label for="class" class="text-dark"><strong>Choose Course</strong></label>
					<select name="course" value="" class="custom-select custom-select-md text-dark">
					    @foreach($course as $row)
						<option value="{{$row->id}}" @if($student->course_id==$row->id) {{'selected'}}  @endif>{{$row->name}}</option>
						@endforeach
					</select>
					</div>
		        	
					<div class="form-group col-md-5">
		  			    <label for="accept_date" class="text-dark"><strong>Accept Date</strong></label>
		  			    <input type="date" class="form-control" name="accept_date" value="{{$student->accept_date}}">
		    		</div>
	        	</div>
	        	<div class="row">
	        		<div class="form-group col-md-5">
	  			    <label for="name" class="text-dark"><strong>Name</strong></label>
	  			    <input type="text" class="form-control text-dark" name="name" value="{{$student->name}}">
		    		</div>
					<div class="form-group col-md-5">
		  			    <label for="dob" class="text-dark"><strong>Date of Birth</strong></label>
		  			    <input type="date" class="form-control text-dark" name="dob" value="{{$student->dob}}">
		    		</div>
	        	</div>
	    		<div class="row">
	    			<div class="form-group col-md-5">
	  			    <label for="age" class="text-dark"><strong>Age</strong></label>
	  			    <input type="number" class="form-control text-dark" name="age" value="{{$student->age}}">
		    		</div>			
					<div class="form-group col-md-5">
					    <label for="phone" class="text-dark"><strong>Phone No</strong></label>
					    <input type="number" class="form-control text-dark" name="phone" value="{{$student->phone}}">
					</div>
	    		</div>
				<div class="row">
					<div class="form-group col-md-5">
				    <label for="email" class="text-dark"><strong>Email</strong></label>
				    <input type="email" class="form-control text-dark" name="email" value="{{$student->email}}">
					</div>
					<div class="form-group col-md-5">
					    <label for="education" class="text-dark"><strong>Education</strong></label>
					    <input type="text" class="form-control text-dark" name="education" value="{{$student->education}}">
					</div>
				</div>
				<div class="row">
					<div class="form-group col-md-5">
				    <label for="address" class="text-dark"><strong>Address</strong></label>
				    <textarea class="form-control text-dark" name="address" value="" rows="2">{{$student->address}}</textarea>
					</div>
					<div class="form-group col-md-5">
					    <label for="objective" class="text-dark"><strong>Objective of join this class</strong></label>
					    <textarea class="form-control text-dark" name="objective" value="" rows="2">{{$student->objective}}</textarea>
					</div>
				</div>
				<div class="row">
					<div class="form-group col-md-5">
				    <label for="comment" class="text-dark"><strong>Comment Box</strong></label>
				    <textarea class="form-control text-dark" name="comment" value="" rows="3">{{$student->comment}}</textarea>
					</div>
					<fieldset class="form-group col-md-5">
						<label for="bpro" class="text-dark mb-3"><strong>How do you Know B Pro</strong></label>
						<div class="col">
							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" name="bpro[]" value="facebook" @if(old('bpro','{{$student->bpro}}')=="facebook") checked @endif >
							  <label class="form-check-label" for="inlineCheckbox1" class="text-dark">Facebook</label>
							</div>
							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" name="bpro[]" value="friend" @if(old('bpro','{{$student->bpro}}')=="friend") checked @endif >
							  <label class="form-check-label" for="inlineCheckbox2" class="text-dark">Friends</label>
							</div>
							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" name="bpro[]" value="other" @if(old('bpro','{{$student->bpro}}')=="other") checked @endif >
							  <label class="form-check-label" for="inlineCheckbox3" class="text-dark">Other</label>
							</div>
						</div>
					</fieldset>
				</div>
				<div class="row">
					<div class="form-group col-md-10">
					    <label for="note" class="text-dark"><strong>Addition Information</strong></label>
					    <textarea class="form-control text-dark summernote" name="note" rows="3">{{$student->note}}</textarea>
					</div>
				</div>	    
		  	    <div class="form-group row">
		  		    <div class="col-sm-10">
		  		      <button type="submit" class="btn btn-primary">Update Student</button>
		  		    </div>
		  	    </div>
		    </form>

    </div>
@endsection
@section('script')
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
	<script type="text/javascript" src="{{asset('backend/summernote/summer.js')}}"></script>
@endsection