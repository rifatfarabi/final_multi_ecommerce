<?php

namespace App\Http\Controllers;

use App\Http\Requests\Order\StoreOrderRequest;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        return view('order.index');
    }


    public function create()
    {
        //
    }


    public function store(StoreOrderRequest $request)
    {
        dd($request->all());
        $checkout = Order::create([
            "first_name" => $request->first_name,
            "last_name" => $request->last_name,
            "email" => $request->email,
            "phone" => $request->phone,
            "country" => $request->country,
            "state_division" => $request->state_division,
            "address_line1" => $request->address_line1,
            "address_line2" => $request->address_line2,
            "postal_code" => $request->postal_code,
            "company" => $request->company,
        ]);

        return redirect()->route('order.index');
    }


    public function show(string $id)
    {
        //
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
