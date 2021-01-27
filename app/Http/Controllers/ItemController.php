<?php

namespace App\Http\Controllers;

use App\Item;
use App\Sale;
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
        'to_price'=>'required',
        'date'=>'required',
                        
        ]);

        $item = new Item([
            'date'=>$request->get('date'),
            'name' => $request->get('name'),
            
            'quantity'=>$request->get('quantity'),
            'total'=>$request->get('total'),
            'retail_price'=>$request->get('price'),
            'remark'=>$request->get('remark')                        
        
        $items->save();
        //dd($request);
        
        return redirect('/item')->with('success', 'Items Successfully Added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $items = Item::find($id);
        return view('item.show', compact('items'));    
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
            'to_price'=>'required',
            'date'=>'required'
            
        ]);
            
         $items = Item::find($id);
         $items->date = $request->get('date');
            $items->name = $request->get('name');
            $items->quantity = $request->get('quantity');
            $items->total = $request->get('total');
            $items->retail_price = $request->get('price');
            $items->remark = $request->get('remark');
                          
        
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
