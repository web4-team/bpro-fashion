@extends('layouts.master')
@section('content')

<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">School Management</h1>
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ url('/')}}"><i class="fas fa-home"></i></a></li>
    <li class="breadcrumb-item"><a href="{{ url('/courses')}}">Courses</a></li>
  </ol>
</div>
  


<!-- Row -->
<div class="row">
  <div class="col-lg-12 mb-4">
     
      <div class="card">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-primary">Courses</h6>
          <a href="{{ route('courses.create')}}" class="btn btn-sm btn-primary">Create Course</a>
        </div>
        <div class="table-responsive">
          <table class="table align-items-center table-flush">
            <thead class="thead-light">
              <tr>
                <th scope="col" class="sort">ID</th>
                <th scope="col" class="sort">Course Name</th>
                <th scope="col" class="sort">Batch No</th>
                <th scope="col" class="sort">Fees</th>
                <th scope="col" class="sort">Discount</th>
                <th scope="col" class="sort">Total Fees</th>
                <th scope="col" class="sort">Starting Date</th>
                <th scope="col" class="sort">Duration</th>           
                <th scope="col" class="sort">Action</th>
              </tr>
            </thead>
            <tbody>
              @php $i=1; @endphp
                  @foreach($courses as $course)
                    <tr>
                      <td>{{$i++}}</td>             
                      <td>{{$course->name}}</td>
                      <td>{{$course->batch}}</td>
                      <td>{{number_format($course->fees)}} MMK</td>
                      <td>{{$course->discount}}%</td>
                      <td>{{number_format($course->fees-($course->fees*$course->discount/100))}} MMK</td>
                      <td>{{ \Carbon\Carbon::parse($course->date)->format('d/M/Y')}}</td>
                      <td>{{$course->duration}}</td>
                      <td>
                       
                        <a href="{{ route('courses.edit',$course->id)}}" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
                        
                        <form method="post" style="display: inline-block" action="{{ route('courses.destroy', $course->id)}}" onsubmit="return confirm('Are you sure?')">
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                        </form>
                      </td>
                    </tr>
                  @endforeach
            </tbody>
          </table>
        </div>
        <div class="card-footer"></div>
      </div>
    </div>
</div>

@endsection