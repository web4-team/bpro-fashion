@extends('layouts.master')
@section('content')
@section('style')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css">
<link href="{{asset('backend/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
@endsection

<div class="col-sm-12">
  <h2 class="display-3">Items</h2> 
  <div class="float-right btn btn-sm">
    <a style="margin: 10px;" href="{{ route('item.create')}}" class="btn btn-primary">New Item</a>
  </div>     

  <table class="table table-striped" id="sale">
    <thead>
      <tr>
        <td>No</td>
        <td>Date</td>
        <td>Item Name</td>       
        <td>Quantity</td>        
        <td>Total</td>
        <td>Retail Price</td>  
        <td>Remark</td>
        <td>Actions</td>
      </tr>
    </thead>
    <tbody>
    	@php $i=1; @endphp
      @foreach($items as $row)
      <tr>
        <td>{{$i++}}</td>
       <td>{{ \Carbon\Carbon::parse($row->date)->format('d/M/Y')}}</td>
        
        <td>{{$row->name}}</td>    
       <td>{{$row->quantity}}</td>
       <td>{{$row->total}}</td>
       <td>{{$row->retail_price}}</td>
       
     
       <td>{{$row->remark}}</td>

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
<script type="text/javascript" src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
  <!-- Page level custom scripts -->
<script src="{{ asset('backend/js/demo/datatables-item.js') }}"></script>
<script src="{{ asset('backend/datatables/dataTables.bootstrap4.min.js') }}"></script>
@endsection
 