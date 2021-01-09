<?php

namespace App\Http\Controllers;

use App\Models\cart;
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
//        $totals = DB::table('orders')
//            ->join('meals','orders.meals_id','=','meals.id')
//            ->where('meals_id',)
//            ->select('meals.name','meals.price','orders.quantity')
//            ->get();
//        $count =  DB::table('orders')
//            ->join('meals','orders.meals_id','=','meals.id')
//            ->where('meals_id')
//            ->select('meals.name','meals.price','orders.quantity')
//            ->count();
//        $total = 0;
//
//        for($i=0;$i<$count;$i++)
//        {
//            $price = $totals[$i]->price;
//            $quantity = $totals[$i]->quantity;
//            $total += $price * $quantity;
//        }
//
//        $order = new cart();
//        $order->meals_id =1;
//        $order->total = $total;
//        $order->method = "訂餐機";
//        $order->status = "未完成";
//        $order->save();
//
//        $allorderlists2 = DB::table('meals')
//            ->join('orders','orders.meals_id' ,'=','meals.id')
//            ->join('details','details.users_id','=','order.id')
//            ->where('status' , '未完成')
//            ->select('details.id','orders.meals_id','orders.quantity','meals.price','details.status','details.total')
//            ->orderBy('details.id','DESC')
//            ->get();
//
//        $j = 0;
//
//        for($j=0;$j<$count;$j++)
//        {
//            $detail_id = $allorderlists2[$j]->id;
//            $meals_id = $allorderlists2[$j]->products_id;
//            $meals_price =$allorderlists2[$j]->price;
//            $orders_quantity = $allorderlists2[$j]->quantity;
//
//            $detail = new cart();
//            $detail->orders_id = $detail_id;
//            $detail->meals_id =  $meals_id;
//            $detail->quantity = $orders_quantity;
//            $detail->price = $meals_price;
//            $detail->save();
//        }
//    public function cart(Request $request)
//    {
//        $cart = new Cart();
//        $cart->meals_id =$request->id;
//        $cart->price = $request->price;
//        $cart->quantity = $request->input('quantity');
//        $cart->status =$request->input('status');
//        $cart->save();
//        return redirect()->route('menu.cart');
//
//        $carts = cart::orderBy('id','ASC');
//        $results = DB::table('carts')
//            ->join('products','meals_id','=','meals.id')
//            ->select('carts.name','carts.price','carts.quantity')
//            ->get();
//
//        $data = [
//            'results' => $results
//        ];
//    }
    }
}

