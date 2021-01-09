@extends('admin.layouts.master')

@section('title', '新增餐點')

@section('content')
    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                新增餐點 <small>請輸入餐點內容</small>
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
            <form action="/menu/store" enctype="multipart/form-data"  method="POST" role="form">
                @method("POST")
                @csrf

                <div class="form-group">
                    <label for="name">餐點名稱：</label>
                    <input id="name" name="name" class="form-control" >
                </div>

                <div class="form-group">
                    <label for="img">圖片：</label>
                    <input type = "file" id="img" name="img" class="form-control" >
                </div>

                <div class="form-group">
                    <label for="price">價格：</label>
                    <input id="price" name="price" class="form-control">
                </div>

                <div class="text-right">
                    <button type="submit" class="btn btn-success">新增</button>
                </div>

                <p>&nbsp;</p>
                <p>&nbsp;</p>
                <p>&nbsp;</p>

            </form>
        </div>
    </div>
    <!-- /.row -->
@endsection
