@extends('layouts.master')
@section('content')
<div class="row">
  <div class="col-sm-12">



</div>
<div class="col-sm-12">
    <h2 class="display-3">Courses</h2> 
        <div>
    <a style="margin: 19px;" href="{{ route('batch.create')}}" class="btn btn-primary">New Course</a>
    </div>     
  <table class="table table-striped">
    <thead>
        <tr>
          <td>No</td>
          <td>Course Name</td>
          <td>Batch No</td>
         

          
          <td colspan = 2>Actions</td>
        </tr>
    </thead>
    <tbody>
    	@php $i=1; @endphp
        @foreach($batches as $row)
        <tr>
            <td>{{$i++}}</td>
            <td>{{$row->name}}</td>
            <td>{{$row->course->name}}</td>
            
           

           
            <td>
              <div class="btn-group">
                
            

            
                <form action="{{ route('batch.destroy', $row->id)}}" method="post">
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