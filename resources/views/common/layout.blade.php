<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>@yield('title','default')</title>
    <link rel="stylesheet" href="{{asset('static/css/bootstrap.min.css')}}">
    <style type="text/css">
        body{ font-family: 'Microsoft YaHei';}
        /*.panel-body{ padding: 0; }*/
    </style>
    @section('style')

    @show

</head>
<body>

    @section('head')

    @show


<div class="container">
    <div class="main">
        <div class="row">
            <!-- 左侧内容 -->
            <div class="col-md-3">
                @section('left')
                    <div class="list-group">
                        <a href="{{url('student/index')}}" class="list-group-item text-center
                        {{Request::getPathInfo()=='/student/index'?'active':''}}"
                        >Students Information</a>
                        <a href="{{url('student/create')}}" class="list-group-item text-center
                        {{Request::getPathInfo()=='/student/create'?'active':''}}"
                        >Enroll new student</a>
                    </div>
                @show
            </div>
            <!-- 右侧内容 -->
            <div class="col-md-9">
                @section('right')

                @show
            </div>
        </div>
    </div>
</div>
<!-- 尾部 -->
    @section('foot')
        <div class="jumbotron" style=" margin-bottom:0;margin-top:105px;">

            <div class="container">
                <span>&copy;2016-Ye Wang</span>
            </div>

        </div>
    @show

<script src="{{asset('static/js/jquery-3.1.0.min.js')}}"></script>
<script src="{{asset('static/js/bootstrap.min.js')}}"></script>
</body>
</html>