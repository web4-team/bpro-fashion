<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   public function index()
    {
       $category=Category::all();

        return view('DailyExpense.category.index',compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category=Category::all();
        return view('DailyExpense.category.create',  compact('category'));
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

        $category = new Category([
            
            'category_name' => $request->get('name'),
            
         
            
            
        ]);
        $category->save();
        
        return redirect('/category')->with('success', 'Successfully Added!');
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
        $category=Category::find($id);
        return view('DailyExpense.category.edit', compact('category'));

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
            
         $category = Category::find($id);
         
            $category->category_name = $request->get('name');
          
              
            
        
        $category->save();
        return redirect('/category')->with('success', 'Your Category is successfully Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::find($id);
       
        $category->delete();


        return redirect('/category')->with('success', 'Your Category have been deleted!'); 
    }

}

