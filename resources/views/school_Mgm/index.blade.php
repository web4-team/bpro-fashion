@extends('layouts.master')
@section('style')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.6.5/css/buttons.dataTables.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css">
  <!-- Custom styles for this page -->
  <link href="{{asset('backend/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="{{ asset('backend/js/demo/custom.css') }}">
@endsection
@section('content')
<!-- <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet"> -->

<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">Course Management</h1>
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ url('/')}}"><i class="fas fa-home"></i></a></li>
    <li class="breadcrumb-item"><a href="{{ route('courses.index')}}">Students List</a></li>
  </ol>
</div>

<!-- Row -->
<div class="row">
  <div class="col-lg-12 mb-4">
     
      <div class="card">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-primary">Courses List</h6>
          <a href="{{route('courses.create')}}" class="btn btn-sm btn-primary">Create Course</a>
        </div>
        <div class="table-responsive">
          <table class="table align-items-center table-flush">
            <thead class="thead-light">
              <tr>
                <th scope="col" class="sort">No</th>
                <th scope="col" class="sort">Course Name</th>
                
                <th scope="col" class="sort">Course Type</th>
                <th scope="col" class="sort">Fees</th>
                <th scope="col" class="sort">Discount(%)</th>

                <th scope="col" class="sort">Discount(Amount)</th>

                <th scope="col" class="sort">Total Fees</th>
                <th scope="col" class="sort">Start Date</th>
                <th scope="col" class="sort">End Date</th> 
                          
                <th scope="col" class="sort">Action</th>
              </tr>
            </thead>
            <tbody>
              @php $i=1; @endphp
                  @foreach($courses as $course)
                    <tr>
                      <td>{{$i++}}</td>             
                      <td>{{$course->name}}</td>
                      
                      <td>{{$course->type}}</td>
                      <td>{{number_format($course->fees)}} Ks</td>
                      <td>{{$course->discount}}%</td>
                      <td>{{$course->amount}} Ks</td>
                      <td>{{number_format($course->fees-($course->fees*$course->discount/100)-$course->amount)}} Ks</td>

                      <td>{{ \Carbon\Carbon::parse($course->date)->format('d/M/Y')}}</td>

                      <td>{{\Carbon\Carbon::parse($course->duration)->format('d/M/Y')}}</td>
                      

                      <td>
                       
                        <a href="{{route('courses.show',$course->id)}}" class="btn btn-warning detail btn-sm" ><i class="fas fa-eye"></i></a>

                        <a href="{{route('courses.edit',$course->id)}}" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
                        
                        <form method="post" style="display: inline-block" action="{{route('courses.destroy',$course->id)}}" onsubmit="return confirm('Are you sure?')">
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
<!--  <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script> -->

@endsection
@section('script')
<script type="text/javascript" src="{{ asset('backend/jQuery/jquery.js') }}"></script>

<script type="text/javascript" src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>



<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js"></script>



  <!-- Page level plugins -->

  <!-- <script src="{{ asset('backend/datatables/jquery.dataTables.min.js') }}"></script> -->
  <script src="{{ asset('backend/datatables/dataTables.bootstrap4.min.js') }}"></script>
  

  

  <!-- Page level custom scripts -->

<script src="{{ asset('backend/js/demo/datatables-demo.js') }}"></script> --}}
@endsection

