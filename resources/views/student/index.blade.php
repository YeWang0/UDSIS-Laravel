@extends('common.layout')

@section('title')
    UDSIS
@stop
@section('head')
    <div class="jumbotron">
        <div class="container">
            <h1>Student Information System</h1>
            <h3>——Index page</h3>
        </div>
    </div>
@stop

@section('left')
    @parent
@stop

@section('right')
    @include('common.inform')
    <!-- 自定义内容 -->
    <div class="panel panel-default">
        <div class="panel-heading">Student List</div>
        <div class="panel-body">
            <table class="table table-striped table-responsive table-hover">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Gender</th>
                    <th>Create time</th>
                    <th width="120">Operation</th>
                </tr>
                </thead>
                <tbody>
                @foreach($students as $student)
                    <tr>
                    <th>{{$student->id}}</th>
                    <td>{{$student->name}}</td>
                    <td>{{$student->age}}</td>
                    <td>{{$student->sex($student->sex)}}</td>
                    <td>{{date('Y-m-d',$student->created_at)}}</td>
                    <td>
                        <a href="{{url('student/update')}}/{{$student->id}}">Update</a>
                        <a href="{{url('student/delete')}}/{{$student->id}}">Delete</a>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

        <div class="pull-right">
            {{$students->render()}}
        </div>

@stop

@section('foot')
    @parent
@stop


