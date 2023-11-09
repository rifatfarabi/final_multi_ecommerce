<?php

namespace App\Http\Controllers;

use App\Http\Requests\Brand\StoreBrandRequest;
use App\Http\Requests\Brand\UpdateBrandRequest;
use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function index()
    {
        $brands = Brand::paginate(15);
        return view('brand.index', compact('brands'));
    }

    public function create()
    {

        return view('brand.create');
    }


    public function store(StoreBrandRequest $request)
    {

        if($request->hasFile('logo'))
        {
            $file = $request->file('logo');
            $extention = $file->getClientOriginalExtension();
            $fileName = time().'.'.$extention;
            $file->move('uploads/brands/', $fileName);
        }

        $brand = Brand::create([
            "name" => $request->name,
            "meta_title" => $request->meta_title,
            "meta_description" => $request->meta_description,
            "logo" => $fileName,

        ]);

        return redirect()->route('brands.index')->with('message', 'Brands created Successfully');
    }

    public function show(string $id)
    {
        //
    }


    public function edit(string $id)
    {
        $brand = Brand::find($id);
        return view('brand.edit', compact('brand'));
    }


    public function update(UpdateBrandRequest $request, string $id)
    {

        $brand = Brand::find($id);

        if($request->hasFile('logo'))
        {
            $file = $request->file('logo');
            $extention = $file->getClientOriginalExtension();
            $fileName = time().'.'.$extention;
            $file->move('uploads/brands/', $fileName);
        }

        $brand->update([
            "name" => $request->name,
            "logo" => $fileName,
            "meta_title" => $request->meta_title,
            "meta_description" => $request->meta_description,
        ]);

       return redirect()->route('categories.index')->with('message','Brand Updated Successfully');
    }


    public function destroy(string $id)
    {
        $brand = Brand::find($id);
        $brand->delete();
        return redirect()->route('brands.index')->with('message','Brand Updated Successfully');
    }
}
