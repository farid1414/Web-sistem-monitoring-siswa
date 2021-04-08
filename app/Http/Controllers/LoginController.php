<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\admin;
use App\Models\guru;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function postlogin(Request $request)
    {
        // dd($request->all());
        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect('/Admin/Homeadmin');
        } 
        elseif (Auth::guard('web')->attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect('/dashboard');
        }
        return redirect('/login');
    }

    public function logout(Request $request)
    {
        // auth::logout();
        // return redirect('/');

        if (auth::guard('admin')->check()) {
            auth::guard('admin')->logout();
        } elseif (auth::guard('web')->check()) {
            auth::guard('web')->logout();
        }
        return redirect('/');
    }
    public function simpanregistrasi(Request $request)
    {
        // dd($request->all());

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'remember_token' => Str::random(60),


        ]);
        return view('/login');
    }

}
