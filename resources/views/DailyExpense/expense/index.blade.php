@extends('layouts.master')
@section('content')
@include('datatable.style')
<div class="header pb-6">
  <div class="container-fluid">
    <div class="header-body">
      <div class="row align-items-center py-4">
        <div class="col-lg-6 col-7">
          <h3 class="h2 text-dark d-inline-block mb-0">Expense Management</h3>
          <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
              <li class="breadcrumb-item"><a href="/home"><i class="fas fa-home"></i></a></li>
              <li class="breadcrumb-item"><a href="/income">Back</a></li>
             
            </ol>
          </nav>
        </div>

      </div>
    </div>
  </div>
</div>
<div class="row">

<div class="col-sm-12">

        <div>
    <a style="margin: 19px;" href="{{ route('expense.create',['id'=>$income->id])}}" class="btn btn-primary float-right">New Expense</a>
    </div>

    <div class="col-xl-6 offset-xl-3 col-sm-12 mb-3 card" style="padding:20px;">
    <form action="{{route('expense.search',['id' => $income->id])}}" method="POST">
          @csrf
        <div class="row mb-4">

     <div class="col-md-5">
        <input type="date" class="form-control" name="fromdate" id="date" required  />
    </div>
    <div class="col-md-5">
        <input type="date" class="form-control" name="todate" required />
    </div>
    <div class="col-md-2">
        <input type="submit" name="search" class="btn btn-success" value="Filter" />
    </div>
    </div>
    </form>
       <ul class="list-group">
                <li class="list-group-item bg-info text-center text-white">
                    <span> Summary For all</span>
                </li>
                 @php $given_total=0 @endphp
                 @php $amount_total=0 @endphp
                 @foreach($exps as $row)
                 @php $given_total +=  $row->given; 
                  $amount_total += $row->amount;
                  @endphp
                @endforeach
            
                <li class="list-group-item d-flex justify-content-between align-items-center">
                     Total Amount Received 
                    <span class="badge badge-success badge-pill incomeValue">{{$given_total}} Ks</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                   Total Amount Paid
                    <span class="badge badge-danger badge-pill expenseValue"> {{$amount_total}} ks</span>
                </li>               
                
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    Difference
                    <span class="badge badge-primary badge-pill">{{$given_total-$amount_total}} Ks</span>
                </li>
            </ul>

        </div>   
  <table class="table table-striped hover" id="exp">
    <thead>
        <tr>
          <th>No</th>
          <th>Expense Name</th>
          <th>Category</th>
          <th>Amount received</th>
          <th>Amount Paid</th>
          <th>Date</th>
          <th>Actions</th>
        </tr>
    </thead>
    <tbody>
    	@php $i=1; @endphp
        @foreach($exps as $row)
        <tr>
            <td>{{$i++}}</td>
            <td>{{$row->description}}</td>
            <td>{{$row->cate->category_name}}</td>
            <td>{{$row->given}}</td>
            <td>{{$row->amount}}</td>
            <td>{{ \Carbon\Carbon::parse($row->date)->format('d/M/Y')}}</td>
            <td>
              <div class="btn-group">
                
            

              <a href="{{route('expense.edit',$row->id)}}" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
                <form action="{{ route('expense.destroy', $row->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit"><i class="fa fa-trash"></i></button>
                </form>
              </div>
            </td>
        </tr>
        @endforeach
    </tbody>

    <tfoot>
      <tr>
          <th colspan="1"   style="text-align:right"></th>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
         
          
          
      </tr>
  </tfoot>

  </table>
<div>
</div>


@endsection
@section('scripts')
@include('datatable.script')
  <!-- Page level custom scripts -->
  <script src="{{ asset('backend/js/demo/expense.js') }}"></script>
  
@endsection