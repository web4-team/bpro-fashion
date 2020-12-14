@extends('layouts.master')
@section('style')
  <!-- Custom styles for this page -->
  <link href="{{asset('backend/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
@endsection
@section('content')

<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">Student Management</h1>
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ url('/')}}"><i class="fas fa-home"></i></a></li>
    <li class="breadcrumb-item"><a href="{{ route('students.index')}}">Students List</a></li>
  </ol>
</div>

<!-- Row -->
<div class="row">
  <div class="col-lg-12 mb-4">
     
      <div class="card">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-primary">Students List</h6>
          <a href="{{route('students.create')}}" class="btn btn-sm btn-primary">Create Student</a>
        </div>
        <div class="table-responsive">
          <table class="table align-items-center table-flush" id="dataTable">
            <thead class="thead-light">
              <tr>
                <th scope="col" class="sort">No</th>                
                <th scope="col" class="sort">Name</th>
                <th scope="col" class="sort">Age</th>
                <th scope="col" class="sort">Phone</th>
                <th scope="col" class="sort">Address</th>    
                <th scope="col" class="sort">Accept Date</th>            
                <th scope="col" class="sort">Action</th>
              </tr>
            </thead>
            <tbody>
              @php $i=1; @endphp
                  @foreach($students as $row)
                    <tr>
                      <td>{{$i++}}</td>             
                      <td>{{$row->name}}</td>
                      <td>{{$row->age}}</td>                
                      <td>{{$row->phone}}</td>
                      <td>{{$row->address}}</td>
                      <td>{{$row->accept_date}}</td>
                      <td>
                       
                        <a href="{{route('students.show',$row->id)}}" class="btn btn-warning detail btn-sm" ><i class="fas fa-eye"></i></a>

                        <a href="{{route('students.edit',$row->id)}}" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
                        
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
        <div class="card-footer"></div>
      </div>
    </div>
</div>

@endsection
@section('script')
  <!-- Page level plugins -->
  <script src="{{ asset('backend/datatables/jquery.dataTables.min.js') }}"></script>
  <script src="{{ asset('backend/datatables/dataTables.bootstrap4.min.js') }}"></script>

  <!-- Page level custom scripts -->
  <script src="{{ asset('backend/js/demo/datatables-demo.js') }}"></script>
@endsection
