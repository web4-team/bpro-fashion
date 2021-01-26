@extends('layouts.master')
@section('content')
<div class="row">
 <div class="col-sm-8 offset-sm-2">


  <h1 class="display-3">Create Your Item Lists</h1>
  
    <form method="post" action="{{ route('item.store') }}">
      @csrf
      <div class="form-group">
            <label for="date" class="text-dark">Date</label>
            <input type="date" class="form-control" name="date">
        </div>
      <div class="form-group">    
        <label for="name">Item Name:</label>
        <input type="text" class="form-control" name="name" />
      </div>
     
      <div class="form-group">    
        <label for="name">Per Price:</label>
        <input type="number" class="form-control" name="price" />
      </div>
      
      <div class="form-group">    
        <label for="name">Quantity:</label>
        <input type="number" class="form-control" name="quantity" min="0" />
      </div>
      <div class="form-group">    
        <label for="name">Customer Name:</label>
        <input type="text" class="form-control" name="customer" />
      </div>
      <div class="form-group">    
        <label for="name">Paid Amount</label>
        <input type="number" class="form-control" name="paid" />
      </div>
      <div class="form-group">
            <label for="date" class="text-dark">Due Date</label>
            <input type="date" class="form-control" name="due_date">
        </div>
        <div class="form-group">
          <label for="remark" class="text-dark">Remark</label>
          <textarea class="form-control text-dark" name="remark" rows="3"></textarea>
      </div>


   
        


      

      <button type="submit" class="btn btn-primary">Save</button>
    </form>
</div>

@endsection