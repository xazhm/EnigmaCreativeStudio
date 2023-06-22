<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function loginPost(Request $request)
    {
        $credetials = $request->validate([
            'email' => ['required'],
            'password' => ['required'],
        ]);

        //checking login valid
        if (Auth::attempt($credetials)) {
            //admin
            if (Auth::user()->role_id == 1) {
                return redirect('/admin.dashboard');
            }
            //client
            if (Auth::user()->role_id == 2) {
                return redirect('/index2');
            }
        }
        //error
        return back()->with('error', 'Error Email or Password');
    }

    public function register()
    {
        return view('register');
    }

    public function registerPost(Request $request)
    {
        Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required',
            'no_telp' => 'required',
            ])->validate();

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'no_telp' => $request->no_telp,
        ]);

        return back()->with('success', 'Register successfully');
    }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login');
    }
}
