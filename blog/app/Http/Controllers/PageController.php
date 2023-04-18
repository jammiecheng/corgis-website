<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    function home(){
        return view('layouts/app');
    }

    function selection(){
        return view('products/selection');
    }

    function login(){
        return view('users/login');
    }
}
