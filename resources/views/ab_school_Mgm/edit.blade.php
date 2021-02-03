@extends('artbotlayouts.master')

@section('content')
<div class="row">
 <div class="col-sm-8 offset-sm-2">
  <h1 class="display-3">Update Batch</h1>
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
    <form method="post" action="{{ route('ab_course.update', $ab_course->id) }}">
      @method ('PATCH')
      @csrf
      <div class="form-group">    
        <label for="ab_name">Course Name:</label>
        <input type="text" class="form-control" name="ab_name" value="{{$ab_course->ab_name}}" />
      </div>

            <div class="form-group">    
        <label for="ab_name">Course Type:</label>
         <select class="form-control" id="dis" name="ab_type">
         <option @if($ab_course->type == 'Online') selected @endif >Online           
         </option>
         <option @if($ab_course->type == 'Campus') selected @endif >Campus         
         </option>
          
       
       </select>
      </div>

      <div class="form-group">
        <label for="ab_fees">Fees:</label>
        <input type="number" class="form-control" name="ab_fees" value="{{$ab_course->ab_fees}}"/>
      </div>
      <div class="form-group">
        <label for="dis">Discount:</label>
        <select class="form-control" id="dis" name="ab_discount">
         <option @if($ab_course->ab_discount == 0) selected @endif >0            
         </option>
         <option @if($ab_course->ab_discount == 5) selected @endif >5          
         </option>
         <option @if($ab_course->ab_discount == 10) selected @endif>10        
         </option>
         <option @if($ab_course->ab_discount == 20) selected @endif >20         
         </option>

       </select>
     </div>
      <div class="form-group">
        <label for="ab_amount">Discount(amount):</label>
        <input type="number" class="form-control" name="ab_amount"  value="{{$ab_course->ab_amount}}" />
      </div>
     <div class="form-group">
      <label for="ab_date">Start Date:</label>
      <input name="ab_date" class="form-control" type="date" value="{{$ab_course->ab_date}}">
    </div>
    <div class="form-group">
      <label for="ab_duration">End Date:</label>
      <input type="date" class="form-control"  name="ab_duration" value="{{$ab_course->ab_duration}}"/>
    </div>
  

    <button type="submit" class="btn btn-primary">Save Changes</button>
  </form>
</div>
</div>
</div>


@endsection

