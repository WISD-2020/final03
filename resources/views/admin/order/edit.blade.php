@extends('admin.layouts.master')

@section('title', '編輯訂單')

@section('content')
    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                編輯訂單 <small>編輯訂單內容</small>
            </h1>
            <ol class="breadcrumb">
                <li class="active">
                    <i class="fa fa-edit"></i> 訂單管理
                </li>
            </ol>
        </div>
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <form action="/order/{{$meal->id}}" method="POST" role="form">
                @method('PATCH')
                @csrf

                <div class="form-group">
                    <label for="id">取餐編號：</label>
                    <input name="id" class="form-control" name="order_id" value="{{old('id',$meal->id)}}">
                </div>

                <div class="form-group">
                    <label for="meals_id">餐點編號：</label>
                    <input id="products_id" name="meals_id" class="form-control"   value="{{old('meals_id',$meal->meals_id)}}">
                </div>

                <div class="form-group">
                    <label for="name">餐點名稱：</label>
                    <input id="products_id" name="name" class="form-control"   value="{{old('name',$meal->name)}}">
                </div>

                <div class="form-group">
                    <label for="total">總金額：</label>
                    <input id="total" name="total" class="form-control"  value="{{old('total',$meal->total)}}">
                </div>
                <div class="form-group">
                    <label for="status">訂單狀態：</label>
                    <select name="status" id="status">{{old('status',$meal->status)}}
                        <option value="未完成">未完成</option>
                        <option value="已完成">已完成</option>
                    </select>

                <div class="text-right">
                    <button type="submit" class="btn btn-success">更新</button>
                </div>
            </form>
@endsection


