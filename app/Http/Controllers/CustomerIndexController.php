<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CustomerIndexController extends Controller
{
    public function index(){
        $products = Product::all();
        $obts = Product::limit(3)->get();
        // $carts = Cart::where('temp_user_id', 'HuFWR')->get();
        return view('frontend.welcome', compact('products','obts'));
    }

    public function cartRemove($id){
        $cart = Cart::find($id);
        $cart->delete();
        return redirect()->back();
        // return redirect()->route('welcome')->with('seccess','Cart Item Successfully Remove');
    }

    public function customerLogout(){
        Auth::logout();
        return redirect('login');
    }

}

