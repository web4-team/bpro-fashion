@extends('artbotlayouts.master')
@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">Course Management</h1>
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ url('/')}}"><i class="fas fa-home"></i></a></li>
    <li class="breadcrumb-item"><a href="">Students List</a></li>
  </ol>
</div>
<div class="row">

<div class="col-sm-12">

        <div>
    <a style="margin: 19px;" href="{{ route('ab_batch.create')}}" class="btn btn-primary">New Course</a>
    </div>     
  <table class="table table-striped">
    <thead>
        <tr>
          <td>No</td>
          <td>Course Name</td>
          {{-- <td>Batch No</td> --}}
        
         

          
          <td colspan = 2>Actions</td>
        </tr>
    </thead>
    <tbody>
    	@php $i=1; @endphp
        @foreach($ab_batches as $row)
        <tr>
            <td>{{$i++}}</td>
            <td>{{$row->ab_name}}</td>
            {{-- <td>{{$row->course->name}}</td> --}}
            
           

           
            <td>
              <div class="btn-group">
                
            

            
                <form action="{{ route('ab_batch.destroy', $row->id)}}" method="post">
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