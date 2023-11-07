<?php

namespace App\Http\Controllers;

use App\Http\Requests\Categorry\StoreCategoryRequest;
use App\Http\Requests\Categorry\UpdateCategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function index()
    {
        $categories = Category::paginate(15);
        return view('category.index', compact('categories'));
    }

    public function create()
    {

        return view('category.create');
    }


    public function store(StoreCategoryRequest $request)
    {
        // dd(request()->all());
        $category = Category::create([
            "name" => $request->name,
            "icon" => $request->icon,
            "featured" => $request->featured
        ]);

        return redirect()->route('categories.index')->with('success', 'Category created Successfully');
    }

    public function show(string $id)
    {
        //
    }


    public function edit(string $id)
    {
        //
    }


    public function update(UpdateCategoryRequest $request, string $id)
    {
        //
    }


    public function destroy(string $id)
    {
        //
    }
}
