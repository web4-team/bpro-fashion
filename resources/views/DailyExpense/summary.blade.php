@extends('layouts.master')
@section('style')
  <!-- Custom styles for this page -->
  <link href="{{asset('backend/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
@endsection
@section('content')

<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">Income/Expense Management</h1>
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ url('/')}}"><i class="fas fa-home"></i></a></li>
    <li class="breadcrumb-item"><a href="{{ url('/courses')}}">Courses</a></li>
  </ol>
</div>

<div class="row">
        <div class="col-xl-6 offset-xl-3 col-sm-12 mb-3">
            <ul class="list-group">
                <li class="list-group-item bg-info text-center text-white">
                    <span>Today Total Cost</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    Today Total Income
                    <span class="badge badge-success badge-pill incomeValue">{{$sum_income}}</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    Today Total Expense
                    <span class="badge badge-danger badge-pill expenseValue">{{$sum_expense}}</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    Balance
                    <span class="badge badge-primary badge-pill">{{$balance}}</span>
                </li>
            </ul>
        </div>

<div class="row">
  <div class="col-lg-6 mb-4">
     
      <div class="card">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-success">Income</h6>
          <a href="{{ route('income.create')}}" class="btn btn-sm btn-primary">New Income</a>
        </div>
        <div class="table-responsive">
          <table class="table align-items-center table-flush" id="dataTable">
            <thead class="thead-light">
              <tr>
                <th scope="col" class="sort">No</th>
                <th scope="col" class="sort">Income Category</th>
                <th scope="col" class="sort">Income Amount</th>
                <th scope="col" class="sort">Income Date</th>
                
              
              </tr>
            </thead>
            <tbody>
              @php $i=1; @endphp
                  @foreach($incomes as $row)
                    <tr>
                      <td>{{$i++}}</td>             
                      <td>{{$row->category}}</td>
                      <td>{{$row->amount}}</td>
                      <td>{{$row->date}}</td>
                      
                     
                    </tr>
                  @endforeach
            </tbody>
          </table>
        </div>
        <div class="card-footer"></div>
      </div>
    </div>
      <div class="col-lg-6 mb-4">
     
      <div class="card">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-danger">Expense</h6>
          <a href="{{ route('expense.create')}}" class="btn btn-sm btn-primary">New Expense</a>
        </div>
        <div class="table-responsive">
          <table class="table align-items-center table-flush" id="dataTable">
            <thead class="thead-light">
              <tr>
                <th scope="col" class="sort">No</th>
                <th scope="col" class="sort">Expense Category</th>
                <th scope="col" class="sort">Expense Amount</th>
                <th scope="col" class="sort">Expense Date</th>
                
              
              </tr>
            </thead>
            <tbody>
              @php $i=1; @endphp
                  @foreach($expenses as $row)
                    <tr>
                      <td>{{$i++}}</td>             
                      <td>{{$row->category}}</td>
                      <td>{{$row->amount}}</td>
                      <td>{{$row->date}}</td>
                      
                     
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