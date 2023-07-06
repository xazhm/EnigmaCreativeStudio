<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function admin_index()
    {
        return view('/admin.dashboard');
    }

    public function client_index()
    {
        return view('/index2');
    }
}
