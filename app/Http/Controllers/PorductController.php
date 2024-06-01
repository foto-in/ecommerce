<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class PorductController extends Controller
{
    public function getAllProduct()
    {
        $product = Product::all();
        return response()->json($product);
    }

    public function addProduct(Request $request)
    {
        $product = new Product();
        $product->nama = $request->nama;
        $product->jumlah = $request->jumlah;
        $product->harga = $request->harga;
        $product->image = $request->image;
        $product->save();
        return response()->json($product);
    }
}
