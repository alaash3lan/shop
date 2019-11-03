<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use App\filters\ThreadFilters;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(ThreadFilters $filter)
    {
        $cat = Category::all();
        $products = Product::latest();
        $filter->apply($products);
        $products = $products->get();

        return view('store.index', compact('subcategories', 'products', 'cat'));
    }

}
