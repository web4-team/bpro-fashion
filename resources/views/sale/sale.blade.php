@extends('layouts.master')	
@section('content')

<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">Sale for<b> {{ $item->name }}</b></h1>
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ url('/home')}}"><i class="fas fa-home"></i></a></li>
    <li class="breadcrumb-item"><a href="">Sale Lists</a></li>
  </ol>
</div>


<div class="row">
    <div class="col-lg-12 mb-4">
       
        <div class="card">
          <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
           <a href="{{action('SaleController@downloadSale',['id'=>$item->id])}}" class="btn btn-dark detail btn-sm mt-1" ><i class="fa fa-file-pdf fa-1x btn-danger"></i> Report</a>
            <a href="{{ route('sales.create', ['id'=>$item->id]) }}" class="btn btn-sm btn-primary">Create Sale</a>
            
          </div>
        
          <div class="table-responsive">
            <table class="table align-items-center table-flush" id="sale">
              <thead class="thead-light">
                <tr>
                  <th scope="col" class="sort">No</th>
                  <th scope="col" class="sort">Sale Date</th>                
                  <th scope="col" class="sort">Coustomer Name</th>
                  <th scope="col" class="sort">Stock Out</th>
                  <th scope="col" class="sort">Per Price</th>
                           
                  <th scope="col" class="sort">Total</th> 
                              
                  <th scope="col" class="sort">Action</th>
                </tr>
              </thead>

              <tbody>
                @php $i=1; @endphp
               
                  @foreach($item->sales as $row)
                    <tr>	
                    <td>{{$i++}}</td>	
                      <td>{{ \Carbon\Carbon::parse($row->date)->format('d/M/Y')}}</td>
                      <td>{{ $row->customer_name }}</td>
                      <td>{{ $row->stock_out }}</td>
                      <td>{{ $row->per_price }}</td>
                      <td>{{ $row->stock_out*$row->per_price }}</td>
                    
                      
                     
                      <td>
                        <a href="{{ route('sales.edit', ['id' =>$row->id]) }}" class="btn btn-success">Edit</a>
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

  <!-- Page level custom scripts -->
<script src="{{ asset('backend/js/demo/datatables-item.js') }}"></script>
@endsection