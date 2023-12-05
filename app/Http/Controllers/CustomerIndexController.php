<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;

class CustomerIndexController extends Controller
{
    public function index(){
        $products = Product::all();
        // $carts = Cart::where('temp_user_id', 'HuFWR')->get();
        return view('frontend.welcome', compact('products'));
    }

    // public function cartItems()
    // {
    //     $carts = Cart::where('temp_user_id', 'HuFWR')->get();
    //     return view('layouts.app', compact('carts'));
    // }
}

