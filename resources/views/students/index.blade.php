@extends('layouts.master')

@section('content')
@include('datatable.style')

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
          <table class="table hover align-items-center table-flush" id="dataTable">
            <thead class="thead-light">
              <tr>
                <th scope="col" class="sort">No</th>                
                <th scope="col" class="sort">Code</th>
                <th scope="col" class="sort">Name</th>

                <th scope="col" class="sort">Course</th>
                <th scope="col" class="sort">Batch</th>
                <th scope="col" class="sort">Fees</th>
               

                <th scope="col" class="sort">Accept Date</th>

                <th scope="col" class="sort">Age</th>
                <th scope="col" class="sort">Date of Birth</th>
                <th scope="col" class="sort">Phone</th>
                <th scope="col" class="sort">Email</th>
                <th scope="col" class="sort">Education</th>
                <th scope="col" class="sort">First Paid</th>
                <th scope="col" class="sort">Second Paid</th>
                <th scope="col" class="sort">Address</th>
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
                      <td>{{$row->course->fees}}</td>
                      <td>{{ \Carbon\Carbon::parse($row->accept_date)->format('d/M/Y')}}</td>
                      <td>{{$row->age}}</td>
                      <td>{{ \Carbon\Carbon::parse($row->dob)->format('d/M/Y')}}</td>
                      <td>{{$row->phone}}</td>
                      <td>{{$row->email}}</td>
                      <td>{{$row->education}}</td>
                      <td>{{$row->first_paid}}</td>
                      <td>{{$row->second_paid}}</td>
                      <td>{{$row->address}}</td>

                      <td>
                        <a href="{{action('StudentController@downloadPDF', $row->id)}}" class="btn btn-dark detail btn-sm mt-1" ><i class="fa fa-file-pdf fa-1x btn-danger"></i></a>

                        <a href="{{route('students.show',$row->id)}}" class="btn btn-warning detail btn-sm mt-1" ><i class="fas fa-eye"></i></a>

                        <a href="{{route('students.edit',$row->id)}}" class="btn btn-primary btn-sm mt-1"><i class="fas fa-edit"></i></a>
                        @can('delete.users')
                        <form method="post" style="display: inline-block;" action="{{route('students.destroy',$row->id)}}" onsubmit="return confirm('Are you sure?')">
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="btn btn-danger btn-sm mt-1"><i class="fas fa-trash"></i></button>
                        </form>
                        @endcan
                      </td>
                    </tr>
                  @endforeach
            </tbody>
              <tfoot>
            <tr>
                <th colspan="6" style="text-align:right">Total:</th>
                <th></th>
                <th></th>
                <th></th>
                
                
            </tr>
        </tfoot>
          </table>
        </div>
        <div class="card-footer"></div>
      </div>
    </div>
</div>

@endsection


@section('scripts')
@include('datatable.script')
  <!-- Page level custom scripts -->
  <script src="{{ asset('backend/js/demo/datatables-demo.js') }}"></script>
  
@endsection

