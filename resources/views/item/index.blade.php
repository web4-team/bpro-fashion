@extends('layouts.master')
@section('content')
@section('style')
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css">
@endsection
<div class="col-sm-12">
  <h2 class="display-3">Items</h2> 
  <div>
    <a style="margin: 19px;" href="{{ route('item.create')}}" class="btn btn-primary">New Item</a>
  </div>     
  <table id="item" class="table table-striped " >
    <thead>
      <tr>
        <td>No</td>
        <td>Date</td>
        <td>Item Name</td>       
        <td>Quantity</td>        
        <td>Total</td>
        <td>Retail Price</td>
        

        <td>Remark</td>



        <td colspan = 2>Actions</td>
      </tr>
    </thead>
    <tbody>
    	@php $i=1; @endphp
      @foreach($items as $row)
      <tr>
        <td>{{$i++}}</td>
        <td>{{$row->date}}</td>
        
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
  
  <!-- Page level custom scripts -->
  <script src="{{ asset('backend/js/demo/datatable.item.js') }}"></script>
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
@endsection
 