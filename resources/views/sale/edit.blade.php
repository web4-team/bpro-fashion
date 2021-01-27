@extends('layouts.master')

@section('content')
<div class="row">
 <div class="col-sm-8 offset-sm-2">
  <h3 class="display-3">Update Sales List of {{ $sale->item->name }}</h3>
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
    <form method="post" action="{{ route('sales.update',['id'=>$sale->id])}}">
      @method ('PATCH')
      @csrf
      <div class="form-group">    
        <label for="date">Sale Date:</label>
        <input type="date" class="form-control" name="date" value="{{$sale->date}}" />

      </div>

      <div class="form-group">
        <label for="commission">Customer Name:</label>
        <input type="text" class="form-control" name="customer_name" value="{{$sale->customer_name}}"/>
      </div>
      <div class="form-group">
        <label for="commission">Stock Out:</label>
        <input type="number" class="form-control" name="stock_out" value="{{$sale->stock_out}}"/>
      </div>
      <div class="form-group">
        <label for="overtime">Per Price:</label>
        <input type="number" class="form-control" name="per_price" value="{{$sale->per_price}}"/>
      </div>
     
     
     
      
     

      <button type="submit" class="btn btn-primary">Change</button>
  </form>
</div>
</div>
</div>


@endsection

