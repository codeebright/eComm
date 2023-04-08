<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use Illuminate\Auth\Events\Login;

class ProductController extends Controller
{
    
    //
         function index(){
               $data = Product::all(); //show all the product table in jason format 
              return view('product', ['product'=>$data]);
         }
         function detail($id){
          $detail = Product::find($id);
          return view('detail', ['product'=>$detail]);
         }
         function addToCart(Request $req){
          if($req->session()->has('user'))
          {
             $cart= new Cart;
             $cart->user_id=$req->session()->get('user')['id']; //have a question
             $cart->product_id=$req->product_id;
             $cart->save(); //have a question
             return redirect('/');
  
          }
          else
          {
              return redirect('/login');
          }
         }
}
