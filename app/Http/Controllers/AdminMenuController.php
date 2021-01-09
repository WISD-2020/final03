<?php

namespace App\Http\Controllers;

use App\Models\meal;
use Illuminate\Http\Request;

class AdminMenuController extends Controller
{
    public function index()
    {
        $meals = meal::orderBy('id','ASC')->paginate(12);
        $data = [
            'meals' => $meals
        ];
        return view('admin.menu.index',$data);
    }
    public function create()
    {
        return view('admin.menu.create');
    }

    public function store(Request $request)
    {
        $meal = new meal();
        $meal->name = $request->name;
        $img = $request->file('img');
        $imgname =time().'.'.$img->getClientOriginalExtension();
        $request->img->move(public_path('/img/mainmeal/'), $imgname);
        $meal->img = "img/mainmeal/".$imgname;
        $meal->price = $request->price;
        $meal->save();

        return redirect()->route('admin.menu.index');
    }

    public function edit($id)
    {
        $meal = meal::find($id);
        $data = ['meal' => $meal];

        return view('admin.menu.edit', $data);
    }

    public function update(Request $request, $id)
    {
        $meals = meal::find($id);
        $meals->update($request->all());
        return redirect()->route('admin.menu.index');
    }

    public function destroy($id)
    {
        meal::destroy($id);
        return redirect()->route('admin.menu.index');
    }
}
