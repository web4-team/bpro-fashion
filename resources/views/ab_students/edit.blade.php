@extends('artbotlayouts.master')
@section('style')
<link rel="stylesheet" href="{{asset('backend/summernote/summernote-bs4.min.css')}}" />

<!-- 	  <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet"> -->
	
	@endsection
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
						<a href="{{route('ab_students.index')}}" class="btn btn-primary btn-sm">Back to Table</a>

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

		<form method="post" action="{{route('ab_students.update',$ab_student->id)}}"class="card-body mb-4">
			@csrf
			@method('PUT')
			<div class="mb-4 py-3 d-flex flex-row">
				{{-- <h1 class="m-0 font-weight-bold text-primary text-center">Update Form</h1> --}}
			</div>

			<div class="row">
				<div class="form-group col-md-5">
					<label for="code" class="text-dark"><strong>Student Code</strong></label>
					<input type="code" class="form-control text-dark" name="ab_code" value="{{$ab_student->ab_code}}">
				</div>
				<div class="form-group col-md-5">
					<label for="batch" class="text-dark"><strong>Choose Course</strong></label>
					<select name="ab_batch" value="{{$ab_student->ab_batch}}" class="custom-select custom-select-md text-dark">
						@foreach($ab_batch as $row)
						<option value="{{$row->id}}" @if($ab_student->ab_batch_id==$row->id) {{'selected'}}  @endif>{{$row->ab_name}}
						</option>
						@endforeach
					</select>
				</div>
			</div>
			<div class="row">
				<div class="form-group col-md-5">
					<label for="class" class="text-dark"><strong>Choose Batch</strong></label>
					<select name="ab_course" value="" class="custom-select custom-select-md text-dark">
						@foreach($ab_course as $row)
						<option value="{{$row->id}}" @if($ab_student->ab_course_id==$row->id) {{'selected'}}  @endif>{{$row->ab_name}}</option>
						@endforeach
					</select>
				</div>

				<div class="form-group col-md-5">
					<label for="accept_date" class="text-dark"><strong>Accept Date</strong></label>
					<input type="date" class="form-control" name="ab_accept_date" value="{{$ab_student->ab_accept_date}}">
				</div>
			</div>
			<div class="row">
				<div class="form-group col-md-5">
					<label for="name" class="text-dark"><strong>Name</strong></label>
					<input type="text" class="form-control text-dark" name="ab_name" value="{{$ab_student->ab_name}}">
				</div>
				<div class="form-group col-md-5">
					<label for="dob" class="text-dark"><strong>Date of Birth</strong></label>
					<input type="date" class="form-control text-dark" name="ab_dob" value="{{$ab_student->ab_dob}}">
				</div>
			</div>
			<div class="row">
				<div class="form-group col-md-5">
					<label for="age" class="text-dark"><strong>Age</strong></label>
					<input type="number" class="form-control text-dark" name="ab_age" value="{{$ab_student->ab_age}}">
				</div>			
				<div class="form-group col-md-5">
					<label for="phone" class="text-dark"><strong>Phone No</strong></label>
					<input type="number" class="form-control text-dark" name="ab_phone" value="{{$ab_student->ab_phone}}">
				</div>
			</div>
			<div class="row">
				<div class="form-group col-md-5">
					<label for="email" class="text-dark"><strong>Email</strong></label>
					<input type="email" class="form-control text-dark" name="ab_email" value="{{$ab_student->ab_email}}">
				</div>
				<div class="form-group col-md-5">
					<label for="education" class="text-dark"><strong>Education</strong></label>
					<input type="text" class="form-control text-dark" name="ab_education" value="{{$ab_student->ab_education}}">
				</div>
			</div>
			<div class="row">
				<div class="form-group col-md-5">
					<label for="email" class="text-dark"><strong>First Paid Amount</strong></label>

					<input type="number" class="form-control text-dark " name="ab_first" value="{{$ab_student->ab_first_paid}}"> 				

				</div>
				<div class="form-group float-right col-md-5">
					<label for="education" class="text-dark"><strong>Second Paid Amount</strong></label>
					<input type="number" class="form-control text-dark " name="ab_second" value="{{$ab_student->ab_second_paid}}">		  

				</div>
			</div>
			<div class="row">
				<div class="form-group col-md-5">
					<label for="address" class="text-dark"><strong>Address</strong></label>
					<textarea class="form-control text-dark" name="ab_address" value="" rows="2">{{$ab_student->ab_address}}</textarea>
				</div>
				<div class="form-group col-md-5">
					<label for="objective" class="text-dark"><strong>Objective of join this class</strong></label>
					<textarea class="form-control text-dark" name="ab_objective" value="" rows="2">{{$ab_student->ab_objective}}</textarea>
				</div>
			</div>
			<div class="row">
				<div class="form-group col-md-5">
					<label for="comment" class="text-dark"><strong>Comment Box</strong></label>
					<textarea class="form-control text-dark" name="ab_comment" value="" rows="3">{{$ab_student->ab_comment}}</textarea>
				</div>
				<fieldset class="form-group">
					<label for="bpro" class="text-dark">How do you Know B Pro</label>
					<div class="col-sm-10">
						<div class="form-check form-check-inline">
							<input class="form-check-input" type="checkbox" name="ab_bpro[]"  value="Facebook" @if ($ab_student->ab_bpro== "Facebook") checked @endif>
							<label class="form-check-label" for="inlineCheckbox1" class="text-dark">Facebook</label>
						</div>
						<div class="form-check form-check-inline">
							<input class="form-check-input" type="checkbox" name="ab_bpro[]"  value="Friends" @if ($ab_student->ab_bpro== "Friends") checked @endif>
							<label class="form-check-label" for="inlineCheckbox2" class="text-dark">Friends</label>
						</div>
						<div class="form-check form-check-inline">
							<input class="form-check-input" type="checkbox" name="ab_bpro[]"  value="Other"
							@if ($ab_student->ab_bpro == "Other") checked @endif>
							<label class="form-check-label" for="inlineCheckbox3" class="text-dark">Other</label>
						</div>
					</div>
				</fieldset>	
			</div>
			<div class="row">
				<div class="form-group col-md-10">
					<label for="note" class="text-dark"><strong>Addition Information</strong></label>
					<textarea class="form-control text-dark summernote" name="ab_note" rows="3">{{$ab_student->ab_note}}</textarea>
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
	@section('scripts')
	<script type="text/javascript" src="{{asset('backend/summernote/summernote-bs4.min.js')}}">
	</script>

<!-- <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
  <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script> -->

  <script type="text/javascript" src="{{asset('backend/summernote/summer.js')}}"></script>
  @endsection