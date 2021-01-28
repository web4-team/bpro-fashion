<?php

namespace App\Http\Controllers;
use App\Item;
use App\Sale;
use Session;
use PDF;
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
       $request-> validate ([
            'customer_name'=>'required',
            
        ]);
        $sale= new Sale([
            'date'=>$request->get('date'),
            'customer_name'=>$request->get('customer_name'),
            'stock_out'=>$request->get('stock_out'),
            'per_price'=>$request->get('per_price'),
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
        $sale_sum =Sale::all()->where('item_id',$id)->sum('stock_out');
        // dd($sale_sum);
        
        return view('sale.sale',compact('item','sale_sum'));
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
    ]);
   
        
        $sale = Sale::findOrFail($id);
        $sale->date = $request->date;
        $sale->customer_name = $request->customer_name;
        $sale->stock_out = $request->stock_out;
        $sale->per_price = $request->per_price;
       
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
    public function destroy(Sale $sale)
    {
        //
    }
}
