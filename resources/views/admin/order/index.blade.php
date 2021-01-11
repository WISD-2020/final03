@extends('admin.layouts.master')

@section('title', '訂單管理')

@section('content')
    <!-- Page Heading -->
    <div class="row" style="text-align:center">
        <div class="col-lg-12">
            <h1 class="page-header">
                訂單管理 <small>所有訂單列表</small>
            </h1>
            <ol class="breadcrumb">
                <li class="active">
                    <i class="fa fa-edit"></i> 訂單管理
                </li>
            </ol>
        </div>
    </div>
    <!-- /.row -->
    <div class="row" style="margin-bottom: 20px; text-align: right">
        <div class="col-lg-12">

        </div>
    </div>
    <!-- /.row -->

    <div class="row">
        <div class="col-lg-12">
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th  style="text-align: center">訂單編號</th>
                        <th  style="text-align: center">餐點名稱</th>
                        <th  style="text-align: center">數量</th>
                        <th  style="text-align: center">總金額</th>
                        <th  style="text-align: center">訂單狀態</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($meals as $meal)
                        <tr>
                            <td style="text-align: center">{{$meal->id }}</td>
                            <td style="text-align: center">{{$meal->name}}</td>
                            <td style="text-align: center">{{$meal->quantity}}</td>
                            <td style="text-align: center">{{$meal->total}}</td>
                            <td style="text-align: center">{{$meal->status}}</td>
                            <td>
                                <a class="btn btn-sm btn-primary" href="{{ route('admin.order.edit', $meal->id) }}">編輯</a>

                                <form action="/order/{{$meal->id}}" method="POST" style="display:inline">
                                    @method('DELETE')
                                    @csrf
                                    <button class="btn btn-sm btn-danger" type="submit" onclick="return confirm('是否確認刪除')">刪除</button>
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
