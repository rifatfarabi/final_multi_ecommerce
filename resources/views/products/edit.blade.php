@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-lg-6 ms-4 mt-3">
        <div class="card">
            <div class="card-header py-3">
                <h5 class="mb-0 h6">Product Information</h5>
            </div>
            <div class="card-body">
                <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row mb-3">
                        <label for="name" class="col-md-3 form-label">Name</label>
                        <div class="col-md-9">
                            <input type="text" class="col-md-9 form-control" id="name" name="name" value="{{ $product->name }}">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="logo" class="col-md-3 form-label">Category</label>
                        <div class="col-md-9">
                            <select class="form-select form-select-md" name="category_id" aria-label="Default select example">
                                @foreach ($categories as $cat)
                                  <option value="{{ $cat->id}}">{{ $cat->name}}</option>
                                @endforeach
                              </select>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="logo" class="col-md-3 form-label">Brand</label>
                        <div class="col-md-9">
                            <select class="form-select form-select-md" name="brand_id" aria-label="Default select example">
                                <option selected value="">Select Brand</option>
                                @foreach ($brands as $brand)
                                 <option value="{{ $brand->id}}">{{ $brand->name}}</option>
                                @endforeach
                              </select>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="unit" class="col-md-3 form-label">Unit</label>
                        <div class="col-md-9">
                            <input type="text" class="col-md-9 form-control" id="unit" name="unit" value="{{ $product->unit }}">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="purchase_qty" class="col-md-3 form-label">Purchase Quantity</label>
                        <div class="col-md-9">
                            <input type="text" class="col-md-9 form-control" id="purchase_qty" name="purchase_qty" value="{{ $product->purchase_qty }}">
                        </div>
                    </div>

                    <div class="row mb-3">
                        {{-- <img src="{{ asset('uploads/products/'. $product->thumbnail_image)}}" alt=""> --}}
                        <label for="thumbnail_image" class="col-md-3 form-label">Thumbnail Image</label>
                        <div class="col-md-9">

                            <input class="form-control" type="file" id="thumbnail_image" name="thumbnail_image">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="unit_price" class="col-md-3 form-label">Unit Price</label>
                        <div class="col-md-9">
                            <input type="text" class="col-md-9 form-control" id="unit_price" name="unit_price" value="{{ $product->unit_price }}">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="quantity" class="col-md-3 form-label">Quantity</label>
                        <div class="col-md-9">
                            <input type="text" class="col-md-9 form-control" id="quantity" name="quantity" value="{{ $product->quantity }}">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="sku" class="col-md-3 form-label">SKU</label>
                        <div class="col-md-9">
                            <input type="text" class="col-md-9 form-control" id="sku" name="sku" value="{{ $product->sku }}">
                        </div>
                    </div>


                    <div class="row mb-3">
                        <label for="description" class="col-md-3 form-label">Description</label>
                        <div class="col-md-9">
                            <textarea class="form-control" id="description" name="description" rows="3"></textarea>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="featured" class="col-md-3 form-label">Featured</label>
                        <div class="col-md-9">
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="featured" name="featured" value="1">
                            </div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="refundable" class="col-md-3 form-label">Refundable</label>
                        <div class="col-md-9">
                            <div class="form-check form-switch">
                                {{-- <label class="form-check-label" for="refundable">Refundable</label> --}}
                                <input class="form-check-input" type="checkbox" id="refundable" name="refundable" value="1">
                            </div>

                        </div>
                    </div>

                    <div class="text-end">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


    {{-- <div class="row">
        <div class="col-lg-6 mx-auto mt-3">
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0 h6">Brand Information</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('brands.update', $brand->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row mb-3">
                            <label for="name" class="col-md-3 form-label">Name</label>
                            <div class="col-md-9">
                                <input type="text" class="col-md-9 form-control" id="name" name="name"
                                    value="{{ $brand->name }}">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="logo" class="col-md-3 form-label">Logo</label>
                            <div class="col-md-9">
                                <input class="form-control" type="file" id="logo" name="logo">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="meta_title" class="col-md-3 form-label">Meta Title</label>
                            <div class="col-md-9">
                                <input type="text" class="col-md-9 form-control" id="meta_title" name="meta_title"
                                    value="{{ $brand->meta_title }}">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="meta_description" class="col-md-3 form-label">Meta Description</label>
                            <div class="col-md-9">
                                {{-- <input type="text" class="col-md-9 form-control" id="meta_description" name="meta_description"
                                    value="{{ $brand->meta_description }}"> --}}
                                <textarea class="form-control" id="meta_description" name="meta_description" rows="3"></textarea>
                            </div>
                        </div>


                        {{-- <div class="mb-3 form-check">
                      <input type="checkbox" class="form-check-input" id="exampleCheck1">
                      <label class="form-check-label" for="exampleCheck1">Featured</label>
                    </div> --}}
                        <div class="text-end">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div> --}}
@endsection
