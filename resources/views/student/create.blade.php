@extends('common.layout')

@section('content')

    @include('common.errors')

    <div class="panel panel-default">
        <div class="panel-heading">
            <div class="panel-title">新增学生</div>
        </div>
        <div class="panel-body">
            <form class="form-horizontal" method="post" action="">
                <div class="form-group">
                    <label for="name" class="control-label col-md-2 col-sm-2">姓名</label>
                    <div class="col-md-5 col-sm-5">
                        <input type="text" name="student[name]" class="form-control" id="name" value="{{old('student')['name']}}" placeholder="请输入学生姓名">
                    </div>
                    <div class="col-sm-5">
                        <p class="form-control-static text-danger">{{$errors->first('student.name')}}</p>
                    </div>
                </div>
                <div class="form-group">
                    <label for="age" class="control-label col-md-2 col-sm-2">年龄</label>
                    <div class="col-md-5 col-sm-5">
                        <input type="text" name="student[age]" class="form-control" id="age" value="{{old('student')['age']}}" placeholder="请输入学生姓名">
                    </div>
                    <div class="col-sm-5">
                        <p class="form-control-static text-danger">{{$errors->first('student.age')}}</p>
                    </div>
                </div>
                <div class="form-group">
                    <label for="sex" class="control-label col-md-2 col-sm-2">性别</label>
                    <div class="col-md-5 col-sm-5">
                        <label class="radio-inline">
                            <input type="radio" id="sex" name="student[sex]" value="1" @if(old('student')['sex']==1 || !old('student')['sex']) checked @endif >男
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="student[sex]" value="2" @if(old('student')['sex']==2) checked @endif >女
                        </label>
                    </div>
                    <div class="col-sm-5">
                        <p class="form-control-static text-danger">{{$errors->first('student.sex')}}</p>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-10 col-sm-offset-2">
                        {{ csrf_field() }}
                        <input class="btn btn-primary" type="submit" value="提交">
                    </div>
                </div>
            </form>
        </div>
    </div>
@stop