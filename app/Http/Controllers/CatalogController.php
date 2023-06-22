<?php

namespace App\Http\Controllers;

use App\Models\Design;
use App\Models\Category;
use Illuminate\Http\Request;

class CatalogController extends Controller
{
    public function index(){
        $designs = Design::all();
        $categories = Category::all();
        return view('/catalog', [
            'designs' => $designs,
            'categories' => $categories,
        ]);
    }
}
