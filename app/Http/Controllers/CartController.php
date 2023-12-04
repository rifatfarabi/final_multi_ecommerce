<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Expr\New_;

class CartController extends Controller
{

    public function index()
    {
       //
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
       //
    }


    public function show(string $id)
    {
        $user = Auth::user();
        $product = Product::find($id);

        $cart = new Cart();
        $cart->product_id = $product->id;
        // $cart->user_id = $user->id;
        $cart->quantity = $product->quantity;

        $cart->save();

        return redirect()->back();


    }

    public function edit(string $id)
    {
        //
    }


    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }

    public function showCart()
    {
        $product = Product::all();
        $carts = Cart::where('product_id', $product);
        // $product = Product::all();
        return view('cart.index', compact('carts', 'product'));
    }


}
