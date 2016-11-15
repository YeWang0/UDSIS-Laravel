@extends('common.layout')


@section('head')
    <div class="jumbotron">
        <div class="container">
            <h1>Student Information System</h1>
            <h3>——Create page</h3>
        </div>
    </div>
@stop

@section('right')
    @include('common.inform')
    <!-- 自定义内容 -->
    <div class="panel panel-default">
        <div class="panel-heading">Enroll new student</div>
        <div class="panel-body">
            @include('student._form')
        </div>
    </div>


@stop
