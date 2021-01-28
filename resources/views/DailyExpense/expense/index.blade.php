@extends('layouts.master')

@section('content')

<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">Expense Management of {{$incomes->category}}  </h1>
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ url('/')}}"><i class="fas fa-home"></i></a></li>
    <li class="breadcrumb-item"><a href="{{ route('courses.index')}}">Students List</a></li>
  </ol>
</div>

<!-- Row -->

<div class="row">
          <div class="col-xl-6 offset-xl-3 col-sm-12 mb-3">
            <ul class="list-group">
                <li class="list-group-item bg-info text-center text-white">
                    <span> Total Cost for {{$incomes->category}} {{$incomes->amount}} Ks</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                     Total Income
                    <span class="badge badge-success badge-pill incomeValue">{{number_format($incomes->amount)}} Ks</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                   Total Expense
                    <span class="badge badge-danger badge-pill expenseValue">{{number_format($sum_expense)}} ks</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    Balance
                    <span class="badge badge-primary badge-pill">{{number_format($incomes->amount-$sum_expense)}} Ks</span>
                </li>
            </ul>
        </div>
  <div class="col-lg-12 mb-4">
     
      <div class="card">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">

          <a href="{{action('ExpenseController@downloadExpense',['id'=>$incomes->id])}}" class="btn btn-dark detail btn-sm mt-1" ><i class="fa fa-file-pdf fa-1x btn-danger"></i> Voucher</a>
          <a href="{{ route('expenses.create', ['id'=>$incomes->id])}}" class="btn btn-sm btn-primary">Create Expense</a>

        </div>
        <div class="table-responsive">

         <table class="table align-items-center table-flush" >
            <thead class="thead-light">
              <tr>
                <th scope="col" class="sort">No</th>
                <th scope="col" class="sort">Expense Category</th>
                <th scope="col" class="sort">Expense Description</th>
                <th scope="col" class="sort">Expense Amount</th>
                <th scope="col" class="sort">Expense Date</th>
                <th scope="col" class="sort">Action</th>
                
              
              </tr>
            </thead>
            <tbody>
              @php $i=1; @endphp
                  @foreach($incomes->expense as $row)
                    <tr>
                      <td>{{$i++}}</td>             
                      <td>{{$row->category}}</td>
                      <td>{{$row->description}}</td>
                      <td>{{$row->amount}}</td>
                      <td>{{ \Carbon\Carbon::parse($row->date)->format('d/M/Y')}}</td>
                       <td>
                       
                        

                        <a href="{{route('expenses.edit',$row->id)}}" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
                        
                        <form method="post" style="display: inline-block" action="{{route('expense.destroy',$row->id)}}" onsubmit="return confirm('Are you sure?')">
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                        </form>
                        
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


@endsection