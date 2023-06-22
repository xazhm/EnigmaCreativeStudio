<?php

namespace App\Http\Controllers;

use App\Models\Design;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class DesignController extends Controller
{
    public function index()
    {
        $designs = Design::all();
        $categories = Category::all();
        return view('/admin.product-list', [
            'designs' => $designs,
            'categories' => $categories,
        ]);
    }

    public function add()
    {
        $categories = Category::all();
        return view('/admin.product-add', [
            'categories' => $categories,
        ]);
    }

    public function store(Request $request)
    {
        Validator::make($request->all(), [
            'name' => 'required',
            'description' => 'required',
        ])->validate();

        $newName = '';
        if($request->file('image')) {
            $extension = $request->file('image')->getClientOriginalExtension();
            $newName = $request->name.'-'.now()->timestamp.'.'.$extension;
            $request->file('image')->storeAs('photo', $newName);
        }
        $request['photo'] = $newName;

        $designs = Design::create($request->all());
        $designs->category_id = $request->input('category_id');
        return redirect('/admin.product-list')->with('success', 'Item Added Succesfully');
    }

    public function edit($slug)
    {
        $designs = Design::where('slug', $slug)->with('categories')->first();
        $categories = Category::all();
        return view('/admin.product-edit', [
            'designs' => $designs,
            'categories' => $categories,
        ]);
    }

    public function update(Request $request, $slug)
    {
        Validator::make($request->all(), [
            'name' => 'required',
            'description' => 'required',
        ])->validate();

        $designs = Design::where('slug', $slug)->first();
        $designs->slug = null;

        if($request->hasFile('image')){
            $extension = $request->file('image')->getClientOriginalExtension();
            $newName = $request->name.'-'.now()->timestamp.'.'.$extension;

            Storage::delete('photo/'.$designs->photo);

            $request->file('image')->storeAs('photo', $newName);
            $request['photo'] = $newName;
            $designs->photo = $newName;
        }

        $designs->update($request->all());
        $designs->category_id = $request->input('categories');
        $designs->update();

        return redirect('/admin.product-list')->with('success', 'Item Updated Successfully');
    }
}
