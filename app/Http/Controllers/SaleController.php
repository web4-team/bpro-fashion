<?php

namespace App\Http\Controllers;
use App\Item;
use App\Sale;
use Session;
use PDF;
use Carbon\Carbon;
use Illuminate\Http\Request;

class SaleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
  public function create($id){
        $item = Item::findOrFail($id);
        return view('sale.create')->with('item',$item);
    }

    public function downloadSale($id) {
        $item = Item::find($id);
        $sale=Sale::all();
        $sale_sum =Sale::all()->where('item_id',$id)->sum('stock_out');

        
        $pdf = PDF::loadView('sale.voucher', compact('item','sale_sum','sale'));
        // $customPaper = array(0,0,650,450);
        $pdf->setPaper('A4', 'portrait');
        return $pdf->download($item->name.".pdf");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
            $this->validate($request,[
          'date'=> 'required',
           'choose'=> 'required',
    ]);
   
        
        $sale= new Sale([
            'date'=>$request->get('date'),
            'customer_name'=>$request->get('customer'),
            'choose'=>$request->get('choose'),
            'stock_out'=>$request->get('stock_out'),
            'per_price'=>$request->get('per_price'),
            'supplier_name'=>$request->get('supplier'),
            'stock_in'=>$request->get('stock_in'),
            'in_total'=>$request->get('in_total'),
            'open_amount'=>$request->get('open'),
            'item_id' => $id,
        ]);
        $sale->save();
        
        Session::flash('success', 'Sale List Created');
        return redirect()->route('sales.show',['id'=>$id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Sale  $sale
     * @return \Illuminate\Http\Response
     */

    public function saleIndex($id){
        $item = Item::findOrFail($id);

      
        $data_sale=Sale::where('item_id',$id)->get();
       
        
     

        // dd($sale_sum);
        
        return view('sale.sale',compact('item','data_sale'));
    }
    public function show(Sale $sale)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Sale  $sale
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $sale = Sale::findOrFail($id);
        return view('sale.edit')->with('sale',$sale);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Sale  $sale
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $this->validate($request,[
          'date'=> 'required',
           'choose'=> 'required',
    ]);
   
        
        $sale = Sale::findOrFail($id);
        $sale->date = $request->date;
        $sale->choose = $request->choose;
        $sale->customer_name = $request->customer;
        $sale->stock_out = $request->stock_out;
        $sale->per_price = $request->per_price;
        $sale->stock_in= $request->stock_in;
         $sale->supplier_name = $request->supplier;
        $sale->in_total = $request->in_total;
        $sale->open_amount = $request->open;
       
        $sale->save();       
        

        
        Session::flash('success', 'Sales List Updated.');
        return redirect()->route('sales.show',['id'=>$sale->item_id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Sale  $sale
     * @return \Illuminate\Http\Response
     */
      public function destroy($id)
    {
        

        $sale = Sale::find($id);
        
        $sale->delete();

        Session::flash('success', 'Sales List Deleted.');
        return redirect()->route('sales.show',['id'=>$sale->item_id]);

    }

    public function searchSale(Request $request, $id)
    {
        $item = Item::findOrFail($id);
        $from_date=request()->input('fromdate');
        $to_date=request()->input('todate');

        $data_sale=Sale::where('item_id',$id)->where('date','>=',$from_date)->where('date','<=',$to_date)->get();    
        
       

        
        return view('sale.sale',compact('item','data_sale'));

    }
}