<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
class ProductController extends Controller
{
    
    //
         function index(){
               $data = Product::all(); //show all the product table in jason format 
              return view('product', ['product'=>$data]);
         }
}
