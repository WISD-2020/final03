<?php

namespace App\Http\Controllers;

use App\Models\cart;
use App\Models\meal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
}
