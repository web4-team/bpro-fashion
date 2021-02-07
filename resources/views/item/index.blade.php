@extends('layouts.master')
@section('style')
<link rel="stylesheet" type="text/css" href="backend/DataTables/css/jquery.dataTables.min.css">
<link rel="stylesheet" type="text/css" href="backend/DataTables/css/dataTables.bootstrap4.min.css">
@endsection

@section('content')

<div class="col-sm-12">
  <h2 class="display-3">Items</h2> 
  <div class="float-right">
    <a style="margin: 19px;" href="{{ route('item.create')}}" class="btn btn-primary">New Item</a>
  </div>     
  <table class="table table-striped" id="datatable">
    <thead>
      <tr>
        <td>No</td>
        <td>Date</td>
        <td>Item Name</td>       
       
        <td>Actions</td>
      </tr>
    </thead>
    <tbody>
    	@php $i=1; @endphp
      @foreach($items as $row)
      <tr>
        <td>{{$i++}}</td>
       <td>{{ \Carbon\Carbon::parse($row->created_at)->format('d/M/Y')}}</td>
        
        <td>{{$row->name}}</td>    
     
  


        




        <td>
          <div class="btn-group">



              <a href="{{ route('item.edit',$row->id)}}" class="btn btn-primary btn btn-sm"><i class="fas fa-edit"></i></a>
            <form action="{{ route('item.destroy', $row->id)}}" method="post">
              @csrf
              @method('DELETE')
              <button class="btn btn-danger btn btn-sm mx-1" type="submit"><i class="fa fa-trash"></i></button>
            </form>
             <a href="{{ route('sales.show', $row->id) }}" data-toggle="tooltip" title="SaleList" class="btn btn-success btn btn-sm"><i class="fas fa-file"></i></a>
          </div>
        </td>
      </tr>
      @endforeach
    </tbody>
        
  </table>

</div>








  @endsection
@section('scripts')

<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script type="text/javascript" src="backend/DataTables/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="backend/DataTables/js/dataTables.bootstrap4.min.js"></script>
  <!-- Page level custom scripts -->
<script src="{{ asset('backend/js/demo/datatables-item.js') }}"></script>
@endsection
 