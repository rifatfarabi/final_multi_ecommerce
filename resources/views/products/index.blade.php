@extends('layouts.admin')

@section('content')
    <div class="aiz-titlebar text-left mx-3 mt-2 mb-3">
        <div class="row align-items-center">
            <div class="col-md-6">
                <h1 class="h3">All Products</h1>
            </div>
            <div class="col-md-6 text-md-end">
                <a href="{{ route('products.create') }}" class="btn btn-primary">
                    <span>Add New Product</span>
                </a>
            </div>
        </div>
    </div>
    <div class="card mx-3">
        <div class="card-header d-block d-md-flex">
            <h5 class="mb-0 h6">All Product</h5>
            {{-- <form class="" id="sort_categories" action="" method="GET">
            <div class="box-inline pad-rgt pull-left">
                <div class="" style="min-width: 200px;">
                    <input type="text" class="form-control" id="search" name="search"@isset($sort_search) value="{{ $sort_search }}" @endisset placeholder="Type name & Enter">
                </div>
            </div>
        </form> --}}
        </div>
        <div class="card-body">
            <table class="table aiz-table mb-0">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Added By</th>
                        <th>Info</th>
                        <th>Total Stock</th>
                        <th>Featured</th>
                        <th width="10%" class="text-right">{{ 'Options' }}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $key => $product)
                        <tr>
                            <td>{{ $key + 1 + ($products->currentPage() - 1) * $products->perPage() }}</td>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->logo }}</td>
                            <td>{{ $product->meta_title }}</td>
                            <td>{{ $product->meta_description }}</td>

                            <td>
                                <div class="d-flex">
                                    <a class="btn btn-primary btn-icon btn-circle btn-sm mx-2"
                                        href="{{ route('products.edit', $product->id) }}" title="Edit">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <div>
                                        <form action="{{ route('products.destroy', $product->id) }}" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-icon btn-circle btn-sm">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </form>
                                    </div>
                                </div>

                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
            <div class="aiz-pagination">
                {{ $products->links() }}
            </div>
        </div>
    </div>
@endsection

