<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <style>
      h1  {
        text-align: center;
      }
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tfoot {
  background-color: #dddddd;
}
</style>

  </head>
  <body>
        <div>
      <h1>Report Summary for {{$item->name}} ({{ \Carbon\Carbon::parse($item->date)->format('M/Y')}})</h1>
      <table class="table align-items-center table-flush" >
        <thead>
            <tr>
                <th>Description</th>
                <th>Qty</th>
                <th>Total</th>
                
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Stock In</td>
                <td>{{$item->quantity}}</td>
                <td>{{number_format($item->total)}} Ks (Outcome)</td>
                
            </tr>
              <tr>
                <td>Stock Out</td>
                <td>{{$sale_sum}}</td>
               <td>{{number_format($sum_total)}} Ks (Income)</td>
                
            </tr>
          </tbody>
          <tfoot>
            <tr>
              <td>Diffrence</td>
              <td>{{$item->quantity-$sale_sum}}</td>
              <td>{{number_format($item->total-$sum_total)}} Ks</td>
            </tr>
            
          </tfoot>
        </table>

    </div>

    <div>
      <h1>Detail Report</h1>
                  <table class="table align-items-center table-flush">
              <thead class="thead-light">
                <tr>
                  <th scope="col" class="sort">No</th>
                  <th scope="col" class="sort">Sale Date</th>                
                  <th scope="col" class="sort">Coustomer Name</th>
                  <th scope="col" class="sort">Stock Out</th>
                  <th scope="col" class="sort">Per Price</th>
                           
                  <th scope="col" class="sort">Total</th> 
                 
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
                                                                
                         
                    </tr>
                    @php $sum_total +=  $row->stock_out*$row->per_price; @endphp
                  @endforeach
            
              
              </tbody>
              <tfoot><tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>{{$sale_sum}}</td>
                <td>{{$sum_total}}</td>
                
              </tr></tfoot>  
           
            </table>
    </div>

    
  </body>
</html>