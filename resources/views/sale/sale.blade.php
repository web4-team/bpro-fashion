@extends('layouts.master')	
@section('style')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css">
<!-- <link rel="stylesheet" type="text/css" href="backend/DataTables/css/dataTables.bootstrap4.min.css"> -->
@endsection

@section('content')
@include('datatable.style')



<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">Sale for<b> {{ $item->name }}</b></h1>
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ url('/home')}}"><i class="fas fa-home"></i></a></li>
    <li class="breadcrumb-item"><a href="">Sale Lists</a></li>
  </ol>
</div>
<div class="row">
<div class="col-xl-6  col-sm-12 mb-3">
   <ul class="list-group">
                <li class="list-group-item bg-primary text-center text-white">
                    <span> Summary For This Month</span>
                </li>
                 @php $sum_total=0 @endphp
          @php $in_total=0 @endphp
                @foreach($sale as $row)
                  @php $sum_total +=  $row->stock_out*$row->per_price; 
                  $in_total += $row->in_total;
                  @endphp
                @endforeach
            
                <li class="list-group-item d-flex justify-content-between align-items-center">
                     Total Income 
                    <span class="badge badge-success badge-pill incomeValue">{{$sum_total}} Ks</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                   Total Outcome 
                    <span class="badge badge-danger badge-pill expenseValue"> {{$in_total}} ks</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                   Balance for {{ $item->name }}
                    <span class="badge badge-info badge-pill expenseValue"> {{$sum_total - $in_total}} </span>
                </li>
                
               
            </ul>
</div>
<div class="col-xl-6  col-sm-12 mb-3">
  <ul class="list-group">
               <li class="list-group-item bg-warning text-center text-white">
                   <span> Overview Count for In Stock {{ $item->name }} </span>
               </li>
        
           
               <li class="list-group-item d-flex justify-content-between align-items-center">
                  Total of Stock In
                   <span class="badge badge-success badge-pill expenseValue"> {{$inTotal}} </span>
               </li>
               
               <li class="list-group-item d-flex justify-content-between align-items-center">
                   Total of Stock Out
                   <span class="badge badge-danger badge-pill">{{$outTotal}} </span>
               </li>
               <li class="list-group-item d-flex justify-content-between align-items-center">
                <b>In Stock {{ $item->name }} </b>
                 <span class="badge badge-info badge-pill">{{$inTotal - $outTotal}} </span>
             </li>
           </ul>
</div>
</div>

<div class="row">
    <div class="col-lg-12 mb-4">
       
        <div class="card">
          <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between float-right">
         Sale Lists
            <!--  <a href="{{action('SaleController@downloadSale',['id'=>$item->id])}}" class="btn btn-dark detail btn-sm mt-1" ><i class="fa fa-file-pdf fa-1x btn-danger"></i> Report</a> -->
            <a href="{{ route('sales.create', ['id'=>$item->id]) }}" class="btn btn-sm btn-primary">Create Sale</a>
            
          </div>
         
<!--           <form action="{{route('sale.search',['id' => $item->id])}}" method="POST">
          @csrf
<div class="row mb-4">
     <div class="col-md-5">
        <input type="date" class="form-control" name="fromdate" id="date"  />
    </div>
    <div class="col-md-5">
        <input type="date" class="form-control" name="todate" />
    </div>
    <div class="col-md-2">
        <input type="submit" name="search" class="btn btn-success" value="Filter" />
    </div>
</div>
</form> -->
        
          <div class="table-responsive">
            <table class="table align-items-center table-flush" id="sale">
              <thead class="thead-light">
                <tr>
                  <th scope="col" class="sort">No</th>
                  <th scope="col" class="sort">Sale Date</th>
                  <th scope="col" class="sort">Type</th>                 
                  <th scope="col" class="sort">Customer Name</th>
                  <th scope="col" class="sort">Stock Out</th>
                  <th scope="col" class="sort">Per Price</th>                           
                  <th scope="col" class="sort">StockOut Total</th>

                  <th scope="col" class="sort">Supplier Name</th>
                  <th scope="col" class="sort">Stock In</th>
                  <th scope="col" class="sort">StockIn Total</th>
                              
                  <th scope="col" class="sort">Action</th>
                </tr>
              </thead>

              <tbody>
                @php $i=1; @endphp
                
                  @foreach($item->sales as $row)
                    <tr>	
                    <td>{{$i++}}</td>	
                      <td>{{ \Carbon\Carbon::parse($row->date)->format('d/M/Y')}}</td>
                      <td>{{$row->choose}}</td>
                      <td>{{ $row->customer_name }}</td>
                      <td>{{ $row->stock_out }}</td>
                      <td>{{ $row->per_price }}</td>
                      <td>{{ $row->stock_out*$row->per_price }}</td>
                      <td>{{ $row->supplier_name }}</td>
                      <td>{{ $row->stock_in }}</td>
                      <td>{{ $row->in_total }}</td>
                    
                      
                     
                      <td>
                        <a href="{{ route('sales.edit', ['id' =>$row->id]) }}" class="btn btn-success">Edit</a>
                      </td>
         
                    </tr>
                    
                  @endforeach
          

              
              </tbody>	
              <tfoot>
                <tr>
                    <th colspan="1"   style="text-align:right"></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                  
                    
                    
                </tr>
            </tfoot>
            </table>
          </div>
          <div class="card-footer"></div>
        </div>
      </div>
  </div>





@endsection

@section('scripts')
  @include('datatable.script')
  <!-- Page level custom scripts -->
  <script src="{{ asset('backend/js/demo/sale.js') }}"></script>
  
@endsection
