<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;

class ProductsController extends Controller
{
    public function blusas()
    {
        $products = Products::all();        
        return view('layouts.products', ['products' => $products]);
    }

    public function blazers()
    {
        $products = Products::all();        
        return view('layouts.products', ['products' => $products]);
    }
}
