@extends('artbotlayouts.master')	

@section('content')
@include('datatable.style')
<link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Employee Payroll Report</h1>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{ url('/home')}}"><i class="fas fa-home"></i></a></li>
      <li class="breadcrumb-item"><a href="">Report Lists</a></li>
    </ol>
  </div>

  <div class="row">
    <div class="col-lg-12 mb-4">
       
        <div class="card">
          <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          
          
          </div>
          <div class="table-responsive">
            <table class="table align-items-center table-flush" id="rep">
              <thead class="thead-light">
                <tr>
                
                  <th scope="col" class="sort">No.</th>
                  <th scope="col" class="sort">Employee Name</th>
                  <th scope="col" class="sort">Date-issued</th>
                  <th scope="col" class="sort">Salary</th>                
                  <th scope="col" class="sort">Commission</th>
                  <th scope="col" class="sort">Bonus</th>
                  <th scope="col" class="sort">Overtime</th>
                  <th scope="col" class="sort">Leave</th>
                  <th scope="col" class="sort">Late</th>            
                  <th scope="col" class="sort">Total</th>            
         
                </tr>
              </thead>

              <tbody>
                @php $i=1; @endphp
                @if($payrolls->count()> 0)
                  @foreach($payrolls as $payroll)
                    <tr>		
                        <td>{{$i++}}</td>
                        <td>{{ $payroll->employee->first_name }} {{ $payroll->employee->last_name }}</td>
                  <td>{{ \Carbon\Carbon::parse($payroll->date)->format('Y/M/d')}}</td>
                     
                      <td>{{ $payroll->salary }}</td>
                      <td>{{ $payroll->commission }}</td>
                      <td>{{ $payroll->bonus }}</td>
                      <td>{{ $payroll->overtime }}</td>
                      <td>{{ $payroll->leave }}</td>
                      <td>{{ $payroll->late }}</td>
                      <td>{{($payroll->salary+$payroll->commission+$payroll->bonus+$payroll->overtime)-($payroll->leave+$payroll->late) }}</td>
                    </tr>
                  @endforeach
              
                @endif
              </tbody>
              <tfoot>
                <tr>
                    <th colspan="1"   style="text-align:right"></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
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
  <script src="{{ asset('backend/js/demo/report.js') }}"></script>
  
@endsection