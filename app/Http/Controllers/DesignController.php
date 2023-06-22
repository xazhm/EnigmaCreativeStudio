<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DesignController extends Controller
{
    public function add()
    {
        return view('/admin.product-add');
    }
    public function edit()
    {
        return view('/admin.product-edit');
    }
}
