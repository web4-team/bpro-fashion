@extends('layouts.master')
@section('content')
<div class="row">
 <div class="col-sm-8 offset-sm-2">
  <h1 class="display-3">Create Your Course</h1>
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
        <label for="name">Course Name:</label>
        <input type="text" class="form-control" name="name"/>

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
        <label for="date">Starting Date:</label>
        <input name="date" id="date" class="form-control" type="date">
      </div>
      <div class="form-group">
        <label for="duration">Duration:</label>
        <input type="text" class="form-control" name="duration"/>
      </div>

      <button type="submit" class="btn btn-primary">Add Course</button>
    </form>
  </div>
</div>
</div>
@endsection