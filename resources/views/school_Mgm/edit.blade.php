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
    <form method="post" action="{{ route('courses.update', $course->id) }}">
      @method ('PATCH')
      @csrf
      <div class="form-group">    
        <label for="name">Course Name:</label>
        <input type="text" class="form-control" name="name" value="{{$course->name}}" />
      </div>

            <div class="form-group">    
        <label for="name">Course Type:</label>
         <select class="form-control" id="dis" name="type">
         <option @if($course->type == 'Online') selected @endif >Online           
         </option>
         <option @if($course->type == 'Campus') selected @endif >Campus         
         </option>
          
       
       </select>
      </div>

      <div class="form-group">
        <label for="fees">Fees:</label>
        <input type="number" class="form-control" name="fees" value="{{$course->fees}}"/>
      </div>
      <div class="form-group">
        <label for="dis">Discount:</label>
        <select class="form-control" id="dis" name="discount">
         <option @if($course->discount == 0) selected @endif >0            
         </option>
         <option @if($course->discount == 5) selected @endif >5          
         </option>
         <option @if($course->discount == 10) selected @endif>10        
         </option>
         <option @if($course->discount == 20) selected @endif >20         
         </option>

       </select>
     </div>
     <div class="form-group">
      <label for="date">Start Date:</label>
      <input name="date" class="form-control" type="date" value="{{$course->date}}">
    </div>
    <div class="form-group">
      <label for="duration">End Date:</label>
      <input type="date" class="form-control" name="duration" value="{{$course->duration}}"/>
    </div>

    <button type="submit" class="btn btn-primary">Save Changes</button>
  </form>
</div>
</div>
</div>
@endsection