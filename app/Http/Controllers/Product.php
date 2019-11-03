<?php

namespace App\Http\Controllers;

use App\Category;
use App\Subcategory;
use Illuminate\Http\Request;

class Product extends Controller
{
 

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pro = \App\Product::findOrFail($id);
        $pro->views = ++$pro->views;
        $pro->save();
        $cat = Category::all();
        $subs = Subcategory::all();
       return view('store.product',compact('pro','cat', 'subs'));
    }


}
