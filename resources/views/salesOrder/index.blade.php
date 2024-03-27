@extends('layouts.admin')

@section('content')
    <div class="aiz-titlebar text-left mx-3 mt-2 mb-3">
        <div class="row align-items-center">
            <div class="col-md-6">
                <h1 class="h3">All Orders</h1>
            </div>
            {{-- <div class="col-md-6 text-md-end">
                <a href="{{ route('categories.create') }}" class="btn btn-primary">
                    <span>Add New Category</span>
                </a>
            </div> --}}
        </div>
    </div>
    <div class="card mx-3">
        <div class="card-header row d-block d-md-flex">
            <div class="col">
                <div class="form-group mb-0">
                    <input type="date" class="form-control" name="start_date" id="start_date" placeholder="{{ ('Start Date') }}"  date-format="DD-MM-Y">
                </div>
            </div>
            <div class="col">
                <div class="form-group mb-0">
                    <input type="date" class="form-control" name="end_date" id="end_date" placeholder="{{ ('End Date') }}"  date-format="DD-MM-Y">
                </div>
            </div>
            <div class="col">
                <div class="form-group mb-0">
                    <input type="search" class="form-control" name="search" id="search" placeholder="{{ ('Query') }}">
                </div>
            </div>
        </div>
        <div class="card-body">
            <table class="table aiz-table mb-0">
                <thead>
                    <tr>
                        <th>Order Code</th>
                        <th>Name</th>
                        <th>Customer</th>
                        <th>Area</th>
                        <th>Amount</th>
                        <th>Delivery Status</th>
                        <th>Payment Status</th>
                        <th>Order Time</th>
                        <th>Delivery Time</th>
                        <th>Refund</th>
                        <th width="10%" class="text-right">{{ 'Options' }}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($orders as $key => $order)
                        <tr>
                            {{-- <td>{{ $key + 1 }}</td> --}}
                            {{-- <td>{{ $key + 1 + ($orders->currentPage() - 1) * $orders->perPage() }}</td> --}}
                            <td>{{ $order->order_code }}</td>
                            <td>{{ $order->first_name }}</td>
                            <td>{{ $order->phone }}</td>
                            <td>{{ $order->state_division }}</td>
                            <td>{{ $order->grand_total }}</td>
                            <td>{{ $order->unpaid }}</td>
                            <td>{{ $order->unpaid }}</td>
                            <td>{{ $order->created_at }}</td>
                            <td>{{ $order->created_at}}</td>
                            <td>{{ $order->featured}}</td>


                            <td>
                                <div class="d-flex">
                                    <a class="btn btn-primary btn-icon btn-circle btn-sm mx-2"
                                        href="{{ route('orders.show', $order->id) }}" title="Edit">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <div>
                                        <form action="{{ route('orders.destroy', $order->id) }}" method="POST"
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
            <div class="aiz-pagination mt-3">
                {{ $orders->links() }}
            </div>
        </div>
    </div>
@endsection
