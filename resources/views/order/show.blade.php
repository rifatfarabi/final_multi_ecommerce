@extends('layouts.app')

@section('content')
    @include('component.main_menu')

    <section id="contact-us" class="contact-us section">
        <div class="container">
            <div class="contact-head">
                <div class="row">
                    <div class="col-lg-12 col-12">
                        <div class="form-main">
                            <h2 class="text-center">Thank you!</h2>
                            <p class="text-dark text-center my-3" style="font-size: 20px">Your order  <b> #{{ $checkout->order_code }} </b>  has been placed!</p>
                            <p class="text-dark mb-5">We sent an email to <b>support.bismillah@gmail.com</b> with your order confirmation and receipt. If
                            the email hasn't arrived within two minutes, please check your spam folder to see if the email
                            was routed there.</p>
                            <h6>Time Placed: {{ $checkout->created_at }} </h6>

                            <div class="button5 mt-5 text-center">
                                <a href="{{ route('welcome') }}" class="btn btn-primary">Continue shopping</a>
                            </div>

                        </div>

                    </div>

                </div>
            </div>
        </div>
    </section>

@endsection
