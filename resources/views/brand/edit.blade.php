@extends('layouts.admin')

@section('content')
    <div class="row">
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
    </div>
@endsection
