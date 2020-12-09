@extends('layouts.master')	
@section('content')
<!-- Header -->
    <div class="header pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <h6 class="h2 text-dark d-inline-block mb-0">Students Tables</h6>
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item"><a href="#">Tables</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Tables</li>
                </ol>
              </nav>
            </div>
            <div class="col-lg-6 col-5 text-right">
              <a href="{{route('students.create')}}" class="btn btn-sm btn-primary">Create Student</a>
              
            </div>
          </div>
        </div>
      </div>
    </div>
<!--Page content-->	
    <div class="row">
        <div class="col">
          <div class="card bg-dark shadow">
            <div class="card-header bg-transparent border-0">
              <h2 class="text-white mb-0">Students List</h2>
            </div>
            <div class="table-responsive">
              <table class="table align-items-center table-dark table-striped table-hover">
                <thead class="thead" style="background-color: slategray">
                  <tr>
                    <th scope="col" class="sort">No</th>
                    <!-- <th scope="col" class="sort">Course</th> -->
                    <th scope="col" class="sort">Accept Date</th>
                    <th scope="col" class="sort">Name</th>
                    <th scope="col" class="sort">Age</th>
                    <!-- <th scope="col" class="sort">Email</th> -->
                    <th scope="col" class="sort">Phone</th>
                    <th scope="col" class="sort">Address</th>
                    
                    <th scope="col" class="sort">Action</th>
                  </tr>
                </thead>
                <tbody class="list">
                  @php $i=1; @endphp
                  @foreach($students as $row)
                    <tr>
                      <td>{{$i++}}</td>
                      <!-- <td>{{$row->course}}</td> -->
                      <td>{{$row->accept_date}}</td>
                      <td>{{$row->name}}</td>
                      <td>{{$row->age}}</td>                     
                      <!-- <td>{{$row->email}}</td> -->
                      <td>{{$row->phone}}</td>
                      <td>{{$row->address}}</td>
                      <td>
                        <a href="{{route('students.show',$row->id)}}" class="btn btn-info btn-sm detail" ><i class="fas fa-eye"></i></a>

                        <a href="{{route('students.edit',$row->id)}}" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                        
                        <form method="post" style="display: inline-block" action="{{route('students.destroy',$row->id)}}" onsubmit="return confirm('Are you sure?')">
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                        </form>
                      </td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
            
          </div>
        </div>
    </div>

@endsection

