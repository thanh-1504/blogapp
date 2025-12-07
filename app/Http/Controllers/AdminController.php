<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    function adminDashboard(Request $request) {
        return view("back.pages.dashboard");
    }
}
