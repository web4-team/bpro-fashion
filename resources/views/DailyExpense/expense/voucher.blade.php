<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <style>
      h1,h3 {
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

.img{
  width: 100%;
  height: 50px;
  background-color:#f76f07;
  color:#211f1e; 
  border-radius: 10px;
}

span{
  color: white;
  font-size: large;
}
</style>

  </head>
  <body>
     <div class="img">
            <h1>B-Pro <span>Fashion & Art School</span></h1> 
          
        </div>
    <h1>Total Cost of {{$incomes->category}}</h1>

<div>
  <table>
  <tr>
    <th>Description</th>
    <th>Amount(Ks)</th>
  </tr>
  <tr>
    <td>Total Income</td>
    <td>{{$incomes->amount}}</td>
  </tr>
  <tr>
    <td>Total Expense</td>
    <td>{{$amount_sum}}</td>
  </tr>
  <tr>
    <td>Balance</td>
    <td>{{$incomes->amount-$amount_sum}}</td>
  </tr>
</table>
</div>


    <div>
      <h3>Details Expense</h3>
            <table class="table align-items-center table-flush" >
            <thead class="thead-light">
              <tr>
                <th scope="col" class="sort">No</th>
                <th scope="col" class="sort">Expense Category</th>
                <th scope="col" class="sort">Expense Description</th>
                <th scope="col" class="sort">Expense Amount</th>
                <th scope="col" class="sort">Expense Date</th>
                
                
              
              </tr>
            </thead>
            <tbody>
              @php $i=1; @endphp
                  @foreach($incomes->expense as $row)
                    <tr>
                      <td>{{$i++}}</td>             
                      <td>{{$row->category}}</td>
                      <td>{{$row->description}}</td>
                      <td>{{$row->amount}}</td>
                      <td>{{$row->date}}</td>
                   
                     
                    </tr>
                  @endforeach
            </tbody>
          </table>
          </div>

    
  </body>
</html>