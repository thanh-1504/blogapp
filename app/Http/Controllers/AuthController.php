<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    function loginForm(Request $request) {
        return view("back.pages.auth.login");
    }

    function forgotForm(Request $request) {
        return view("back.pages.auth.forgot");
    }
}
