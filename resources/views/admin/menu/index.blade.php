@extends('admin.layouts.master')

@section('title', '菜單管理')

@section('content')
    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                餐點管理 <small>所有餐點列表</small>
            </h1>
            <ol class="breadcrumb">
                <li class="active">
                    <i class="fa fa-edit"></i> 餐點管理
                </li>
            </ol>
        </div>
    </div>
    <!-- /.row -->
    <div class="row" style="margin-bottom: 20px; text-align: right">
        <div class="col-lg-12">
            <a href="{{ route('admin.menu.create') }}" class="btn btn-success">建立新餐點</a>
        </div>
    </div>
    <!-- /.row -->

    <div class="row">
        <div class="col-lg-12">
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th  style="text-align: center">餐點編號</th>
                        <th >餐點名稱</th>
                        <th  style="text-align: center">圖片</th>
                        <th  style="text-align: center">價格</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($meals as $meal)
                        <tr>
                            <td style="text-align: center">{{ $meal->id }}</td>
                            <td>{{$meal->name}}</td>
                            <td style="text-align: center">{{$meal->img}}</td>
                            <td style="text-align: center">{{$meal->price}}</td>
                            <td>
                                <a class="btn btn-sm btn-primary" href="{{ route('admin.menu.edit', $meal->id) }}">編輯</a>

                                <form action="/menu/{{$meal->id}}" method="POST" style="display:inline">
                                    @method('DELETE')
                                    @csrf
                                    <button class="btn btn-sm btn-danger" type="submit" onclick="return confirm('是否刪除')">刪除</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- /.row -->
@endsection
