<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AbCategory;

class AbCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   public function index()
    {
       $category=AbCategory::all();

        return view('Ab_DailyExpense.ab_category.index',compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category=AbCategory::all();
        return view('Ab_DailyExpense.ab_category.create',  compact('category'));
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

        $category = new AbCategory([
            
            'category_name' => $request->get('name'),
            
         
            
            
        ]);
        $category->save();
        
        return redirect('/ab_category')->with('success', 'Successfully Added!');
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
        $category=AbCategory::find($id);
        return view('Ab_DailyExpense.ab_category.edit', compact('category'));

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
            
         $category = AbCategory::find($id);
         
            $category->category_name = $request->get('name');
          
              
            
        
        $category->save();
        return redirect('/ab_category')->with('success', 'Your Category is successfully Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = AbCategory::find($id);
       
        $category->delete();


        return redirect('/ab_category')->with('success', 'Your Category have been deleted!'); 
    }

}

