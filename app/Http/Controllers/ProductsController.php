<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;

class ProductsController extends Controller
{
    public function blusas()
    {
        $prod = Products::where('category', '=', 'Blusas')->first();
        $products = Products::where('category', '=', 'Blusas')->get();
        return view('layouts.products', [
            'products' => $products,
            'prod' => $prod
        ]);     
    }

    public function blazers()
    {
        $prod = Products::where('category', '=', 'Blazers')->first();
        $products = Products::where('category', '=', 'Blazers')->get();
        return view('layouts.products', [
            'products' => $products,
            'prod' => $prod
        ]);
    }

    public function bolsas()
    {
        $prod = Products::where('category', '=', 'Bolsas')->first();
        $products = Products::where('category', '=', 'Bolsas')->get();
        return view('layouts.products', [
            'products' => $products,
            'prod' => $prod
        ]);
    }

    public function calcas()
    {
        $prod = Products::where('category', '=', 'Calcas')->first();
        $products = Products::where('category', '=', 'Calcas')->get();
                return view('layouts.products', [
            'products' => $products,
            'prod' => $prod
        ]);
    }

    public function vestidos()
    {
        $prod = Products::where('category', '=', 'Vestidos')->first();
        $products = Products::where('category', '=', 'Vestidos')->get();
                return view('layouts.products', [
            'products' => $products,
            'prod' => $prod
        ]);
    }

    public function academia()
    {
        $prod = Products::where('category', '=', 'Academia')->first();
        $products = Products::where('category', '=', 'Academia')->get();
                return view('layouts.products', [
            'products' => $products,
            'prod' => $prod
        ]);
    }
}
