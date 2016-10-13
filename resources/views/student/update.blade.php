@extends('common.layout')


@section('head')
    <div class="jumbotron">
        <div class="container">
            <h1>Laravel -For Web Artisans</h1>
            <h3>——Update page</h3>
        </div>
    </div>
@stop

@section('right')
    @include('common.inform')
    <!-- 自定义内容 -->
    <div class="panel panel-default">
        <div class="panel-heading">Update student info</div>
        <div class="panel-body">
            @include('student._form')
        </div>
    </div>


@stop
