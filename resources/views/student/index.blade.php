@extends('common.layout')

@section('content')

    @include('common.message')

    <div class="panel panel-default">
        <div class="panel-heading">
            <div class="panel-title">学生列表</div>
        </div>
        <table class="table table-hover table-responsive table-striped">
            <thead>
            <tr>
                <th>ID</th>
                <th>姓名</th>
                <th>年龄</th>
                <th>性别</th>
                <th>添加时间</th>
                <th style="width: 150px;">操作</th>
            </tr>
            </thead>
            <tbody>
            @foreach($students as $student)
            <tr>
                <td>{{$student->id}}</td>
                <td>{{$student->name}}</td>
                <td>{{$student->age}}</td>
                <td>{{$student->sex==1?'男':'女'}}</td>
                <td>{{$student->created_at}}</td>
                <td>
                    <a href="layout-detail.html">详情</a>
                    <a href="">修改</a>
                    <a href="">删除</a>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <div class="pull-right">
        {{$students->render()}}
    </div>
@stop