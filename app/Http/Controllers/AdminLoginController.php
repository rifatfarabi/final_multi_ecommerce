<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminLoginController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest');
    }
    public function adminLogin(){
        return view('auth.admin_login');
    }
}
