<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RequestController extends Controller
{
    public function index()
    {
        return view('/design-request');
    }
}
