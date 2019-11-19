<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
class ProductController extends Controller
{
    public function index()
    {//get all products
       $products = Product::all();

        return view('products.index',compact('products'));
}

public function create()
{
    return view('products.create');
}
public function store(Request $request)
{
    $product= new Product();
    $product ->productCode=$request->productCode;
    $product ->productName=$request->productName;
    $product ->reorderPoint=$request->reorderPoint;
    $product ->idealStock=$request->idealStock;
    $product ->unitPrice=$request->unitPrice;
    $product->save();
    return redirect('/products');
}
}
