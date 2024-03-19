<?php

namespace App\Http\Controllers;

use App\Http\Requests\Order\StoreOrderRequest;
use App\Models\Cart;
use App\Models\Order;
use App\Models\Orderitem;
use Illuminate\Http\Request;

use function PHPUnit\TextUI\XmlConfiguration\php;

class OrderController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        //
    }


    public function store(StoreOrderRequest $request)
    {

          $order_code = time();

        $checkout = Order::create([
            "first_name" => $request->first_name,
            "last_name" => $request->last_name,
            "email" => $request->email,
            "phone" => $request->phone ?? '',
            "country" => $request->country,
            "state_division" => $request->state_division,
            "address_line1" => $request->address_line1,
            "address_line2" => $request->address_line2,
            "postal_code" => $request->postal_code,
            "company" => $request->company,
        ]);


        $session_data = session()->get('name');
        $carts = Cart::where('temp_user_id', $session_data)->get();

        foreach($carts as $cartitem){
            // dd($cartitem->product);
            $orderItems = Orderitem::create([
                "order_id" => $checkout->id,
                "product_id" => $cartitem->product_id,
                "quantity" => $cartitem->quantity,
                "unit_price" => $cartitem->product->unit_price,
            ]);
        }


        $session_data = session()->get('name');
        $cart = Cart::where('temp_user_id', $session_data)->delete();
        return redirect()->route('order.show', $checkout->id);
    }


    public function show(string $id)
    {
        $checkout = Order::find($id);
        return view('order.show',compact('checkout'));
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
