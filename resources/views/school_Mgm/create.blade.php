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
              <label for="first_name">Course Name:</label>
              <input type="text" class="form-control" name="name"/>
          </div>

          <div class="form-group">
              <label for="email">Fees:</label>
              <input type="number" class="form-control" name="fees"/>
          </div>
          <div class="form-group">
              <label for="city">Discount:</label>
              <input type="number" class="form-control" name="discount"/>
          </div>
          <div class="form-group">
              <label for="country">Duration:</label>
              <input type="text" class="form-control" name="duration"/>
          </div>
                               
          <button type="submit" class="btn btn-primary">Add Course</button>
      </form>
  </div>
</div>
</div>
@endsection