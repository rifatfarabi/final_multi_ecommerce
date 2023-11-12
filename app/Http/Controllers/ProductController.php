<?php

namespace App\Http\Controllers;

use App\Http\Requests\Product\StoreProductRequest;
use App\Http\Requests\Product\UpdateProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::paginate(15);
        return view('products.index', compact('products'));
    }

    public function create()
    {
        return view('products.create');
    }


    public function store(StoreProductRequest $request)
    {

        if($request->hasFile('logo'))
        {
            $file = $request->file('logo');
            $extention = $file->getClientOriginalExtension();
            $fileName = time().'.'.$extention;
            $file->move('uploads/brands/', $fileName);
        }

        $brand = Product::create([
            "name" => $request->name,
            "meta_title" => $request->meta_title,
            "meta_description" => $request->meta_description,
            "logo" => $fileName,

        ]);

        return redirect()->route('products.index')->with('message', 'Product created Successfully');
    }

    public function show(string $id)
    {
        //
    }


    public function edit(string $id)
    {
        $product = Product::find($id);
        return view('product.edit', compact('product'));
    }


    public function update(UpdateProductRequest $request, string $id)
    {

        $product = Product::find($id);

        if($request->hasFile('logo'))
        {
            $file = $request->file('logo');
            $extention = $file->getClientOriginalExtension();
            $fileName = time().'.'.$extention;
            $file->move('uploads/brands/', $fileName);
        }

        $product->update([
            "name" => $request->name,
            "logo" => $fileName,
            "meta_title" => $request->meta_title,
            "meta_description" => $request->meta_description,
        ]);

       return redirect()->route('products.index')->with('message','Product Updated Successfully');
    }


    public function destroy(string $id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect()->route('products.index')->with('message','Product Updated Successfully');
    }
}
