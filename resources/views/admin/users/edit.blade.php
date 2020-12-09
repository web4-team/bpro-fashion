@extends('layouts.master')

@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Update User</h1>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{ url('/')}}">Home</a></li>
      <li class="breadcrumb-item">User Lists</li>
      <li class="breadcrumb-item">Update</li>
    </ol>
</div>

<div class="row">
    <div class="col-lg-12">
        <!-- Horizontal Form -->
        <div class="card mb-4">
          <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-primary">User Infomation - {{ $user->name}}</h6>
          </div>
          <div class="card-body">
          <form action="{{ route('admin.users.update', $user)}}" method="POST">
            @csrf
            {{ method_field('PUT')}}
            @foreach($roles as $role)
           
               
             
                  <div class="form-checkbox">
                  <input type="checkbox" name="roles[]" value="{{ $role->id}}">
                  <label for="userrole">{{ $role->name}}</label>
                  </div>
              
            @endforeach
                     
              <div class="form-group row">
                <div class="col-sm-10">
                  <button type="submit" class="btn btn-success">Update</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
</div>



@endsection
