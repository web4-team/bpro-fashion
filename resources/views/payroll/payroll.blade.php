@extends('layouts.master')	
@section('style')
  <!-- Custom styles for this page -->
  <link href="{{asset('backend/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
@endsection
@section('content')
<link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">

<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">Payroll for <b>{{ $employee->first_name }} {{ $employee->last_name }}</b></h1>
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ url('/home')}}"><i class="fas fa-home"></i></a></li>
    <li class="breadcrumb-item"><a href="">Payroll Lists</a></li>
  </ol>
</div>


<div class="row">
    <div class="col-lg-12 mb-4">
       
        <div class="card">
          <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Basic Salary : MMK {{$employee->empSalary->s_amount}}</h6>
            <a href="{{ route('payrolls.create', ['id'=>$employee->id]) }}" class="btn btn-sm btn-primary">Create Payroll</a>
          </div>
          <div class="table-responsive">
            <table class="table align-items-center table-flush" id="dataTable">
              <thead class="thead-light">
                <tr>
                  <th scope="col" class="sort">Date-issued</th>                
                  <th scope="col" class="sort">Commission</th>
                  <th scope="col" class="sort">Bonus</th>
                  <th scope="col" class="sort">Overtime</th>
                  <th scope="col" class="sort">Leave</th>
                  <th scope="col" class="sort">Late</th>            
                  <th scope="col" class="sort">Total</th>            
                  <th scope="col" class="sort">Action</th>
                </tr>
              </thead>

              <tbody>
                @if($employee->payrolls->count()> 0)
                  @foreach($employee->payrolls as $payroll)
                    <tr>		
                      <td>{{ $payroll->date }}</td>
                        <td>{{ $payroll->commission }}</td>
                      <td>{{ $payroll->bonus }}</td>
                      <td>{{ $payroll->overtime }}</td>
                      <td>{{ $payroll->leave }}</td>
                      <td>{{ $payroll->late }}</td>
                      <td></td>
                     
                      <td>
                        <a href="{{ route('payrolls.edit', ['id' => $payroll->id]) }}" class="btn btn-success">Edit</a>
                      </td>
         
                    </tr>
                  @endforeach
            
                @endif
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