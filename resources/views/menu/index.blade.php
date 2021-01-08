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
                        <h1>線上點餐機系統</h1>

                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Main Content -->
    <h1>餐點介紹</h1>
    @foreach($meals as $meal)
            <td class="align-middle">
    <h3>編號:{{$meal->id}}{{$meal->name}}價格:{{$meal->price}}</h3>
     <img src={{$meal->img}}>
        <form action="{{route('cart.index')}}" method="post">
        @method('post')
        @csrf
        <label for="quantity">數量:</label>
        <select id="quantity" name="quantity">
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
        </select>
                <input type="hidden" name="meals_id" value="{{$meal->id}}">
                 <input type="hidden" name="price" value="{{$meal->price}}">
                <button type="submit" onclick="return confirm('確定加入購物車?')" >加入購物車</button>
        </form>
    @endforeach
@endsection
