@extends('artbotlayouts.master')
@section('content')
<div class="header pb-6">
  <div class="container-fluid">
    <div class="header-body">
      <div class="row align-items-center py-4">
        <div class="col-lg-6 col-7">
          <h3 class="h2 text-dark d-inline-block mb-0">Accounting</h3>
          <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
              <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
              <li class="breadcrumb-item"><a href="#">Lists</a></li>
             
            </ol>
          </nav>
        </div>

      </div>
    </div>
  </div>
</div>
<div class="col-sm-12">
 
        <div>
    <a style="margin: 19px;" href="{{ route('ab_income.create')}}" class="btn btn-primary float-right">New Category</a>
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



              <a href="{{ route('ab_income.edit',$row->id)}}" class="btn btn-primary btn btn-sm"><i class="fas fa-edit"></i></a>
            <form action="{{ route('ab_income.destroy', $row->id)}}" method="post" onsubmit="return confirm('Are you sure?')">

              @csrf
              @method('DELETE')
              <button class="btn btn-danger btn btn-sm mx-1" type="submit"><i class="fa fa-trash"></i></button>
            </form>
             <a href="{{ route('ab_expense.show', $row->id) }}" data-toggle="tooltip" title="SaleList" class="btn btn-success btn btn-sm"><i class="fas fa-calculator"></i></a>
          </div>
        </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
</div>


@endsection