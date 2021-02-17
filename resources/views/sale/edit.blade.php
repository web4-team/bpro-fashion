@extends('layouts.master')

@section('content')
<div class="row">
 <div class="col-sm-8 offset-sm-2">
  <h4>Update Sales List of {{ $sale->item->name }}</h4>
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
    <label for="seeAnotherFieldGroup">Please Choose One</label>
    <select class="form-control" id="seeAnotherFieldGroup" name="choose" >
            <option @if($sale->choose == 'Customer') selected @endif >Customer          
         </option>
         <option @if($sale->choose == 'Supplier') selected @endif >Supplier         
         </option>
         <option @if($sale->choose == 'Opening Amount') selected @endif >Opening Amount        
         </option>
    </select>
  </div>
    <div class="form-group" id="otherFieldGroupDiv">
    <div class="row">
       <div class="col-12">
        <label for="otherField1">Supplier Name</label>
        <input type="text" class="form-control w-100" id="otherField1" name="supplier" value="{{$sale->supplier_name}}" >
      </div>
      <div class="col-6">
        <label for="otherField1">Stock In</label>
        <input type="number" class="form-control w-100" id="otherField1" name="stock_in" value="{{$sale->stock_in}}" >

      </div>
      <div class="col-6">
        <label for="otherField2">Cash Out</label>
        <input type="number" class="form-control w-100" id="otherField2" name="in_total" value="{{$sale->in_total}}" >
      </div>

    </div>
  </div>
  <div class="form-group" id="FieldGroupDiv">
        <label for="commission">Customer Name:</label>
        <input type="text" class="form-control" name="customer" id="otherField1" value="{{$sale->customer_name}}" />
      
      <div class="form-group">
        <label for="commission">Stock Out:</label>
        <input type="number" class="form-control" name="stock_out" id="otherField2" value="{{$sale->stock_out}}" />
      </div>
      <div class="form-group">

        <label for="overtime">Cash In</label>

        <input type="number" class="form-control" name="per_price" value="{{$sale->per_price}}" />
      </div>
    </div> 
        <div class="form-group" id="GroupDiv">
      
      
      <div class="form-group">
        <label for="commission">Opening Amount:</label>
        <input type="number" class="form-control" name="open" value="{{$sale->open_amount}}" />
      </div>
      
    </div> 
     
     
      
     

      <button type="submit" class="btn btn-primary">Change</button>
  </form>
</div>
</div>
</div>


@endsection
