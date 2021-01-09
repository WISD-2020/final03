<?php

namespace App\Http\Controllers;

use App\Models\detail;
use Illuminate\Http\Request;

class AdminOrderController extends Controller
{
    public function index()
    {
        $meals = detail::orderBy('id','ASC')->paginate(100);
        $data = [
            'meals' => $meals
        ];
        return view('admin.order.index',$data);
    }

    public function edit($id)
    {
        $meal = detail::find($id);
        $data = ['meal' => $meal];

        return view('admin.order.edit', $data);
    }

    public function update(Request $request, $id)
    {
        $detail = detail::find($id);
        $detail->update($request->all());
        return redirect()->route('admin.order.index');
    }

    public function destroy($id)
    {
        detail::destroy($id);
        return redirect()->route('admin.order.index');
    }
}
