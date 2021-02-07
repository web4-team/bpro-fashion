@extends('layouts.master')
@section('content')
<div class="row">
  <div class="col-sm-12">



</div>
<div class="col-sm-12">
    <h2 class="display-3">Expense Management</h2> 
        <div>
    <a style="margin: 19px;" href="{{ route('expense.create')}}" class="btn btn-primary float-right">New Expense</a>
    </div>     
  <table class="table table-striped">
    <thead>
        <tr>
          <td>No</td>
          <td>Category Name</td>
          <td>Description</td>
          <td>EXpense Amount</td>
          <td>Given Amount</td>
          <td>Date</td>

          
        
         

          
          <td colspan = 2>Actions</td>
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
  </table>
<div>
</div>


@endsection