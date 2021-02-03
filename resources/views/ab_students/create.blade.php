@extends('artbotlayouts.master')
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
              <a href="{{route('ab_students.index')}}" class="btn btn-primary btn-sm">Back to Table</a>
              
            </div>
          </div>
        </div>
      </div>
    </div>

	<div class="row">
		<div class="col-md-2"></div>   
		<div class="mb-4 py-3 d-flex flex-row">
	   
	    </div>
					
	    <form method="post" action="{{route('ab_students.store')}}"class=" mb-4 card-body mx-10">
	    	
	        	@csrf
	        	<div class="row">
	        		<div class="form-group float-left col-md-5">
				    <label for="code" class="text-dark"><strong>Student Code</strong></label>
					    <div class="col-md-12">
					    	<input type="code" class="form-control text-dark @error('ab_code') is-invalid @enderror" name="ab_code" value="{{old('ab_code')}}">

					    	@error('ab_ab_code')
						    	<span class="invalid-feedback alert-danger" role="alert">
		                          <strong>{{ $message }}</strong>
		                      	</span>
							@enderror
					    </div>
					</div>
					<div class="form-group float-right col-md-5">
						<label for="class" class="text-dark"><strong>Choose Course</strong></label>
							<div class="col-md-12">
								<select name="ab_batch" class="custom-select custom-select-md text-dark @error('ab_batch') is-invalid @enderror" value="{{old('ab_batch')}}">
							  	@foreach($ab_batch as $row)
								  <option value="{{$row->id}}" @if($row->id == old('ab_batch')) selected @endif>{{$row->ab_name}}</option>
								@endforeach
								
								@error('ab_batch')
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
							<select name="ab_course" class="custom-select custom-select-md text-dark @error('ab_course') is-invalid @enderror" value="{{old('ab_course')}}">
						  	@foreach($ab_course as $row)
							<option value="{{$row->id}}" @if($row->id == old('ab_course')) selected @endif>{{$row->ab_name}}</option>
							@endforeach

							@error('ab_course')
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
			  			    	<input type="date" class="form-control @error('ab_accept_date') is-invalid @enderror" name="ab_accept_date" value="{{old('ab_accept_date')}}">

				  			    @error('ab_accept_date')
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
		  			    	<input type="text" class="form-control text-dark @error('ab_name') is-invalid @enderror" name="ab_name" value="{{old('ab_name')}}">

			  			    @error('ab_name')
							    <span class="invalid-feedback alert-danger" role="alert">
		                          <strong>{{ $message }}</strong>
		                      	</span>
							@enderror
		  			    </div>
		    		</div>
					<div class="form-group float-right col-md-5">
		  			    <label for="dob" class="text-dark"><strong>Date of Birth</strong></label>
			  			    <div class="col-md-12">
			  			    	<input type="date" class="form-control text-dark @error('ab_dob') is-invalid @enderror" name="ab_dob" value="{{old('ab_dob')}}">

				  			    @error('ab_ab_dob')
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
	  			    		<input type="number" class="form-control text-dark @error('ab_age') is-invalid @enderror" name="ab_age" value="{{old('ab_age')}}">

  			    			@error('ab_ab_age')
					    		<span class="invalid-feedback alert-danger" role="alert">
		                          <strong>{{ $message }}</strong>
		                      	</span>
							@enderror									
	  			    	</div>
		    		</div>			
					<div class="form-group float-right col-md-5">
					    <label for="phone" class="text-dark"><strong>Phone No</strong></label>
					    	<div class="col-md-12">
					    	<input type="number" class="form-control text-dark @error('ab_phone') is-invalid @enderror" name="ab_phone" value="{{old('ab_phone')}}">

						    @error('ab_phone')
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
				    		<input type="text" class="form-control text-dark @error('ab_email') is-invalid @enderror" name="ab_email" value="{{old('ab_email')}}">

					    	@error('ab_email')
							    <span class="invalid-feedback alert-danger" role="alert">
		                          <strong>{{ $message }}</strong>
		                      	</span>
							@enderror	
				    	</div>

					</div>
					<div class="form-group float-right col-md-5">
					    <label for="education" class="text-dark"><strong>Education</strong></label>
					    	<div class="col-md-12">
					    		<input type="text" class="form-control text-dark @error('ab_education') is-invalid @enderror" name="ab_education" value="{{old('ab_education')}}">

							    @error('ab_education')
								    <span class="invalid-feedback alert-danger" role="alert">
			                          <strong>{{ $message }}</strong>
			                      	</span>
								@enderror
					    	</div>
					</div>
				</div>
						<div class="row">
					<div class="form-group col-md-5">
				    <label for="email" class="text-dark"><strong>First Paid Amount</strong></label>
				    	<div class="col-md-12">
				    		<input type="number" class="form-control text-dark @error('ab_first') is-invalid @enderror" name="ab_first" value="0">

					    	@error('ab_first')
							    <span class="invalid-feedback alert-danger" role="alert">
		                          <strong>{{ $message }}</strong>
		                      	</span>
							@enderror	
				    	</div>

					</div>
					<div class="form-group float-right col-md-5">
					    <label for="education" class="text-dark"><strong>Second Paid Amount</strong></label>
					    	<div class="col-md-12">
					    		<input type="number" class="form-control text-dark @error('ab_second') is-invalid @enderror" name="ab_second" value="0">

							    @error('ab_ab_second')
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
				    		<textarea class="form-control text-dark @error('ab_address') is-invalid @enderror" name="ab_address" rows="2" value="{{old('ab_address')}}">{{old('ab_address')}}</textarea>

					    	@error('ab_address')
							    <span class="invalid-feedback alert-danger" role="alert">
		                          <strong>{{ $message }}</strong>
		                      	</span>
							@enderror
				    	</div>
					</div>
					<div class="form-group float-right col-md-5">
					    <label for="objective" class="text-dark"><strong>Objective of join this class</strong></label>
					    	<div class="col-md-12">
					    		<textarea class="form-control text-dark @error('ab_objective') is-invalid @enderror" name="ab_objective" value="{{old('ab_objective')}}" rows="2">{{old('ab_objective')}}</textarea>

							    @error('ab_objective')
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
				    		<textarea class="form-control text-dark @error('ab_comment') is-invalid @enderror" name="ab_comment" value="{{old('ab_comment')}}" rows="3">{{old('ab_comment')}}</textarea>

					    	@error('ab_comment')
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
							  <input class="form-check-input" type="checkbox" name="ab_bpro[]" value="Facebook" >
							  <label class="form-check-label" for="inlineCheckbox1" class="text-dark">Facebook</label>
							</div>
							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" name="ab_bpro[]" value="Friends" >
							  <label class="form-check-label" for="inlineCheckbox2" class="text-dark">Friends</label>
							</div>
							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" name="ab_bpro[]" value="Other" >
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
