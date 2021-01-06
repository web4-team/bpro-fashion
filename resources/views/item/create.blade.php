@extends('layouts.master')
@section('content')
<div class="row">
 <div class="col-sm-8 offset-sm-2">


  <h1 class="display-3">Create Your Items</h1>
  
    <form method="post" action="{{ route('item.store') }}">
      @csrf
      
      <div class="form-group">    
        <label for="name">Item Name:</label>
        <input type="text" class="form-control" name="name" />
      </div>
     
      <div class="form-group">    
        <label for="name">Per Price:</label>
        <input type="number" class="form-control" name="price" />
      </div>
      
      <div class="form-group">    
        <label for="name">Stock In:</label>
        <input type="number" class="form-control" name="stock_in" min="1" />
      </div>
      <div class="form-group">    
        <label for="name">Stock Out:</label>
        <input type="number" class="form-control" name="stock_out" min="1" />
      </div>
   
        


      

      <button type="submit" class="btn btn-primary">Add Item</button>
    </form>
      </div>
</div>
</div>
@endsection