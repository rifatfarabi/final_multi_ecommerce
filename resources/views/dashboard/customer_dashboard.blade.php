@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col">
            <h2>Welcome to customer Dashboard</h2>
        </div>

        <div>
            <a class="dropdown-item" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </div>
    </div>
</div>

@endsection

