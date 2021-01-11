<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">

        <a class="navbar-brand" href="{{ route('admin.dashboard.index') }}">回到主控台</a>
    </div>
    <!-- Top Menu Items -->
    <ul class="nav navbar-right top-nav">
        <li class="dropdown">
            <a class="navbar-brand" href="{{ route('admin.menu.index') }}">回到餐點管理</a>
            <a class="navbar-brand" href="{{ route('menu.index') }}">登出管理系統</a>

            </ul>
        </li>
    </ul>
    <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav side-nav">
            <li class="active">
                <a href="{{ route('admin.dashboard.index') }}"><i class="fa fa-fw fa-dashboard"></i>主控台</a>
            </li>
            <li>
                <a href="{{ route('admin.menu.index') }}"><i class="fa fa-fw fa-edit"></i>菜單管理</a>
            </li>
            <li>
                <a href="{{ route('admin.order.index') }}"><i class="fa fa-fw fa-edit"></i>訂單管理</a>
            </li>
        </ul>
    </div>
    <!-- /.navbar-collapse -->
</nav>
