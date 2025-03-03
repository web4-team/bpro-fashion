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
    <form method="post" action="{{ route('batch.update', $batch->id) }}">
      @method ('PATCH')
      @csrf
      <div class="form-group">    
        <label for="name">Course Name:</label>
        <input type="text" class="form-control" name="name" value="{{$batch->name}}" />
      </div>
  

    <button type="submit" class="btn btn-primary">Save Changes</button>
  </form>
</div>
</div>
</div>


@endsection

