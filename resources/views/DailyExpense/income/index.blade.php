@extends('layouts.master')
@section('style')
<link rel="stylesheet" type="text/css" href="backend/DataTables/css/jquery.dataTables.min.css">
<link rel="stylesheet" type="text/css" href="backend/DataTables/css/dataTables.bootstrap4.min.css">
@endsection


@section('content')

<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">Income Management</h1>
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ url('/')}}"><i class="fas fa-home"></i></a></li>
    <li class="breadcrumb-item"><a href="{{ route('courses.index')}}">Students List</a></li>
  </ol>
</div>

<!-- Row -->
<div class="row">
  <div class="col-lg-12 mb-4">
     
      <div class="card">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">

          <h6 class="m-0 font-weight-bold text-primary">Income</h6>
          <a href="{{ route('income.create')}}" class="btn btn-sm btn-primary">Create Income</a>

        </div>
        <div class="table-responsive">

         <table class="table align-items-center table-flush" id="datatable" >
            <thead class="thead-light">
              <tr>
                <th scope="col" class="sort">No</th>
                <th scope="col" class="sort">Income Category</th>
                <th scope="col" class="sort">Income Description</th>
                <th scope="col" class="sort">Income Amount</th>
                <th scope="col" class="sort">Income Date</th>
                <th scope="col" class="sort">Income Remark</th>
                <th scope="col" class="sort">Action</th>
                
              
              </tr>
            </thead>
            <tbody>
              @php $i=1; @endphp
                  @foreach($incomes as $row)
                    <tr>
                      <td>{{$i++}}</td>             
                      <td>{{$row->category}}</td>
                      <td>{{$row->description}}</td>
                      <td>{{$row->amount}}</td>
                      <td>{{ \Carbon\Carbon::parse($row->date)->format('d/M/Y')}}</td>
                       <td>{{$row->remark}}</td>
                       <td>
                       
                        

                        <a href="{{route('income.edit',$row->id)}}" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
                        
                        <form method="post" style="display: inline-block" action="{{route('income.destroy',$row->id)}}" onsubmit="return confirm('Are you sure?')">
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                        </form>
                        <a href="{{route('expenses.index',$row->id)}}" data-toggle="tooltip" title="Expense" class="btn btn-success btn-sm"><i class="fa fa-calculator"></i></a>
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
@section('scripts')


<script type="text/javascript" src="backend/DataTables/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="backend/DataTables/js/dataTables.bootstrap4.min.js"></script>
  <!-- Page level custom scripts -->
<script src="{{ asset('backend/js/demo/datatables-item.js') }}"></script>
@endsection
 