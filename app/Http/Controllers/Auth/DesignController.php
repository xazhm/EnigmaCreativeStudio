<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Design;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DesignController extends Controller
{
    public function index()
    {
        $designs = Design::all();
        return view('admin.index', ['designs' => $designs]);
    }
    public function postIndex(Request $request)
    {
        $validated = $request->validate([
            "name" => ["required", "max:255"],
            "detail" => ["required", "max:3000"],
            "harga" => ["required", "max:3000"],
            "image" => ["nullable", "image", "max:5000"],
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

        Design::create([
            "name" => $validated["name"],
            "detail" => $validated["detail"],
            "harga" => $validated["harga"],
            "gambar" => $path
        ]);
        return redirect('/')->with("success", "Design anda berhasil dimasukkan!");
    }

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