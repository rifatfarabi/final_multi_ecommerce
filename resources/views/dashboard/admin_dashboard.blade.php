@extends('layouts.admin')

@section('content')

    <div class="row">
        <div class="col">
            <h2>Welcome to Admin Dashboard</h2>
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

@endsection

