<?php

namespace App\Http\Controllers;

use App\Models\detail;
use App\Models\meal;
use App\Models\order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    public function index(Request $request)
    {
        $order = new order();
        $order->meals_id = $request->input('meals_id');
        $order->price = $request->input('price');
        $order->name = $request->input('name');
        $order->quantity = $request->input('quantity');
        $order->status = "未完成";
        $order->save();
        $meals = order::orderBy('id', 'ASC')->paginate(6);
        $data = [
            'meals' => $meals
        ];
        return view('cart.index', $data);
    }
    public function destroy($id)
    {
        order::destroy($id);
        return redirect()->route('cart.index');
    }
    public function store(Request $request)
    {
        $detail = new detail();
        $detail->order_id = $request->input('order_id');
        $detail->meals_id = $request->input('meals_id');
        $detail->total = $request->input('total');
        $detail->name = $request->input('name');
        $detail->quantity = $request->input('quantity');
        $detail->status = "未完成";
        $detail->save();
        $meals = detail::orderBy('id', 'ASC')->paginate(100);
        $data = [
            'meals' => $meals
        ];
        $order = DB::table('orders');
        $order->delete();

        return view('cart.end', $data);

    }
}

