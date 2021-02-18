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
    <label for="seeAnotherFieldGroup">Please Choose One</label>
    <select class="form-control" id="seeAnotherFieldGroup" name="choose">
          <option value="Customer">Customer</option>
          <option value="Supplier">Supplier</option>
          <option value="Opening Amount">Opening Amount</option>
    </select>
  </div>
    <div class="form-group" id="otherFieldGroupDiv">
    <div class="row">
       <div class="col-12">
        <label for="otherField1">Supplier Name</label>
        <input type="text" class="form-control w-100" id="otherField1" name="supplier">
      </div>
      <div class="col-6">
        <label for="otherField1">Stock In</label>
        <input type="number" class="form-control w-100" id="otherField1" name="stock_in">
      </div>
      <div class="col-6">
        <label for="otherField2">Cash Out</label>
        <input type="number" class="form-control w-100" id="otherField2" name="in_total">
      </div>
    </div>
  </div>
  <div class="form-group" id="FieldGroupDiv">
        <label for="commission">Customer Name:</label>
        <input type="text" class="form-control" name="customer" id="otherField1"/>
      
      <div class="form-group">
        <label for="commission">Stock Out:</label>
        <input type="number" class="form-control" name="stock_out" id="otherField2"/>
      </div>
      <div class="form-group">
        <label for="overtime">Cash In:</label>
        <input type="number" class="form-control" name="per_price"/>
      </div>
    </div> 
      <div class="form-group" id="GroupDiv">
      
      
      <div class="form-group">
        <label for="commission">Opening Amount:</label>
        <input type="number" class="form-control" name="open" value="0" />
      </div>
      
    </div> 
     
     
      
     

      <button type="submit" class="btn btn-primary">Save</button>
    </form>
  </div>
</div>
</div>
@endsection

@section('scripts')
<script type="text/javascript">
$("#seeAnotherFieldGroup").change(function() {
  if ($(this).val() == "Supplier") {
    $('#otherFieldGroupDiv').show();
   $('#GroupDiv').hide();
    $('#FieldGroupDiv').hide();
  } else if ($(this).val() == "Customer") {
    $('#otherFieldGroupDiv').hide();
    $('#GroupDiv').hide();
    
    $('#FieldGroupDiv').show();
  } 
  else {
    $('#GroupDiv').show();
    $('#FieldGroupDiv').hide();
    $('#otherFieldGroupDiv').hide();

  }
});
$("#seeAnotherFieldGroup").trigger("change");
</script>
@endsection