<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index(){
        $products = Product::all();
        // dd($products);
        return view('produk.index',['products'=>$products]);
    }
    public function show($products_code){
        $products = Product::where('products_code',$products_code )->get();
        // $products = Product::find(1);
        // $fresh = $products->fresh();
        // var_dump($products[0]);
        // die();
        // dd($fresh);
        return view('produk.show',['products'=>$products[0]]);
        // var_dump($products_code);
        // dd($products[0]);
        
        // return $products;
    }
}
