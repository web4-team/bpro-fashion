@extends('layouts.master')
@section('content')
<div class="row">
 <div class="col-sm-8 offset-sm-2">
  <h1 class="display-3">Create Your Batch</h1>
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
    <form method="post" action="{{ route('courses.store') }}">
      @csrf
      <div class="form-group">    
        <label for="name">Batch no:</label>
        <input type="text" class="form-control" name="name"/>

      </div>
      <div class="form-group">
        <label for="discount">Course Name:</label>
        <select class="form-control" name="batch_id">
          <optgroup label="Choose Course">
            @foreach($batches as $row)
            <option value="{{$row->id}}">{{$row->name}}</option>
            @endforeach
          </optgroup>
        </select>
      </div>

            <div class="form-group">
        <label for="discount">Course Type:</label>
        <select class="form-control" name="type" >
          <option >Online</option>
          <option >Campus</option>
          
        </select>
      </div>

      <div class="form-group">
        <label for="fees">Fees(MMK):</label>
        <input type="number" class="form-control" name="fees"/>
      </div>
      <div class="form-group">
        <label for="discount">Discount(%):</label>
        <select class="form-control" name="discount" >
          <option >0</option>
          <option >5</option>
          <option >10</option>
          <option >20</option>
        </select>
      </div>
       <div class="form-group">
        <label for="fees">Discount(amount):</label>
        <input type="number" class="form-control" name="amount" min="0" value="0" />
      </div>
      <div class="form-group">
        <label for="date">Start Date:</label>
        <input name="date" id="date" class="form-control" type="date">
      </div>
      <div class="form-group">
        <label for="duration">End Date:</label>
        <input type="date" id="date" class="form-control" name="duration"/>
      </div>

      <button type="submit" class="btn btn-primary">Add Course</button>
    </form>
  </div>
</div>
</div>
@endsection