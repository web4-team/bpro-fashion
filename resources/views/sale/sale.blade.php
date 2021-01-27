@extends('layouts.master')	
@section('style')
  <!-- Custom styles for this page -->
  <link href="{{asset('backend/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
@endsection
@section('content')
<link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">

<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">Sale for  <b>{{ $item->name }}</b></h1>
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ url('/home')}}"><i class="fas fa-home"></i></a></li>
    <li class="breadcrumb-item"><a href="">Sale Lists</a></li>
  </ol>
</div>


<div class="row">
    <div class="col-lg-12 mb-4">
       
        <div class="card">
          <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
           <a href="{{action('SaleController@downloadPDF',['id'=>$item->id])}}" class="btn btn-dark detail btn-sm mt-1" ><i class="fa fa-file-pdf fa-1x btn-danger"></i> Report</a>
            <a href="{{ route('sales.create', ['id'=>$item->id]) }}" class="btn btn-sm btn-primary">Create Sale</a>
            
          </div>
        
          <div class="table-responsive">
            <table class="table align-items-center table-flush">
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
                @php $sum_total=0; @endphp
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
                    @php $sum_total +=  $row->stock_out*$row->per_price; @endphp
                  @endforeach
                   <tr>
                  <td>{{$sum_total}}</td>
            </tr>

              
              </tbody>	
            
            </table>
          </div>
          <div class="card-footer"></div>
        </div>
      </div>
  </div>





<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
@endsection
@section('script')
  <!-- Page level plugins -->
  <script src="{{ asset('backend/datatables/jquery.dataTables.min.js') }}"></script>
  <script src="{{ asset('backend/datatables/dataTables.bootstrap4.min.js') }}"></script>

  <!-- Page level custom scripts -->
  {{-- <script src="{{ asset('backend/js/demo/datatables-demo.js') }}"></script> --}}
@endsection