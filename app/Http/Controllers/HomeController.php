<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Radiocreaterequest;
use Illuminate\Support\Facades\DB;
use App\Models\Radio;
use App\Models\User;
use App\Models\Rating;

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
    public function cobaradio()
    {
        return view('/cobaradio');
    }
    public function buat(Radiocreaterequest  $request)
    {
        Radio::create( [
            'isi'=>$request->radio,
        ]);
        return redirect('/cobaradio');
    }
    public function daftaruser(Request $request)
    {
        $simplePaginate=10;

        $data_user = User::when($request->keyword, function ($query) use ($request) {
            $query ->where('name', 'like', "%{$request->keyword}%")
            ->orWhere('level', 'like', "%{$request->keyword}%");
        })->orderBy('level', 'desc')->simplePaginate($simplePaginate);
    
        $data_user->appends($request->only('keyword'));

        return view('/daftaruser', [
            'name'    => 'User',
            'data_user' => $data_user,
        ])->with('i', ($request->input('page', 1) - 1) * $simplePaginate);

    }

    public function rating()
    {
        return view('/rating');
    }
    public function kirim(Request $request)
    {
        Rating::create([
            'nama'=>$request->nama,
            'email'=>$request->email,
            'keindahan'=>$request->keindahan,
            'ketepatan'=>$request->ketepatan,
            'kegunaan'=>$request->kegunaan,
            'saran'=>$request->saran,
            'kritik'=>$request->kritik,
        ]);
        return redirect('/rating');
    }
}
