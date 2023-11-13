<?php

namespace App\Http\Controllers;

use App\Http\Requests\Product\StoreProductRequest;
use App\Http\Requests\Product\UpdateProductRequest;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Auth;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::paginate(15);
        return view('products.index', compact('products'));
    }

    public function create()
    {
        $categories = Category::all();
        $brands = Brand::all();
        return view('products.create', compact('categories','brands'));
    }


    public function store(StoreProductRequest $request)
    {

        // dd($request->all());
        if($request->hasFile('thumbnail_image'))
        {
            $file = $request->file('thumbnail_image');
            $extention = $file->getClientOriginalExtension();
            $fileName = time().'.'.$extention;
            $file->move('uploads/products/', $fileName);
        }

        if($request->featured == "1")
        {
            $fe = true;
        }else
        {
            $fe = false;
        }

        if($request->refundable == "1")
        {
            $re = true;
        }else
        {
            $re = false;
        }

        $product = Product::create([
            "name" => $request->name,
            "user_id" => Auth::user()->id,
            "category_id" => $request->category_id,
            "brand_id" => $request->brand_id,
            "unit" => $request->unit,
            "purchase_qty" => $request->purchase_qty,
            "thumbnail_image" => $fileName,
            "unit_price" => $request->unit_price,
            "quantity" => $request->quantity,
            "sku" => $request->sku,
            "description" => $request->description,
            "featured" => $fe,
            "refundable" => $re,

        ]);

        return redirect()->route('products.index')->with('message', 'Product Created Successfully');
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
