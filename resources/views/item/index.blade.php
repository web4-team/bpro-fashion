@extends('layouts.master')
@section('style')
  <!-- Custom styles for this page -->
  <link href="{{asset('backend/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
@endsection
@section('content')

<div class="col-sm-12">
  <h2 class="display-3">Items</h2> 
  <div>
    <a style="margin: 19px;" href="{{ route('item.create')}}" class="btn btn-primary">New Item</a>
  </div>     
  <table class="table table-striped" id="mytable">
    <thead>
      <tr>
        <td>No</td>
        <td>Date Time</td>
        <td>Item Name</td>
        <td>Per Price</td>
        <td>Stock In</td>
        <td>Stock Out</td>
        <td>Sub_Total</td>



        <td colspan = 2>Actions</td>
      </tr>
    </thead>
    <tbody>
    	@php $i=1; @endphp
      @foreach($items as $row)
      <tr>
        <td>{{$i++}}</td>
        <td>{{$row->created_at->format('d/M/Y,h:iA')}}</td>
        <!-- <td><button class="btn btn-primary" type="submit" onclick="check('{{$row->name}}','{{$row->price}}','{{$row->stock}}')"><i class="fa fa-minus"></i></button></td> -->
        <td>{{$row->name}}</td>
        
        <td>{{$row->price}}</td>
        <td>{{$row->stock_in}}</td>
        <td>{{$row->stock_out}}</td>
        <td>{{number_format($row->price*$row->stock_out)}}</td>




        <td>
          <div class="btn-group">



              <a href="{{ route('item.edit',$row->id)}}" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
            <form action="{{ route('item.destroy', $row->id)}}" method="post">
              @csrf
              @method('DELETE')
              <button class="btn btn-danger" type="submit"><i class="fa fa-trash"></i></button>
            </form>
          </div>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>

</div>
<!-- <div class="card-body" >
  
  <table class="table" border="1" id="mytable" >
    <thead>
      <tr>
        <th>No</th>
        <th>Name</th>
        
        <th>Price</th>

        <th>Quantity</th>
        <th>Sub Total</th>
      </tr>
    </thead>

    <tbody id="tbody">

    </tbody>
  </table>

  <button class="btn btn-primary" id="checkout">Checkout</button>
</form>

 

</div> -->


<script type="text/javascript">

 // var stockObjArr = [];
 // var resultArr = [];
 // var stockName = '';
 // var result;
 // var initial = 1;
 // var j=1;
 // let Qty = 1;
 // var idName = '';
 // var prices = 0;
 // var checkCount = 0;
 // var nameCount;
 // var totalCount; 
 // var QtyCount;
//  function check(name, price, stock) {
//   prices = price + "+" + checkCount;
//   nameCount = name + checkCount;
//   totalCount = name + prices + checkCount;
//   QtyCount = name + Qty + checkCount;
//   stocks = stock + "+" + checkCount;

//   idName = name;
//   for(let i of stockObjArr){
//    result = i.name.includes(name);
//    resultArr.push(result);
//  }
//  if(resultArr.includes(true)){

//   resultArr = [];
// }
// else{


  // total = price * initial;
  // stockName = name;
  // html = `<tr>
  // <td>${j++}</td>
  // <td id = ${nameCount} name="name">${name}</td>
  // <td name="price">${price}</td>


  // <td><input type="text" id = ${QtyCount} value = "1" readonly size="2"><button class="maxbtn" onclick ="countPlus('${QtyCount}','${totalCount}','${stocks}', '${prices}')"> + </button>

  // </td>
  // <td id = ${totalCount} name="sub_total">${total}</td>
  // </tr>`;


//   var tobdy = $('#tbody');
//   tobdy.append(html);
//   checkCount++;
// }



// var stockObj = {
//   name: name,
//   price: price,
//   stock: stock
// };

// stockObjArr.push(stockObj);



// }

// countPlus = (id,id1,stock, price) =>{
//   var priceResult = price.split("+");
//   var stockResult = stock.split("+");

//   var count = parseInt(document.getElementById(id).value);
//   if(count >= stockResult[0]){
//     alert("Out Of Stock");
//   }              
//   else{
//     document.getElementById(id).value = parseInt(document.getElementById(id).value) + 1; 

//     document.getElementById(id1).innerHTML = priceResult[0] * document.getElementById(id).value ;
//   }                                                                                          

// };

// $('#checkout').click(function () {
//   let report= tobdy;
//   $.ajaxSetup({
//     headers: {
//       'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//     }
//   });
//   $.post('/courses',{data:report},function (res) {

//   })
// });

</script>




  @endsection
  @section('script')
  <!-- Page level plugins -->
  <script src="{{ asset('backend/datatables/jquery.dataTables.min.js') }}"></script>
  <script src="{{ asset('backend/datatables/dataTables.bootstrap4.min.js') }}"></script>

  <!-- Page level custom scripts -->
  <script src="{{ asset('backend/js/demo/datatables-demo.js') }}"></script>
@endsection