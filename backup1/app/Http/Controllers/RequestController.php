<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RequestController extends Controller
{
    public function showafter()
    {
        return view('/design-request');
    }
}
