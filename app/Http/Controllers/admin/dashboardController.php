<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class dashboardController extends Controller
{
    public function dashboard()
    {
        $title = "Dashboard Page";
        return view('admin.dashboard.dashboard', compact('title'));
    }
}
