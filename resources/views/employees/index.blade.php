@extends('layouts.master')	
@section('style')
  <!-- Custom styles for this page -->
  <link href="{{asset('backend/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
@endsection
@section('content')
<link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">

<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">Employee Management</h1>
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ url('/home')}}"><i class="fas fa-home"></i></a></li>
    <li class="breadcrumb-item"><a href="">Employee Lists</a></li>
  </ol>
</div>

<!-- Row -->
<div class="row">
  <div class="col-lg-12 mb-4">
     
      <div class="card">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-primary">Employee Lists</h6>
          <a href="{{route('employees.create')}}" class="btn btn-sm btn-primary">Create Employee</a>
        </div>
        <div class="table-responsive">
          <table class="table align-items-center table-flush">
            <thead class="thead-light">
              <tr>
                <th scope="col" class="sort">No</th>                
                <th scope="col" class="sort">Image</th>
                <th scope="col" class="sort">Name</th>
                <th scope="col" class="sort">Department</th>
                <th scope="col" class="sort">Position</th>
                <th scope="col" class="sort">Join Date</th>            
                <th scope="col" class="sort">Action</th>
              </tr>
            </thead>
            <tbody>
              @php $i=1; @endphp
              @foreach($employees as $employee)
                    <tr>
                      <td>{{$i++}}</td>             
                      <td>
                        <img class="emp-img" src="{{asset('/storage/employee_images/'.$employee->picture)}}">
                        </td>
                      <td>{{$employee->first_name}} {{$employee->last_name}}</td>                
                      <td>{{$employee->empDepartment->dept_name}}</td>
                      <td>{{$employee->empDivision->division_name}}</td>
                      <td>{{$employee->join_date}}</td>
                      <td>
                        <a href="{{route('employees.show',$employee->id)}}" class="btn btn-warning detail btn-sm" ><i class="fas fa-eye"></i></a>

                        <a href="{{route('employees.edit',$employee->id)}}" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>

                        <form method="post" style="display: inline-block" action="{{route('employees.destroy',$employee->id)}}" onsubmit="return confirm('Are you sure?')">
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                        </form>
                        <a href="{{ route('payrolls.show', ['id' => $employee->id]) }}" data-toggle="tooltip" title="Payroll" class="btn btn-success btn-sm"><i class="fas fa-file"></i></a>
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
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
@endsection
@section('script')
  <!-- Page level plugins -->
  <script src="{{ asset('backend/datatables/jquery.dataTables.min.js') }}"></script>
  <script src="{{ asset('backend/datatables/dataTables.bootstrap4.min.js') }}"></script>

  <!-- Page level custom scripts -->
  <script src="{{ asset('backend/js/demo/datatables-demo.js') }}"></script>

@endsection