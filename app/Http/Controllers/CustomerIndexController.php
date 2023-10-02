<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerIndexController extends Controller
{
    public function index(){
        return view('frontend.welcome');
    }
}
