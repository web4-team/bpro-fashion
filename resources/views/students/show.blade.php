@extends('layouts.master')	
@section('content')
<!-- Header -->
    <div class="header pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <h6 class="h2 text-dark d-inline-block mb-0 ">Students Detail</h6>
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item"><a href="#">Detail</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Detail</li>
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
<!--Page content-->	
    <div class="row">
      <div class="col-md-3"></div>
        <form class="col-md-6 mb-4 card">
            <div class="card-header bg-light border-0 my-4">
              <h2 class="text-dark mb-0 text-center">Students Detail </h2>
            </div>            
            <div class="table-responsive">
                <table class="table align-items-center table-striped table-hover" style="border-radius: 6px;">
                                  
                  <tbody>
                    <tr>

                      <td>Student Code</td>
                      <td>{{$student->code}}</td>

                    </tr>

                    <tr>
                      <td>Batch Name</td>
                      <td>
                        @foreach($batches as $row)
                         @if($student->batch_id==$row->id) {{$row->name}} @endif
                        @endforeach
                      </td>
                    </tr>

                    <tr>
                      <td>Course Name</td>                     
                      <td>
                        @foreach($courses as $row)
                         @if($student->course_id==$row->id) {{$row->name}} @endif
                        @endforeach
                    </td>
                      
                     </tr>                   

                    <tr>
                      <td>Accept Date</td>
                      <td>{{ \Carbon\Carbon::parse($student->accept_date)->format('d/M/Y')}}</td>
                    </tr>

                    <tr>
                      <td>Name</td>
                      <td>{{$student->name}}</td>
                    </tr>

                    <tr>
                      <td>Date of Birth</td>
                      <td>{{ \Carbon\Carbon::parse($student->dob)->format('d/M/Y')}}</td>
                    </tr>

                    <tr>
                      <td>Age</td>
                      <td>{{$student->age}}</td>
                    </tr>

                    <tr>
                      <td>Phone No </td>
                      <td>{{$student->phone}}</td>
                    </tr>

                    <tr>
                      <td>Email</td>
                      <td>{{$student->email}}</td>
                    </tr>

                    <tr>
                      <td>Education </td>
                      <td>{{$student->education}}</td>
                    </tr>
                     <tr>
                      <td>First Paid Amount</td>
                      <td>{{$student->first_paid}} Ks</td>
                    </tr>
                     <tr>
                      <td>Second Paid Amount</td>
                      <td>{{$student->second_paid}} Ks</td>
                    </tr>
                    
                    <tr>
                      <td>Address</td>
                      <td>{{$student->address}}</td>
                    </tr>

                    <tr>
                      <td>Objective of join this class</td>
                      <td>{{$student->objective}}</td>
                    </tr>

                    <tr>
                      <td>Comment Box</td>
                      <td>{{$student->comment}}</td>
                    </tr>

                    <tr>
                      <td>How do you Know bpro </td>
                      <td>{{$student->bpro}}</td>
                    </tr>

                    <tr>
                      <td>Additional Note </td>
                      <td>{!!$student->note!!}</td>
                    </tr>
                  </tbody>
              
                </table>
            </div>
	      </form>
    </div>
@endsection