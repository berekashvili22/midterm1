<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Prodcuts;
use App\Store;

class ProductsController extends Controller
{
    public function index() {
        $products = Prodcuts::all();
        $stores = Store::all();
        // dd($product);
        return view('products.index', compact('products', 'stores'));
    }

    public function show(\App\Prodcuts $product) {

        return view('products.show', compact('product'));
    }
}
