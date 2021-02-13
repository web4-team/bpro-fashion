@extends('layouts.master')
@section('content')
@include('datatable.style')

<div class="row">
  <div class="col-sm-12">



</div>
<div class="col-sm-12">
    <h2 class="display-3">Expense Management</h2> 
        <div>
    <a style="margin: 19px;" href="{{ route('expense.create')}}" class="btn btn-primary float-right">New Expense</a>
    </div>

    <div class="col-xl-6 offset-xl-3 col-sm-12 mb-3">
    <form action="{{route('expense.search')}}" method="POST">
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
                     Given Amount Total
                    <span class="badge badge-success badge-pill incomeValue">{{$given_total}} Ks</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                   Expense Amount Total
                    <span class="badge badge-danger badge-pill expenseValue"> {{$amount_total}} ks</span>
                </li>               
                
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    Difference
                    <span class="badge badge-primary badge-pill">{{$given_total-$amount_total}} Ks</span>
                </li>
            </ul>
</div>   
  <table class="table table-striped" id="exp">
    <thead>
        <tr>
          <th>No</th>
          <th>Category Name</th>
          <th>Description</th>
          <th>Expense Amount</th>
          <th>Given Amount</th>
          <th>Date</th>

          
        
         

          
          <th>Actions</th>
        </tr>
    </thead>
    <tbody>
    	@php $i=1; @endphp
        @foreach($exps as $row)
        <tr>
            <td>{{$i++}}</td>
            <td>{{$row->income->category}}</td>
            <td>{{$row->description}}</td>
            <td>{{$row->amount}}</td>
            <td>{{$row->given}}</td>
            <td>{{$row->date}}</td>
            
            
           

           
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