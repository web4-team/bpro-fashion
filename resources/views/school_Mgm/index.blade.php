@extends('layouts.master')
@section('content')
<div class="row">
  <div class="col-sm-12">

  @if(session()->get('success'))
    <div class="alert alert-success fade-message">
      {{ session()->get('success') }}  
    </div>
        <script>
    $(function(){
        setTimeout(function() {
            $('.fade-message').slideUp();
        }, 5000);
    });
    </script>
  @endif

<!--   @if(Session::has('success'))
  <script type="text/javascript">
     swal({
         title:'Success!',
         text:"{{Session::get('success')}}",
         timer:5000,
         type:'success'
     }).then((value) => {
       //location.reload();
     }).catch(swal.noop);
 </script>
 @endif -->
</div>
<div class="col-sm-12">
    <h2 class="display-3">Courses</h2> 
        <div>
    <a style="margin: 19px;" href="{{ route('courses.create')}}" class="btn btn-primary">New course</a>
    </div>     
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Course Name</td>
          <td>Batch No</td>
          <td>Fees</td>
          <td>Discount</td>
          <td>Total Fees</td>
          <td>Starting Date</td>
          <td>Duration</td>

          
          <td colspan = 2>Actions</td>
        </tr>
    </thead>
    <tbody>
        @foreach($courses as $course)
        <tr>
            <td>{{$course->id}}</td>
            <td>{{$course->name}}</td>
            <td>{{$course->batch}}</td>
            <td>{{number_format($course->fees)}} MMK</td>
            <td>{{$course->discount}}%</td>
            <td>{{number_format($course->fees-($course->fees*$course->discount/100))}} MMK</td>
            <td>{{ \Carbon\Carbon::parse($course->date)->format('d/M/Y')}}</td>
            <td>{{$course->duration}}</td>

           
            <td>
              <div class="btn-group">
                <a href="{{ route('courses.edit',$course->id)}}" class="btn btn-primary"><i class="fa fa-edit"></I></a>
            

            
                <form action="{{ route('courses.destroy', $course->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit"><i class="fa fa-trash"></i></button>
                </form>
              </div>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
</div>



@endsection