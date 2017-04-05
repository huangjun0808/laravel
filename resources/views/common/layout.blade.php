<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Laravel - @yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('static/lib/bootstrap-3.3.5/css/bootstrap.min.css')}}">
    @section('link')
    @show
</head>
<body>
<!--头部区-->
@section('header')
    <div class="jumbotron">
        <div class="container">
            <h1>轻松学会laravel</h1>
            <h2>——玩转laravel表单</h2>
        </div>
    </div>
@show
<!--内容区-->
<div class="container">
    <div class="row">
        <div class="col-md-3 col-sm-3">
            @section('leftmenu')
                <div class="list-group">
                    <a class="list-group-item {{ Request::getPathInfo() == '/student' ? 'active' : ''}}" href="{{ url('student') }}">学生列表</a>
                    <a class="list-group-item {{ Request::getPathInfo() == '/student/create' ? 'active' : ''}}" href="{{ url('student/create') }}">新增学生</a>
                </div>
            @show
        </div>
        <div class="col-md-9 col-sm-9">
            @yield('content')
        </div>
    </div>
</div>
<!--尾部区-->
@section('footer')
    <div class="jumbotron">
        <div class="container">
            <span>@2017 laravel</span>
        </div>
    </div>
@show
<script src="{{asset('static/lib/jquery-3.0.0/jquery-3.0.0.min.js')}}" type="text/javascript"></script>
<script src="{{asset('static/lib/bootstrap-3.3.5/js/bootstrap.min.js')}}"> type="text/javascript"</script>
@section('script')
@show
</body>
</html>