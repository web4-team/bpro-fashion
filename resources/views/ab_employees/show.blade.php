@extends('artbotlayouts.master')
@section('content')
	<!-- Header -->
    <div class="header pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <h6 class="h2 text-dark d-inline-block mb-0">View Employee Detail</h6>
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item"><a href="#">View</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Detail</li>
                </ol>
              </nav>
            </div>
            <div class="col-lg-6 col-5 text-right">
              <a href="{{route('ab_employees.index')}}" class="btn btn-primary btn-sm">Back to Table</a>
              
            </div>
          </div>
          <div class="row">
            <div class="row collection mt-20">
                <!-- Show this image on small devices -->
                <div class="hide-on-med-only hide-on-large-only row">
                    <div class="col s8 offset-s2 mt-20">
                        <img class="p5 card-panel emp-img-big" src="{{asset('storage/employee_images/'.$employee->picture)}}">
                    </div>
                </div>
                <div class="col m8 l8 xl8">
                    <h5 class="pl-15 mt-20">{{$employee->first_name}} {{$employee->last_name}}</h5>
                    <p class="pl-15 mt-20">Address: {{$employee->address}}</p>
                    <p class="pl-15">{{$employee->empCity->city_name}}, {{$employee->empState->state_name}}, {{$employee->empCountry->country_name}}</p>
                    <p class="pl-15">{{$employee->empGender->gender_name}}</p>
                </div>
              
            </div>
            <div class="collection">
                <div class=" row">
                    <p class="pl-15 mt-20"><span class="bold col s5 m4 l4 xl3">Age :</span><span class="col m8 l8 xl9">{{$employee->age}}</span></p>
                </div>
                <div class="row">
                    <p class="pl-15"><span class="bold col s5 m4 l4 xl3">Phone :</span><span class="col m8 l8 xl9">{{$employee->phone}}</span></p>
                </div>
                <div class="row">
                    <p class="pl-15"><span class="bold col s5 m4 l4 xl3">Zip Code :</span><span class="col m8 l8 xl9">{{$employee->empCity->zip_code}}</span></p>
                </div>
                <div class="row">
                    <p class="pl-15"><span class="bold col s5 m4 l4 xl3">Department :</span><span class="col m8 l8 xl9">{{$employee->empDepartment->dept_name}}</span></p>
                </div>
                <div class="row">
                    <p class="pl-15"><span class="bold col s5 m4 l4 xl3">Position :</span><span class="col m8 l8 xl9">{{$employee->empDivision->division_name}}</span></p>
                </div>
                <div class="row">
                    <p class="pl-15"><span class="bold col s5 m4 l4 xl3">Email :</span><span class="col m8 l8 xl9">{{$employee->email}}</span></p>
                </div>
              
                <div class="row">
                    <p class="pl-15"><span class="bold col s5 m4 l4 xl3">Joined Date :</span><span class="col m8 l8 xl9">{{$employee->join_date}}</span></p>
                </div>
                <div class="row">
                    <p class="pl-15"><span class="bold col s5 m4 l4 xl3">Date of Birth :</span><span class="col m8 l8 xl9">{{$employee->birth_date}}</span></p>
                </div>
            </div>
           
        </div>
        </div>
      </div>
    </div>


@endsection