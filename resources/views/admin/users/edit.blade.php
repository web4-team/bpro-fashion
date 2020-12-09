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
            <div class="form-group row">
              <label for="name" class="col-md-2 col-form-label text-md-right">Name</label>
  
              <div class="col-md-6">
                  <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $user->name }}" required autofocus>
  
                  @error('name')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
              </div>
          </div>
           
            <div class="form-group row">
              <label for="email" class="col-md-2 col-form-label text-md-right">Email</label>

              <div class="col-md-6">
                  <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $user->email }}" required autocomplete="email" autofocus>

                  @error('email')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
              </div>
          </div>

            @csrf
            {{ method_field('PUT')}}
            <div class="form-group row">
              <label for="roles" class="col-md-2 col-form-label text-md-right">Roles</label>
              <div class="col-md-6">
            @foreach($roles as $role)
                  <div class="form-checkbox">
                  <input type="checkbox" name="roles[]" value="{{ $role->id}}"
                  @if($user->roles->pluck('id')->contains($role->id)) checked @endif>
                  <label for="userrole">{{ $role->name}}</label>
                  </div>
              
            @endforeach
              </div>
            </div>       
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
