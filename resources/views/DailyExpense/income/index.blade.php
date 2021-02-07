@extends('layouts.master')
@section('content')
<div class="row">
  <div class="col-sm-12">



</div>
<div class="col-sm-12">
    <h2 class="display-3">Expense Category</h2> 
        <div>
    <a style="margin: 19px;" href="{{ route('income.create')}}" class="btn btn-primary float-right">New Category</a>
    </div>     
  <table class="table table-striped">
    <thead>
        <tr>
          <td>No</td>
          <td>Category Name</td>
          <td>Create At</td>
          
        
         

          
          <td colspan = 2>Actions</td>
        </tr>
    </thead>
    <tbody>
    	@php $i=1; @endphp
        @foreach($incomes as $row)
        <tr>
            <td>{{$i++}}</td>
            <td>{{$row->category}}</td>
            <td>{{$row->created_at}}</td>
            
            
           

           
            <td>
              <div class="btn-group">
                
            

            
                <form action="{{ route('income.destroy', $row->id)}}" method="post">
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