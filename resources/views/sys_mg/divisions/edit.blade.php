@extends('layouts.master')
@section('content')
	<!-- Header -->
    <div class="header pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <h3 class="h2 text-dark d-inline-block mb-0">Update New Division</h3>
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item"><a href="#">Division Lists</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Update Division</li>
                </ol>
              </nav>
            </div>
            <div class="col-lg-6 col-5 text-right">
              <a href="{{route('divisions.index')}}" class="btn btn-primary btn-sm">Back to Table</a>
              
            </div>
          </div>
        </div>
      </div>
    </div>

	<div class="row">
	<div class="col-lg-12">   
	<div class="card mb-4">
          <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h4 class="m-0 font-weight-bold text-primary">Update Division</h4>
          </div>
					
          <div class="card-body">
					
    <form method="post" action="{{route('divisions.update', $division->id)}}" class="col-md-6 mb-4">
    
			<div class="form-group">
			    <label for="division_name" class="text-dark">Division Name</label>
			    <input type="text" class="form-control text-dark" name="division_name" id="division_name" value="{{Request::old('division_name') ? : $division->division_name}}">
			</div>
            @method('PUT')
            @csrf()
        
            <div class="form-group row">
	  		    <div class="col-sm-10">
	  		      <button type="submit" class="btn btn-success">Update</button>
	  		    </div>
	  	    </div>
			
	  </form>
  </div>
	</div>
	</div>
	</div>
@endsection