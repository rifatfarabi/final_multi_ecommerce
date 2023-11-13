@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-lg-6 ms-4 mt-3">
            <div class="card">
                <div class="card-header py-3">
                    <h5 class="mb-0 h6">Product Information</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                            <label for="name" class="col-md-3 form-label">Name</label>
                            <div class="col-md-9">
                                <input type="text" class="col-md-9 form-control" id="name" name="name">
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
                                <input type="text" class="col-md-9 form-control" id="unit" name="unit">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="purchase_qty" class="col-md-3 form-label">Purchase Quantity</label>
                            <div class="col-md-9">
                                <input type="text" class="col-md-9 form-control" id="purchase_qty" name="purchase_qty">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="thumbnail_image" class="col-md-3 form-label">Thumbnail Image</label>
                            <div class="col-md-9">
                                <input class="form-control" type="file" id="thumbnail_image" name="thumbnail_image">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="unit_price" class="col-md-3 form-label">Unit Price</label>
                            <div class="col-md-9">
                                <input type="text" class="col-md-9 form-control" id="unit_price" name="unit_price">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="quantity" class="col-md-3 form-label">Quantity</label>
                            <div class="col-md-9">
                                <input type="text" class="col-md-9 form-control" id="quantity" name="quantity">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="sku" class="col-md-3 form-label">SKU</label>
                            <div class="col-md-9">
                                <input type="text" class="col-md-9 form-control" id="sku" name="sku">
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
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
