<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class authController extends Controller
{
    public function register()
    {
        return view('auth.register');
    }

    public function process_register()
    {
        //
    }

    public function login()
    {
        return view('auth.login');
    }

    public function process_login()
    {
        //
    }

    public function forgot_password()
    {
        return view('auth.forgot_password');
    }

    public function process_forgot_password()
    {
        //
    }
}
