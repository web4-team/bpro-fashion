@extends('layouts.master')	
@section('content')

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
               
                <th scope="col" class="sort">Join Date</th>            
                <th scope="col" class="sort">Action</th>
              </tr>
            </thead>
            <tbody>
              @php $i=1; @endphp
               
                    <tr>
                      <td>{{$i++}}</td>             
                      <td></td>
                      <td></td>                
                      <td></td>
                     
                      <td></td>
                      <td>
                       
              
                      </td>
                    </tr>
                
            </tbody>
          </table>
        </div>
        <div class="card-footer"></div>
      </div>
    </div>
</div>


@endsection