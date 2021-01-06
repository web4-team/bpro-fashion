@extends('layouts.master')

@section('content')
<div class="row">
 <div class="col-sm-8 offset-sm-2">
  <h1 class="display-3">Update Course</h1>
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
    <form method="post" action="{{ route('item.update', $items->id) }}">
      @method ('PATCH')
      @csrf
      <div class="form-group">    
        <label for="name">Item Name:</label>
        <input type="text" class="form-control" name="name" value="{{$items->name}}" />
      </div>
     
      <div class="form-group">    
        <label for="name">Per Price:</label>
        <input type="number" class="form-control" name="price" value="{{$items->price}}" />
      </div>
      
      <div class="form-group">    
        <label for="name">Stock In:</label>
        <input type="number" class="form-control" name="stock_in" min="1" value="{{$items->stock_in}}" />
      </div>
      <div class="form-group">    
        <label for="name">Stock Out:</label>
        <input type="number" class="form-control" name="stock_out" min="1" value="{{$items->stock_out}}" />
      </div>
  

    <button type="submit" class="btn btn-primary">Save Changes</button>
  </form>
</div>
</div>
</div>


@endsection

