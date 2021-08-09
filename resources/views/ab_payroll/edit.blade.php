@extends('artbotlayouts.master')

@section('content')
<div class="row">
 <div class="col-sm-8 offset-sm-2">
  <h1 class="display-3">Update Payroll : {{ $payroll->employee->name }}</h1>
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
    <form method="post" action="{{ route('ab_payrolls.update',['id'=>$payroll->id])}}">
      @method ('PATCH')
      @csrf
      <div class="form-group">    
        <label for="name">Date-issued:</label>
        <input type="date" class="form-control" name="date" value="{{$payroll->date}}" />
      </div>
      <div class="form-group">
        <label for="commission">Basic Salary:</label>
        <input type="number" class="form-control" name="salary" value="{{$payroll->salary}}"/>
      </div>
      <div class="form-group">
        <label for="commission">Commission:</label>
        <input type="number" class="form-control" name="commission" value="{{$payroll->commission}}" />
      </div>
      <div class="form-group">
        <label for="commission">Bonus:</label>
        <input type="number" class="form-control" name="bonus" value="{{$payroll->bonus}}" />
      </div>
      <div class="form-group">
        <label for="overtime">Overtime:</label>
        <input type="number" class="form-control" name="overtime" value="{{$payroll->overtime}}" />
      </div>
      <div class="form-group">
        <label for="leave">Leave:</label>
        <input type="number" class="form-control" name="leave" value="{{$payroll->leave}}" />
      </div>
      <div class="form-group">
        <label for="late">Late:</label>
        <input type="number" class="form-control" name="late" value="{{$payroll->late}}" />
      </div>
     
         

     
   
  

    <button type="submit" class="btn btn-primary">Save Changes</button>
  </form>
</div>
</div>
</div>


@endsection

