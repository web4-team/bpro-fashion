@extends('layouts.master')
@section('content')

    <div class="header pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <h3 class="h2 text-dark d-inline-block mb-0">Add New Item</h3>
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item"><a href="#">Item Lists</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Add Item</li>
                </ol>
              </nav>
            </div>
            <div class="col-lg-6 col-5 text-right">
              <a href="{{route('item.index')}}" class="btn btn-primary btn-sm">Back to Table</a>
              
            </div>
          </div>
        </div>
      </div>
    </div>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="row">
 <div class="col-sm-8 offset-sm-2">



  
    <form method="post" action="{{route('item.store') }}">
      @csrf
      {{-- <div class="form-group">
            <label for="date" class="text-dark">Date</label>
            <input type="date" class="form-control" name="date">
        </div> --}}
      <div class="form-group">    
        <label for="name">Item Name:</label>
        <input type="text" class="form-control" name="name" />
      </div>   
      
      
      {{-- <div class="form-group">    
        <label for="name">Quantity:</label>
        <input type="number" class="form-control" name="quantity" min="0" />
      </div>
      
      <div class="form-group">    
        <label for="name">Total</label>
        <input type="number" class="form-control" name="total" />
      </div>
      <div class="form-group">    
        <label for="name">Retail Price:</label>
        <input type="number" class="form-control" name="price" />
      </div>
        <div class="form-group">
          <label for="remark" class="text-dark">Remark</label>
          <textarea class="form-control text-dark" name="remark" rows="3"></textarea>
      </div> --}}


   
        


      

      <button type="submit" class="btn btn-primary">Save</button>
    </form>
</div>
</div>
@endsection