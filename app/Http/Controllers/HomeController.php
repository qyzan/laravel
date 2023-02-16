<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index()
    {
        return view('admin.home');
    }

    function admin()
    {
        return view('admin.dashboard');
    }
}
