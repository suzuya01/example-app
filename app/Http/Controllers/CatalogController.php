<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class CatalogController extends Controller
{
    //
    public function show($category)
    {
        if($category=='all'){
            $products = Product::all();
        }
        else{
            $products = Product::where('category_id',$category)->get();
        }
        return view('catalog', ['products' => $products,'categories' => Category::all()]);
    }
}
