@extends('admin.layouts.master')

@section('title', '編輯餐點')

@section('content')
    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                編輯餐點 <small>編輯餐點內容</small>
            </h1>
            <ol class="breadcrumb">
                <li class="active">
                    <i class="fa fa-edit"></i> 餐點管理
                </li>
            </ol>
        </div>
    </div>

    <!-- /.row -->

    <div class="row">
        <div class="col-lg-12">
            <form action="/menu/{{$meal->id}}" method="POST" role="form">
                @method('PATCH')
                @csrf

                <div class="form-group">
                    <label for="name">餐點名稱：</label>
                    <input name="name" class="form-control" value="{{old('title',$meal->name)}}">
                </div>

                <div class="form-group">
                    <label for="img">圖片：</label>
                    <input id=img" name="img" class="form-control" rows="10"  value="{{old('img',$meal->img)}}">
                </div>

                <div class="form-group">
                    <label for="price">價格：</label>
                    <input id="price" name="price" class="form-control"  value="{{old('price',$meal->price)}}">
                </div>

                <div class="text-right">
                    <button type="submit" class="btn btn-success">更新</button>
                </div>

            </form>

            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>

        </div>
    </div>
    <!-- /.row -->
@endsection
