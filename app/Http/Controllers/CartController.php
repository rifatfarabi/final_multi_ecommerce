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


}
