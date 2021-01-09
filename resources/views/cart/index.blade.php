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
                        <h1>購物車</h1>

                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Main Content -->
    <table class="table" >
        @foreach($meals as $order)
{{--            <h3>{{$order->id}}</h3>--}}
{{--                {{$order->meals_id}}--}}
{{--                {{$order->quantity}}--}}
{{--                ${{($order->quantity)*($order->price)}}--}}
{{--                {{$order->status}}--}}
            <thead>
            <tr>
                <th width="20"></th>
                <th width="100"></th>
                <th>餐點編號</th>
                <th>名稱</th>
                <th>數量</th>
                <th class="text-center" width="120">小計</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <form action="{{route('cart.destroy',$order->id)}}" method="POST" style="display:inline">
                    @method('delete')
                    @csrf
                    <td class="align-middle"><button type="submit" style="border: 0;background-color: white"><i class="far fa-trash-alt mr-3"></i></button></td>
                </form>
                <form action="{{route('cart.store')}}" method="POST" style="display:inline">
                    @method('post')
                    @csrf
                    <td class="align-middle">
                    </td>
                    <td class="align-middle "> {{$order->meals_id}}</td>
                    <td class="align-middle "> {{$order->name}}</td>
                    <td class="align-middle">{{$order->quantity}}</td>
                    <td class="align-middle text-right">${{($order->quantity)*($order->price)}}</td>
            </tr>
        @endforeach
        
    </table>

    <div class="mt-3 d-flex justify-content-end">
        <button  class="btn btn-secondary mr-2" style="background-color: white" ><a href="{{route('menu.index')}}">繼續選購</a></button>

        <button  type="submit" onclick="return confirm('是否確認結帳?')" class="btn btn-primary">確認付款</button>
    </div>
@endsection
