<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }
    public function login()
    {
        return view('/login');
    }
    public function registrasi()
    {
        return view('/registrasi');
    }
    public function loginadmin()
    {
        return view('/loginadmin');
    }
    public function dashboard()
    {
        return view('/dashboard');
    }
}
