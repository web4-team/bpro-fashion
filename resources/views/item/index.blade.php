@extends('layouts.master')
@section('content')
@include('datatable.style')
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
  @include('datatable.script')
  <!-- Page level custom scripts -->
  <script src="{{ asset('backend/js/demo/item-demo.js') }}"></script>
  
@endsection
 