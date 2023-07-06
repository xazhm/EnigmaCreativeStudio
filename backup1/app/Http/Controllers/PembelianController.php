<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PembelianController extends Controller
{
    public function index()
    {
        return view('/admin.invoice-list');
    }
    public function invoicepreview()
    {
        return view('/admin.invoice-preview');
    }
    public function invoiceadd()
    {
        return view('/admin.invoice-add');
    }
    public function invoiceedit()
    {
        return view('/admin.invoice-edit');
    }
}
