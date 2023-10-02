<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth','customer']);
    }

    public function customerDashboard(){
        return view('dashboard.customer_dashboard');
    }
}
