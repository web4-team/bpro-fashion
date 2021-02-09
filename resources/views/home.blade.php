@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row">
        <!-- Total Count -->
        <div class="col-lg-12">
          <div class="card sm mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
              <h6 class="m-0 font-weight-bold text-primary">B-Pro Fashion {{ __('Dashboard') }}</h6>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-lg-4 mb-4">
                  <div class="card bg-gradient-primary text-white">
                    <div class="card-body">
                      Total Student
                      <div class="text-white-50 small"><a style="text-decoration:none;color:#fff;" href="{{ url('/students') }}">{{$student}}</a></div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 mb-4">
                  <div class="card bg-gradient-success text-white">
                    <div class="card-body">
                      Total Batch
                      <div class="text-white-50 small">{{$course}}</div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 mb-4">
                  <div class="card bg-gradient-info text-white">
                    <div class="card-body">
                      Total Course
                      <div class="text-white-50 small">{{$batch}}</div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 mb-4">
                  <div class="card bg-gradient-warning text-white">
                    <div class="card-body">
                      Total Item
                      <div class="text-white-50 small">{{$item}}</div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 mb-4">
                  <div class="card bg-gradient-danger text-white">
                    <div class="card-body">
                      Total Employee
                      <div class="text-white-50 small">{{$employee}}</div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 mb-4">
                  <div class="card bg-gradient-secondary text-white">
                    <div class="card-body">
                      Total User
                      <div class="text-white-50 small">{{$user}}</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>

    @can('manage.users')
    <div class="row">
        <!-- Report -->
         <!-- Area Chart -->
                   
          <!-- Course Fees -->
          <div class="col-xl-4 col-lg-5">
            <div class="card mb-4">
              <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class=" font-weight-bold text-primary text-center">Summary Of Course Fees</h6>
              </div>
              <div class="card-body">
                 @php $stu_total=0 @endphp
                  @php     $first=0   @endphp
                  @php     $second=0   @endphp
                  @foreach($students as $row)
                    @php $stu_total +=  $row->course->fees;
                       $first += $row->first_paid;
                       $second += $row->second_paid;
                    @endphp
                  @endforeach
                <div class="mb-4">
                  <div class="medium text-gray-500">Total Course Fee
                    <div class="medium float-right"><b>{{$stu_total}} Ks</b></div>
                  </div>
                </div>
                <div class="mb-4">
                 <div class="medium text-gray-500">Total First Amount
                    <div class="medium float-right"><b>{{$first}} Ks</b></div>
                  </div>
                </div>
                <div class="mb-4">
                  <div class="medium text-gray-500">Total Second Amount
                    <div class="medium float-right"><b>{{$second}} Ks</b></div>
                  </div>
                </div>
                <div class="mb-4">
                  <div class="medium text-gray-500">Due
                    <div class="medium float-right"><b>{{$stu_total-$first}} Ks</b></div>
                  </div>
                </div>
                <br><br>
              </div>
            </div>
          </div>
                    <div class="col-xl-6 offset-xl-3 col-sm-12 mb-3">
                              <form action="{{route('home.search')}}" method="POST">
          @csrf
<div class="row mb-4">

     <div class="col-md-5">
        <input type="date" class="form-control" name="fromdate" id="date"  />
    </div>
    <div class="col-md-5">
        <input type="date" class="form-control" name="todate" />
    </div>
    <div class="col-md-2">
        <input type="submit" name="search" class="btn btn-success" value="Filter" />
    </div>
</div>
</form>
            <ul class="list-group">
                <li class="list-group-item bg-info text-center text-white">
                    <span> Profit/Loss of B-Pro Fashion</span>
                </li>
                @php $sum_total=0 @endphp
                @foreach($sale_total as $row)
                  @php $sum_total +=  $row->stock_out*$row->per_price; @endphp
                @endforeach


                @php $stu_total=0 @endphp
                @foreach($stu as $row)
                  @php $stu_total +=  $row->course->fees; @endphp
                @endforeach
                <li class="list-group-item d-flex justify-content-between align-items-center">
                     Total Course Fee
                    <span class="badge badge-success badge-pill incomeValue">{{$stu_total}} Ks</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                   Sell Items
                    <span class="badge badge-success badge-pill expenseValue"> {{$sum_total}} ks</span>
                </li>
                
                @php $item_total=0 @endphp
                @foreach($sale_total as $row)
                @php $item_total += $row->in_total; @endphp
                @endforeach
                <li class="list-group-item d-flex justify-content-between align-items-center">
                         
                Buy Items
                <span class="badge badge-danger badge-pill expenseValue">{{$item_total}} Ks</span>                
                </li>
                @php $salary=0 @endphp
                @foreach($payroll as $row)
                @php $salary += ($row->salary+$row->commission+$row->bonus+$row->overtime)-($row->leave+$row->late); @endphp
                @endforeach


                 <li class="list-group-item d-flex justify-content-between align-items-center">
                   All Salary
                    <span class="badge badge-danger badge-pill expenseValue"> {{$salary}} ks</span>
                </li>
                
               
               

            
                
                 <li class="list-group-item d-flex justify-content-between align-items-center">
                   >>>
                    <span class="badge badge-danger badge-pill expenseValue">Total Expense  {{$item_total}} ks</span>
                </li>

                
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    Profit/Loss 
                    <span class="badge badge-primary badge-pill">{{($sum_total+$stu_total)-$item_total}} Ks</span>
                </li>
            </ul>
        </div>
    </div>
 
</div>
@endsection

