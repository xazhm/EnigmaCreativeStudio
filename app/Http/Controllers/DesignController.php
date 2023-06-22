<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Design;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DesignController extends Controller
{
    public function index()
    {
        $designs = Design::all();
        $categories = Category::all();
        return view('admin.index', ['designs' => $designs, 'categories' => $categories]);
    }


    public function postIndex(Request $request)
    {
        $validated = $request->validate([
            "name" => ["required", "max:255"],
            "detail" => ["required", "max:3000"],
            "harga" => ["required", "max:3000"],
            "image" => ["nullable", "image", "max:5000"],
            "category_id" => "required"
        ], [
            "required" => "Semua atribut harus diisi!",
            "name.max" => "Nama design hanya boleh berisi maksimal :max karakter!",
            "detail.max" => "Deskripsi design hanya boleh berisi maksimal :max karakter!",
            "image" => "Gambar design harus berupa berkas gambar!",
            "image.max" => "Gambar design harus dibawah :max kb!",
        ]);

        $photo = $validated["image"];
        $path = null;
        if ($photo) {
            $path = $photo->store("images");
        }

        // $category_id = 1;// Replace this with the actual category ID

        Design::create([
            "name" => $validated["name"],
            "detail" => $validated["detail"],
            "harga" => $validated["harga"],
            "gambar" => $path,
            "category_id" => $validated["category_id"], // Provide the valid category ID here
        ]);

        // $newName="";
        // if($request->file('image')){
        //     $extension = $request->file('image')->getClientOriginalExtension();
        //     $newName = $request->name.'-'.now()->timestamp.'.'.$extension;
        //     $request->file('image')->storeAs('images', $newName);
        // }
        // $request['gambar'] = $newName;

        // $designs = Design::create($request->all());
        // $designs->category_id = $request->input('categories');

        return redirect('/')->with("success", "Design anda berhasil dimasukkan!");
    }

//     public function postIndex(Request $request)
// {
//     $validated = $request->validate([
//         "name" => ["required", "max:255"],
//         "detail" => ["required", "max:3000"],
//         "harga" => ["required", "max:3000"],
//         "image" => ["nullable", "image", "max:5000"],
//         "category_id" => ["required", "exists:categories,id"], // Add this validation rule for the category_id
//     ], [
//         "name.required" => "Nama harus diisi.",
//         "name.max" => "Nama design maksimal :max karakter.",
//         "detail.required" => "Deskripsi harus diisi.",
//         "detail.max" => "Deskripsi design maksimal :max karakter.",
//         "harga.required" => "Harga harus diisi.",
//         "harga.max" => "Harga maksimal :max karakter.",
//         "image.image" => "Gambar harus berupa file gambar.",
//         "image.max" => "Ukuran gambar harus kurang dari :max kilobita.",
//         "category_id.required" => "Kategori harus dipilih.",
//         "category_id.exists" => "Kategori yang dipilih tidak valid.",
//     ]);

//     $photo = $validated["image"];
//     $path = null;
//     if ($photo) {
//         $path = $photo->store("images");
//     }

//     Design::create([
//         "name" => $validated["name"],
//         "detail" => $validated["detail"],
//         "harga" => $validated["harga"],
//         "gambar" => $path,
//         "category_id" => $validated["category_id"], // Add the category_id value
//     ]);

//     return redirect('/')->with("success", "Design anda berhasil dimasukkan!");
// }

// public function postIndex(Request $request)
// {
//     $validated = $request->validate([
//         "name" => ["required", "max:255"],
//         "detail" => ["required", "max:3000"],
//         "harga" => ["required", "max:3000"],
//         "image" => ["nullable", "image", "max:5000"],
//         "category_id" => ["required", "exists:categories,id"],
//     ], [
//         "name.required" => "Nama harus diisi.",
//         "name.max" => "Nama design maksimal :max karakter.",
//         "detail.required" => "Deskripsi harus diisi.",
//         "detail.max" => "Deskripsi design maksimal :max karakter.",
//         "harga.required" => "Harga harus diisi.",
//         "harga.max" => "Harga maksimal :max karakter.",
//         "image.image" => "Gambar harus berupa file gambar.",
//         "image.max" => "Ukuran gambar harus kurang dari :max kilobita.",
//         "category_id.required" => "Kategori harus dipilih.",
//         "category_id.exists" => "Kategori yang dipilih tidak valid.",
//     ]);

//     $photo = $validated["image"];
//     $path = null;
//     if ($photo) {
//         $path = $photo->store("images");
//     }

//     Design::create([
//         "name" => $validated["name"],
//         "detail" => $validated["detail"],
//         "harga" => $validated["harga"],
//         "gambar" => $path,
//         "category_id" => $validated["category_id"],
//     ]);

//     return redirect('/')->with("success", "Design anda berhasil dimasukkan!");
// }


    public function deleteIndex(Request $request)
    {
        $jobItem = Design::find($request->id);
        $jobItem->delete();
        return redirect('/')->with("success", "Design anda berhasil dihapuskan!");
    }

    public function patchIndex(Request $request)
    {
        $validated = $request->validate([
            "id" => ["required", "exists:designs"],
            "name" => ["required", "max:255"],
            "detail" => ["required", "max:3000"],
            "harga" => ["required", "max:3000"],
            "image" => ["nullable", "image", "max:5000"],
        ], [
            "required" => "Semua atribut harus diisi!",
            "exists" => "Design tidak ditemukan!",
            "name.max" => "Nama design hanya boleh berisi maksimal :max karakter!",
            "detail.max" => "Deskripsi design hanya boleh berisi maksimal :max karakter!",
            "image" => "Gambar design harus berupa berkas gambar!",
            "image.max" => "Gambar design harus dibawah :max kb!",
        ]);

        $jobItem = Design::find($validated["id"]);
        $jobItem->name = $validated["name"];
        $jobItem->detail = $validated["detail"];
        $jobItem->harga = $validated["harga"];

        if ($validated["image"] != null) {
            if ($jobItem->gambar != null) {
                Storage::delete($jobItem->gambar);
            }
            $photo = $validated["image"];
            $path = $photo->store("images");
            $jobItem->gambar = $path;
        }

        $jobItem->save();

        return redirect('/')->with("success", "Detail anda berhasil diperbarui!");
    }
}

// $newName = '';
//         if($request->file('image')) {
//             $extension = $request->file('image')->getClientOriginalExtension();
//             $newName = $request->jenis_barang.'-'.now()->timestamp.'.'.$extension;
//             $request->file('image')->storeAs('struk', $newName);
//         }
//         $request['struk'] = $newName;

//         $barang = Barang::create($request->all());