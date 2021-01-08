<?php

namespace App\Http\Controllers;

use App\Models\cart;
use App\Models\meal;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $meals = meal::orderBy('id','ASC')->paginate(6);
        $data = [
            'meals' => $meals
            ];
        return view('menu.index',$data);
    }
    public function cart(Request $request)
    {
        $cart = new Cart();
        $cart->meals_id =$request->id;
        $cart->price = $request->price;
        $cart->quantity = $request->input('quantity');
        $cart->status =$request->input('status');
        $cart->save();
        return redirect()->route('menu.cart');
    }
}
