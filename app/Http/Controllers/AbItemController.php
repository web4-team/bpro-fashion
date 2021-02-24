<?php

namespace App\Http\Controllers;

use App\AbItem;
use App\AbSale;
use Illuminate\Http\Request;

class AbItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $items=AbItem::all();

        return view('ab_item.index',compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $items = AbItem::all();
        return view('ab_item.create',  compact('items'));
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
            
            
            
        ]);

        $item = new AbItem([
            
            'name' => $request->get('name'),
            
         
            
            
        ]);
        $item->save();
        
        return redirect('/ab_items')->with('success', 'Items Successfully Added!');
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
        $items =AbItem::find($id);
        return view('ab_item.edit', compact('items'));

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
          
            
        ]);
            
         $items = AbItem::find($id);
         
            $items->name = $request->get('name');
          
              
            
        
        $items->save();
        return redirect('/ab_items')->with('success', 'Your item is successfully Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
 public function destroy($id)
    {
        $item = AbItem::find($id);
        $item->sales()->delete();
        $item->delete();


        return redirect('/ab_items')->with('success', 'Your items have been deleted!'); 
    }

}
