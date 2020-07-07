<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    public function index(){
        $prodotti = Product::all();
        $data = [
            "prodotti" => $prodotti
        ];
        // dd($prodotti);
        // return view('products', ['products' => $prodotti]);
        return view('products')->with($data);
    }
}
