@extends('artbotlayouts.master')	

@section('content')
@include('datatable.style')
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
          
            <a href="{{ route('ab_payrolls.create', ['id'=>$employee->id]) }}" class="btn btn-sm btn-primary">Create Payroll</a>
          </div>
          <div class="table-responsive">
            <table class="table align-items-center table-flush" id="exp">
              <thead class="thead-light">
                <tr>
                  <th scope="col" class="sort">Date-issued</th>
                  <th scope="col" class="sort">Salary</th>                
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
                  @foreach($pay as $payroll)
                    <tr>		
                      <td>{{ \Carbon\Carbon::parse($payroll->date)->format('Y/M/d')}}</td>
                      <td>{{ $payroll->salary }}</td>
                      <td>{{$payroll->commission }}</td>
                      <td>{{ $payroll->bonus }}</td>
                      <td>{{ $payroll->overtime }}</td>
                      <td>{{ $payroll->leave }}</td>
                      <td>{{ $payroll->late }}</td>
                      <td>{{($payroll->salary+$payroll->commission+$payroll->bonus+$payroll->overtime)-($payroll->leave+$payroll->late) }}</td>
                     
                      <td>
                        <a href="{{ route('ab_payrolls.edit', ['id' => $payroll->id]) }}" class="btn btn-success">Edit</a>
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



@endsection
@section('scripts')
 @include('datatable.script')

  <!-- Page level custom scripts -->
  <script src="{{ asset('backend/js/demo/expense.js') }}"></script>
  

@endsection

