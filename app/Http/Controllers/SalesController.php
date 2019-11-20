<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
class SalesController extends Controller
{
    public function index()
    {//get all products
      $products = Product::all();
        return view('sales.index',compact('products'));
}
}
