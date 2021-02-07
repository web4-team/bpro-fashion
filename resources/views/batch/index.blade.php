@extends('layouts.master')
@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Course Management</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('/') }}"><i class="fas fa-home"></i></a></li>
            <li class="breadcrumb-item"><a href="{{ route('batch.index') }}">Students List</a></li>
        </ol>
    </div>
    <div class="row">
              <div class="col-lg-12 mb-4">
     
              <div class="card">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        
                  <h6 class="m-0 font-weight-bold text-primary">Course</h6>
                  <a href="{{ route('batch.create') }}" class="btn btn-sm btn-primary">Create Course</a>
        
                </div>
                <div class="table-responsive">

            <table class="table table-striped">
                <thead>
                    <tr>
                        <td>No</td>
                        <td>Course Name</td>
                        <td colspan=2>Actions</td>
                    </tr>
                </thead>
                <tbody>
                    @php $i=1; @endphp
                    @foreach ($batches as $row)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $row->name }}</td>
                            {{-- <td>{{$row->course->name}}</td> --}}




                            <td>
                                <div class="btn-group">


                                    <a href="{{ route('batch.edit', $row->id) }}" class="btn btn-primary btn-sm"><i
                                            class="fas fa-edit"></i></a>
                                    @can('delete.users')
                                        <form action="{{ route('batch.destroy', $row->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger" type="submit"><i class="fa fa-trash"></i></button>
                                        </form>
                                    @endcan
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
          </div>
          <div class="card-footer"></div>
        </div>
      </div>
  </div>
        @endsection
