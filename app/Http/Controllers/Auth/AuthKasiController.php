<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AuthKasiController extends Controller
{
    public function FormLogin ()
    {
        return view('kasi.login');
    }
}
