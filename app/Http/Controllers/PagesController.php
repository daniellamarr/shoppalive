<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('home');
    }
    
    public function shop()
    {
        return view('shop');
    }
    
    public function login()
    {
        return view('auth.login');
    }
    
    // public function register()
    // {
    //     return view('auth.login');
    // }
    
    public function dashboard()
    {
        return view('user.dashboard');
    }
}
