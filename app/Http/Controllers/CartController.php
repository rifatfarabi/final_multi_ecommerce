<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Expr\New_;
use Str;

class CartController extends Controller
{

    public function index()
    {
        $carts = Cart::all();
       return view('cart.index',compact('carts'));
    }


    public function store(Request $request)
    {
       //
    }


    public function show(Request $request, string $id)
    {

      $session_data = session()->get('name');

      $user = Auth::user();
        $product = Product::find($id);



        $cart = new Cart();
        $cart->product_id = $product->id;
        // $cart->user_id = $user->id;
        $cart->quantity = $product->quantity;

        if($session_data)
        {
            $cart->temp_user_id = $session_data;
        }
        else
        {
            $random = Str::random(5);
            $request->session()->put('name', $random);
            $cart->temp_user_id = $random;

        }

        $cart->save();

        return redirect()->back();


    }

    public function destroy(string $id)
    {
       //
    }

    public function addQuantity($id){

        $cart = Cart::find($id);
        $cart->update([
            "quantity" => $cart->quantity + 1,
        ]);

        return redirect()->back();
    }


}
