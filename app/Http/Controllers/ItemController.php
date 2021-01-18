<?php

namespace App\Http\Controllers;

use App\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items=Item::all();
        return view('item.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $items = Item::all();
        return view('item.create',  compact('items'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
                $request->validate([
            'name'=>'required',
            'price'=>'required',
            
            
            
        ]);

        $item = new Item([
            'date'=>$request->get('date'),
            'name' => $request->get('name'),
            'price'=>$request->get('price'),
            'quantity'=>$request->get('quantity'),
            'customer'=>$request->get('customer'),
            'paid'=>$request->get('paid'),
            'due_date'=>$request->get('due_date'),
            'remark'=>$request->get('remark')
            
            
        ]);
        $item->save();
        
        return redirect('/item')->with('success', 'Items Successfully Added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function show(Item $item)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $items = Item::find($id);
        return view('item.edit', compact('items'));

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
}
    public function update(Request $request,$id)
    {
        $request->validate([
            'name'=>'required',
            'price'=>'required'
            
        ]);
            
         $items = Item::find($id);
            $items->name = $request->get('name');
            $items->price = $request->get('price');
            $items->stock_in = $request->get('stock_in');
            $items->stock_out = $request->get('stock_out');
              
            
        
        $items->save();
        return redirect('/item')->with('success', 'Your items are successfully Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Item::find($id);
        $item->delete();

        return redirect('/item')->with('success', 'Your items have been deleted!'); 
    }
}
