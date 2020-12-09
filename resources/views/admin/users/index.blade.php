@extends('layouts.master')

@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Manage Users</h1>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{ url('/')}}"><i class="fas fa-home"></i></a></li>
      <li class="breadcrumb-item">users</li>
    </ol>
</div>

<!-- Row -->
<div class="row">
    <div class="col-lg-12 mb-4">
        <!-- Simple Tables -->
        <div class="card">
          <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">User Lists</h6>
          </div>
          <div class="table-responsive">
            <table class="table align-items-center table-flush">
              <thead class="thead-light">
                <tr>
                  <th>No.</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Roles</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach($users as $user)
                <tr>
                <td>{{ $user->id}}</td>
                  <td>{{ $user->name}}</td>
                  <td>{{ $user->email}}</td>
                  <td>{{ implode(',', $user->roles()->get()->pluck('name')->toArray())}}</td>
                <td>
                    @can('edit.users')
                    <a href="{{ route('admin.users.edit', $user->id)}}"> <button type="button" class="btn btn-primary btn-sm float-left"><i class="fas fa-edit"></i></button></a>
                  @endcan
                  @can('delete.users')
                  <form action="{{ route('admin.users.destroy', $user)}}" method="POST" class="float-left">
                  @csrf
                  {{ method_field('DELETE')}}
                    <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                </form>
                @endcan
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
