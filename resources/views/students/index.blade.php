@extends('layouts.master')
@section('style')
<link href="{{asset('backend/js/demo/custom.css')}}" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.6.5/css/buttons.dataTables.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css">
<!-- Custom styles for this page -->
<link href="{{asset('backend/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">

@endsection

<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">Student Management</h1>
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ url('/')}}"><i class="fas fa-home"></i></a></li>
    <li class="breadcrumb-item"><a href="{{ route('students.index')}}">Students List</a></li>
  </ol>
</div>

<!-- Row -->
<div class="row">
  <div class="col-lg-12 mb-4">
     
      <div class="card">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between mb-2">
          <h6 class="m-0 font-weight-bold text-primary">Students List</h6>
          <a href="{{route('students.create')}}" class="btn btn-sm btn-primary">Create Student</a>
        </div>
        <div class="table-responsive">
          <table class="table align-items-center table-flush" id="dataTable">
            <thead class="thead-light">
              <tr>
                <th scope="col" class="sort">No</th>                
                <th scope="col" class="sort"> Student Code</th>                
                <th scope="col" class="sort">Name</th>

                <th scope="col" class="sort">Batch</th>
                <th scope="col" class="sort">Course</th>

                <th scope="col" class="sort">Date of Birth</th>
                <th scope="col" class="sort">Age</th>
                <th scope="col" class="sort">Phone</th>
                <th scope="col" class="sort">Email</th>
                <th scope="col" class="sort">Address</th>
                <th scope="col" class="sort">Education</th>
                <th scope="col" class="sort">Objective</th>
                <th scope="col" class="sort">Bpro</th>
                <th scope="col" class="sort">Accept Date</th>
                <th scope="col" class="sort">Action</th>
              </tr>
            </thead>
            <tbody>
              @php $i=1; @endphp
                  @foreach($students as $row)
                    <tr>
                      <td>{{$i++}}</td>             
                      <td>{{$row->code}}</td>
                      <td>{{$row->name}}</td>

                      <td>{{$row->batch->name}}</td>
                      <td>{{$row->course->name}}</td>
                      <td>{{$row->dob}}</td>
                      <td>{{$row->age}}</td>
                      <td>{{$row->phone}}</td>
                      <td>{{$row->email}}</td>
                      <td>{{$row->address}}</td>
                      <td>{{$row->education}}</td>
                      <td>{{$row->objective}}</td>
                      <td>{{$row->bpro}}</td>
                      <td>{{$row->accept_date}}</td>
                      
                      <td>
                        <a href="{{action('StudentController@downloadPDF', $row->id)}}" class="btn btn-dark detail btn-sm" ><i class="fa fa-file-pdf fa-1x btn-danger"></i></a>

                        <a href="{{route('students.show',$row->id)}}" class="btn btn-warning detail btn-sm" ><i class="fas fa-eye"></i></a>

                        <a href="{{route('students.edit',$row->id)}}" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
                        
                        <form method="post" style="display: inline-block" action="{{route('students.destroy',$row->id)}}" onsubmit="return confirm('Are you sure?')">
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

@section('script')

<script type="text/javascript" src="{{ asset('backend/jQuery/jquery.js') }}"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.23/js/dataTables.foundation.min.js"></script>

<script type="text/javascript" src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>

<script type="text/javascript" src="https://cdn.datatables.net/1.10.23/js/dataTables.foundation.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.flash.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.print.min.js"></script>

<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.colVis.min.js"></script>

<!-- Page level custom scripts -->
<script src="{{ asset('backend/js/demo/datatables-demo.js') }}"></script>
<script src="{{ asset('backend/js/demo/custom.css') }}"></script>
<script src="{{ asset('backend/datatables/dataTables.bootstrap4.min.js') }}"></script>
@endsection