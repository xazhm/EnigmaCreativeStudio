<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class PembelianController extends Controller
{
    public function index()
    {
        $orders = Order::all();
        // $orders = Order::with(['designs.users', 'designs.units'])->get();
        return view('/admin.invoice-list', [
            'orders' => $orders,
        ]);
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

    public function approve($id)
    {
        $orders = Order::findOrFail($id);
        $orders->status = 'paid';
        $orders->save();

        return redirect('/admin.invoice-list');
    }

    public function reject($id)
    {
        $orders = Order::findOrFail($id);
        $orders->status = 'rejected';
        $orders->save();

        return redirect('/admin.invoice-list');
    }

    public function view($id)
    {
        $orders = Order::find($id);
        // $orders = Order::with(['designs.users', 'designs.units'])->get();
        return view('/admin.struk-preview', [
            'orders' => $orders,
        ]);
    }
}
