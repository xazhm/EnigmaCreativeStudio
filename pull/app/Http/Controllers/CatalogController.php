<?php

namespace App\Http\Controllers;

use App\Models\Design;
use App\Models\Category;
use Illuminate\Http\Request;

class CatalogController extends Controller
{
    public function index(Request $request){
        $designs = Design::query();
        $categories = $request->input('categories');

        if ($categories) {
            $categories = (array) $categories;
            $designs->whereIn('category_id', $categories);
        }

        $designs = $designs->get();

        if (!$categories) {
            $designs = Design::all();
        }

        return view('/catalog', [
            'designs' => $designs,
            'categories' => $categories,
        ]);
    }
}
