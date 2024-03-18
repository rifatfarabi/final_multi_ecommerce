
@extends('layouts.admin')

@section('content')
<section class="h-100 gradient-custom">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-lg-10 col-xl-8">
          <div class="card" style="border-radius: 10px;">
            <div class="card-header px-4 py-5">
              <h5 class="text-muted mb-0">Thanks for your Order, <span style="color: #a8729a;">{{ $order->first_name}}</span>!</h5>
            </div>
            <div class="card-body p-4">
              <div class="d-flex justify-content-between align-items-center mb-4">
                <p class="lead fw-normal mb-0" style="color: #a8729a;">Receipt</p>
                <p class="small text-muted mb-0">Receipt Voucher : 1KAU9-84UIL</p>
              </div>
              <div class="card shadow-0 border mb-4">
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-3">
                      <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/Products/13.webp"
                        class="img-fluid" alt="Phone">
                    </div>
                    <div class="col-md-3 text-center d-flex justify-content-center align-items-center">
                      <p class="text-muted mb-0">Samsung Galaxy</p>
                    </div>

                    <div class="col-md-3 text-center d-flex justify-content-center align-items-center">
                      <p class="text-muted mb-0 small">Qty: 1</p>
                    </div>
                    <div class="col-md-3 text-center d-flex justify-content-center align-items-center">
                      <p class="text-muted mb-0 small">$499</p>
                    </div>
                  </div>
                  <hr class="mb-4" style="background-color: #e0e0e0; opacity: 1;">
                </div>
              </div>
              <div class="card shadow-0 border mb-4">
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-3">
                      <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/Products/1.webp"
                        class="img-fluid" alt="Phone">
                    </div>
                    <div class="col-md-3 text-center d-flex justify-content-center align-items-center">
                      <p class="text-muted mb-0">iPad</p>
                    </div>
                    <div class="col-md-3 text-center d-flex justify-content-center align-items-center">
                      <p class="text-muted mb-0 small">Qty: 1</p>
                    </div>
                    <div class="col-md-3 text-center d-flex justify-content-center align-items-center">
                      <p class="text-muted mb-0 small">$399</p>
                    </div>
                  </div>
                  <hr class="mb-4" style="background-color: #e0e0e0; opacity: 1;">
                </div>
              </div>

              <div class="d-flex justify-content-between pt-2">
                <p class="fw-bold mb-0">Order Details</p>
                <p class="text-muted mb-0"><span class="fw-bold me-4">Total</span> $898.00</p>
              </div>

              <div class="d-flex justify-content-between pt-2">
                <p class="text-muted mb-0">Invoice Number : {{ $order->order_id}}</p>
                <p class="text-muted mb-0"><span class="fw-bold me-4">Discount</span> $19.00</p>
              </div>

              <div class="d-flex justify-content-between">
                <p class="text-muted mb-0">Invoice Date : {{ $order->created_at->format('M d, Y') }}</p>
                {{-- <p class="text-muted mb-0">Invoice Date : {{ date('M d, Y', Strtotime($order->created_at))}}</p> --}}
                <p class="text-muted mb-0"><span class="fw-bold me-4">GST 18%</span> 123</p>
              </div>

              <div class="d-flex justify-content-between mb-5">
                <p class="text-muted mb-0">Recepits Voucher : 18KU-62IIK</p>
                <p class="text-muted mb-0"><span class="fw-bold me-4">Delivery Charges</span> Free</p>
              </div>
            </div>
            <div class="card-footer border-0 px-4 py-5"
              style="background-color: #a8729a; border-bottom-left-radius: 10px; border-bottom-right-radius: 10px;">
              <h5 class="d-flex align-items-center justify-content-end text-white text-uppercase mb-0">Total
                paid: <span class="h2 mb-0 ms-2">$1040</span></h5>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  @endsection
