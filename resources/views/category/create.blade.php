@extends('layouts.admin')

@section('content')

<div class="row">
    <div class="col-lg-6 mx-auto mt-3">
        <div class="card">
            <div class="card-header">
                <h5 class="mb-0 h6">Category Information</h5>
            </div>
            <div class="card-body">
                <form action="{{ route('categories.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row mb-3">
                      <label for="name" class="col-md-3 form-label">Name</label>
                      <div class="col-md-9">
                        <input type="text" class="col-md-9 form-control" id="name" name="name">
                      </div>
                    </div>

                    <div class="row mb-3">
                        <label for="icon" class="col-md-3 form-label">Icon</label>
                        <div class="col-md-9">
                            <input class="form-control" type="file" id="icon" name="icon">
                        </div>
                      </div>

                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="featured" name="featured" value="1">
                        <label class="form-check-label" for="featured">Featured</label>
                    </div>

                    {{-- <div class="mb-3 form-check">
                      <input type="checkbox" class="form-check-input" id="exampleCheck1">
                      <label class="form-check-label" for="exampleCheck1">Featured</label>
                    </div> --}}
                    <div class="text-end">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                  </form>
            </div>
        </div>
    </div>
</div>

@endsection
