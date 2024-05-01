<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function getProducts(){

        $products = Product::all();
        return view('welcome', [
            'products' => $products,
        ]);
    }
    public function getProductForm(){
        return view('createProduct');
    }
    public function createProduct(Request $request){
       $product = new Product();
       $product->name = $request->name;
       $product->price = $request->price;
       $product->photo = $request->photo;
       $product->save();
       return redirect()->route('getProducts');
    }
    public function updateProduct(Request $request, $id){
        $product = Product::find($id);
        $product->name = $request->name;
        $product->price = $request->price;
        $product->photo = $request->photo;
        $product->save();
        return redirect()->route('getProducts');
    }
    public function deleteProduct($id){
        Product::find($id)->delete();
        return back();
    }
}
