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
    <form method="post" action="{{ route('batch.store') }}">
      @csrf
      
      <div class="form-group">    
        <label for="name">Batch Name:</label>
        <input type="text" class="form-control" name="name" />
      </div>
            <div class="form-group">    
        <label for="name">Course Name</label>
        
        <select class="form-control" name="course">
          <optgroup label="Choose Course">
            @foreach($courses as $row)
            <option value="{{$row->id}}">{{$row->name}}</option>
            @endforeach
          </optgroup>
        </select>
        
      </div>

      

      <button type="submit" class="btn btn-primary">Add Batch</button>
    </form>
  </div>
</div>
</div>
@endsection