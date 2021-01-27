@extends('layouts.master')
@section('content')

<div class="header pb-6">
    <div class="container-fluid">
      <div class="header-body">
        <div class="row align-items-center py-4">
          <div class="col-lg-6 col-7">
            <h3 class="h2 text-dark d-inline-block mb-0">Create Sale Lists</h3>
            <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
              <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                <li class="breadcrumb-item"><a href="#">Sale Lists</a></li>
                <li class="breadcrumb-item active" aria-current="page">Create Sale Lists</li>
              </ol>
            </nav>
          </div>
          <div class="col-lg-6 col-5 text-right">
            <a href="{{ route('sales.show', ['id' => $item->id]) }}" class="btn btn-primary btn-sm">Back to Table</a>
            
          </div>
        </div>
      </div>
    </div>
  </div>
<div class="row">
 <div class="col-sm-8 offset-sm-2">
 
  <div>
    @if ($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div><br />
    @endif
    <form method="post" action="{{ route('sales.store',['id'=>$item->id])}}">
      @csrf
      <div class="form-group">    
        <label for="date">Sale Date:</label>
        <input type="date" class="form-control" name="date"/>

      </div>

      <div class="form-group">
        <label for="commission">Customer Name:</label>
        <input type="text" class="form-control" name="customer_name"/>
      </div>
      <div class="form-group">
        <label for="commission">Stock Out:</label>
        <input type="number" class="form-control" name="stock_out"/>
      </div>
      <div class="form-group">
        <label for="overtime">Per Price:</label>
        <input type="number" class="form-control" name="per_price"/>
      </div>
     
     
     
      
     

      <button type="submit" class="btn btn-primary">Save</button>
    </form>
  </div>
</div>
</div>
@endsection