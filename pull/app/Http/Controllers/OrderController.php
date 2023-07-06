<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Design;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class OrderController extends Controller
{
    public function detail($slug){
        $designs = Design::where('slug', $slug)->with('categories')->first();
        $categories = Category::all();
        return view('/product-detail', [
            'designs' => $designs,
            'categories' => $categories,
        ]);
    }

    public function store(Request $request, $slug)
    {
        $designs = Design::where('slug', $slug)->first();
        $users = Auth::user();
        try {
            DB::beginTransaction();
            // insert to orders
            // $request['order_date'] = Carbon::now()->toDateString();
            $newName = '';
            if($request->file('image')) {
                $extension = $request->file('image')->getClientOriginalExtension();
                $newName = Carbon::now()->toDateString().'-'.now()->timestamp.'.'.$extension;
                $request->file('image')->storeAs('struk', $newName);
            }
            $request['struk'] = $newName;

            $orders = Order::create([
                'user_id' => $users->id,
                'design_id' => $designs->id,
                'order_date' => Carbon::now()->toDateString(),
                'struk' => $newName,
            ]);
            DB::commit();

            return redirect('/after-checkout')->with('success', 'Successfully - Wait for The Approval');
        }
        catch(\Throwable){
            DB::rollBack();
        }
    }

    public function showafter()
    {
        return view('/after-checkout');
    }
}
