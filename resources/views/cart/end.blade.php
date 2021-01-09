@extends('layouts.master')
@section('title', 'Clean Blog')
@section('content')
    <!-- Page Header -->
    <header class="masthead" style="background-image: url('img/home-bg.jpg')">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <div class="site-heading">
                        <h1>請至櫃台結帳取餐</h1>

                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Main Content -->
    <table class="table" >
        @foreach($meals as $order)
            <thead>
            <tr>
                <th width="20"></th>
                <th width="100"></th>
                <th>取餐編號</th>
                <th>餐點編號</th>
                <th>餐點名稱</th>
                <th>數量</th>
                <th>餐點</th>
                <th class="text-center" width="120">小計</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                    <td class="align-middle"><button type="submit" style="border: 0;background-color: white"><i class="far fa-trash-alt mr-3"></i></button></td>
                </form>
                <form action="{{route('cart.end')}}" method="POST" style="display:inline">
                    @method('post')
                    @csrf
                    <td class="align-middle">
                    </td>
                    <td class="align-middle "> {{$order->order_id}}</td>
                    <td class="align-middle "> {{$order->meals_id}}</td>
                    <td class="align-middle "> {{$order->name}}</td>
                    <td class="align-middle">{{$order->quantity}}</td>
                    <td class="align-middle">{{$order->status}}</td>
                    <td class="align-middle text-right">${{($order->total)}}</td>
            </tr>
        @endforeach
    </table>
@endsection
