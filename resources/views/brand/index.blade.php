@extends('layouts.admin')

@section('content')
    <div class="aiz-titlebar text-left mx-3 mt-2 mb-3">
        <div class="row align-items-center">
            <div class="col-md-6">
                <h1 class="h3">All Brands</h1>
            </div>
            <div class="col-md-6 text-md-end">
                <a href="{{ route('brands.create') }}" class="btn btn-primary">
                    <span>Add New Brand</span>
                </a>
            </div>
        </div>
    </div>
    <div class="card mx-3">
        <div class="card-header d-block d-md-flex">
            <h5 class="mb-0 h6">Brands</h5>
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
                        <th>Logo</th>
                        <th>Meta Title</th>
                        <th>Meta Description</th>
                        <th width="10%" class="text-right">{{ 'Options' }}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($brands as $key => $brand)
                        <tr>
                            <td>{{ $key + 1 + ($brands->currentPage() - 1) * $brands->perPage() }}</td>
                            <td>{{ $brand->name }}</td>
                            <td>{{ $brand->logo }}</td>
                            <td>{{ $brand->meta_title }}</td>
                            <td>{{ $brand->meta_description }}</td>

                            <td>
                                <div class="d-flex">
                                    <a class="btn btn-primary btn-icon btn-circle btn-sm mx-2"
                                        href="{{ route('brands.edit', $brand->id) }}" title="Edit">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <div>
                                        <form action="{{ route('brands.destroy', $brand->id) }}" method="POST"
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
                {{ $brands->links() }}
            </div>
        </div>
    </div>
@endsection

