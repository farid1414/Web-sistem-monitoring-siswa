<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrtuController extends Controller
{
    public function homeortu()
    {
        return view('/Ortu/Homeortu');
    }
}
