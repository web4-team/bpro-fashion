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

	<div class="row">
		<div class="col-md-2"></div>   
		<div class="mb-4 py-3 d-flex flex-row">
	   
	    </div>
					
	    <form method="post" action="{{route('students.store')}}"class=" mb-4 card-body mx-10">
	    	
	        	@csrf
	        	<div class="row">
	        		<div class="form-group float-left col-md-5">
				    <label for="code" class="text-dark"><strong>Student Code</strong></label>
					    <div class="col-md-12">
					    	<input type="code" class="form-control text-dark @error('code') is-invalid @enderror" name="code" value="{{old('code')}}">

					    	@error('code')
						    	<span class="invalid-feedback alert-danger" role="alert">
		                          <strong>{{ $message }}</strong>
		                      	</span>
							@enderror
					    </div>
					</div>
					<div class="form-group float-right col-md-5">
						<label for="class" class="text-dark"><strong>Choose Course</strong></label>
							<div class="col-md-12">
								<select name="batch" class="custom-select custom-select-md text-dark @error('batch') is-invalid @enderror" value="{{old('batch')}}">
							  	@foreach($batch as $row)
								  <option value="{{$row->id}}" @if($row->id == old('batch')) selected @endif>{{$row->name}}</option>
								@endforeach
								
								@error('batch')
								    <span class="invalid-feedback alert-danger" role="alert">
			                          <strong>{{ $message }}</strong>
			                      	</span>
								@enderror
								</select>
							</div>
					</div>
	        	</div>
	        	<div class="row">
	        		<div class="form-group col-md-5">
					<label for="class" class="text-dark"><strong>Choose Batch</strong></label>
						<div class="col-md-12">
							<select name="course" class="custom-select custom-select-md text-dark @error('course') is-invalid @enderror" value="{{old('course')}}">
						  	@foreach($course as $row)
							<option value="{{$row->id}}" @if($row->id == old('course')) selected @endif>{{$row->name}}</option>
							@endforeach

							@error('course')
							    <span class="invalid-feedback alert-danger" role="alert">
		                          <strong>{{ $message }}</strong>
		                      	</span>
							@enderror
							</select>
						</div>
					</div>
					
					<div class="form-group float-right col-md-5">
		  			    <label for="accept_date" class="text-dark"><strong>Accept Date</strong></label>
			  			    <div class="col-md-12">
			  			    	<input type="date" class="form-control @error('accept_date') is-invalid @enderror" name="accept_date" value="{{old('accept_date')}}">

				  			    @error('accept_date')
								    <span class="invalid-feedback alert-danger" role="alert">
			                          <strong>{{ $message }}</strong>
			                      	</span>
								@enderror
			  			    </div>
		    		</div>
	        	</div>
	        	<div class="row">
	        		<div class="form-group col-md-5">
	  			    <label for="name" class="text-dark"><strong>Name</strong></label>
		  			    <div class="col-md-12">
		  			    	<input type="text" class="form-control text-dark @error('name') is-invalid @enderror" name="name" value="{{old('name')}}">

			  			    @error('name')
							    <span class="invalid-feedback alert-danger" role="alert">
		                          <strong>{{ $message }}</strong>
		                      	</span>
							@enderror
		  			    </div>
		    		</div>
					<div class="form-group float-right col-md-5">
		  			    <label for="dob" class="text-dark"><strong>Date of Birth</strong></label>
			  			    <div class="col-md-12">
			  			    	<input type="date" class="form-control text-dark @error('dob') is-invalid @enderror" name="dob" value="{{old('dob')}}">

				  			    @error('dob')
								    <span class="invalid-feedback alert-danger" role="alert">
			                          <strong>{{ $message }}</strong>
			                      	</span>
								@enderror
			  			    </div>
		    		</div>
	        	</div>
	    		<div class="row">
	    			<div class="form-group col-md-5">
	  			    <label for="age" class="text-dark"><strong>Age</strong></label>
	  			    	<div class="col-md-12">
	  			    		<input type="number" class="form-control text-dark @error('age') is-invalid @enderror" name="age" value="{{old('age')}}">

  			    			@error('age')
					    		<span class="invalid-feedback alert-danger" role="alert">
		                          <strong>{{ $message }}</strong>
		                      	</span>
							@enderror									
	  			    	</div>
		    		</div>			
					<div class="form-group float-right col-md-5">
					    <label for="phone" class="text-dark"><strong>Phone No</strong></label>
					    	<div class="col-md-12">
					    	<input type="number" class="form-control text-dark @error('phone') is-invalid @enderror" name="phone" value="{{old('phone')}}">

						    @error('phone')
							    <span class="invalid-feedback alert-danger" role="alert">
		                          <strong>{{ $message }}</strong>
		                      	</span>
							@enderror
					    	</div>
					</div>
	    		</div>
				<div class="row">
					<div class="form-group col-md-5">
				    <label for="email" class="text-dark"><strong>Email</strong></label>
				    	<div class="col-md-12">
				    		<input type="text" class="form-control text-dark @error('email') is-invalid @enderror" name="email" value="{{old('email')}}">

					    	@error('email')
							    <span class="invalid-feedback alert-danger" role="alert">
		                          <strong>{{ $message }}</strong>
		                      	</span>
							@enderror	
				    	</div>

					</div>
					<div class="form-group float-right col-md-5">
					    <label for="education" class="text-dark"><strong>Education</strong></label>
					    	<div class="col-md-12">
					    		<input type="text" class="form-control text-dark @error('education') is-invalid @enderror" name="education" value="{{old('education')}}">

							    @error('education')
								    <span class="invalid-feedback alert-danger" role="alert">
			                          <strong>{{ $message }}</strong>
			                      	</span>
								@enderror
					    	</div>
					</div>
				</div>
				<div class="row">
					<div class="form-group col-md-5">
				    <label for="address" class="text-dark"><strong>Address</strong></label>
				    	<div class="col-md-12">
				    		<textarea class="form-control text-dark @error('address') is-invalid @enderror" name="address" rows="2" value="{{old('address')}}">{{old('address')}}</textarea>

					    	@error('address')
							    <span class="invalid-feedback alert-danger" role="alert">
		                          <strong>{{ $message }}</strong>
		                      	</span>
							@enderror
				    	</div>
					</div>
					<div class="form-group float-right col-md-5">
					    <label for="objective" class="text-dark"><strong>Objective of join this class</strong></label>
					    	<div class="col-md-12">
					    		<textarea class="form-control text-dark @error('objective') is-invalid @enderror" name="objective" value="{{old('objective')}}" rows="2">{{old('objective')}}</textarea>

							    @error('objective')
								    <span class="invalid-feedback alert-danger" role="alert">
			                          <strong>{{ $message }}</strong>
			                      	</span>
								@enderror
					    	</div>
					</div>
				</div>
				<div class="row">
					<div class="form-group col-md-5">
				    <label for="comment" class="text-dark"><strong>Comment Box</strong></label>
				    	<div class="col-md-12">
				    		<textarea class="form-control text-dark @error('comment') is-invalid @enderror" name="comment" value="{{old('comment')}}" rows="3">{{old('comment')}}</textarea>

					    	@error('comment')
							    <span class="invalid-feedback alert-danger" role="alert">
		                          <strong>{{ $message }}</strong>
		                      	</span>
							@enderror
				    	</div>
					</div>
					<fieldset class="form-group col-md-5">
						<label for="bpro" class="text-dark mb-4"><strong>How do you Know B Pro</strong></label>
						<div class="col">
							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" name="bpro[]" value="Facebook" >
							  <label class="form-check-label" for="inlineCheckbox1" class="text-dark">Facebook</label>
							</div>
							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" name="bpro[]" value="Friends" >
							  <label class="form-check-label" for="inlineCheckbox2" class="text-dark">Friends</label>
							</div>
							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" name="bpro[]" value="Other" >
							  <label class="form-check-label" for="inlineCheckbox3" class="text-dark">Other</label>
							</div>

						</div>
					</fieldset>	
				</div>
				
		  	    <div class="form-group row my-3">
		  		    <div class="col-sm-10">
		  		      <button type="submit" class="btn btn-primary">Create Student</button>
		  		    </div>
		  	    </div>
		</form>
		
    </div>
	

	
@endsection
