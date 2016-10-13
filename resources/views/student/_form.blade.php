<form class="form-horizontal" role="form" method="post" action="">
    {{csrf_field()}}
    <div class="form-group">
        <label class="col-sm-2 control-label">Name</label>
        <div class="col-sm-5">
            <input type="text" name="Student[name]" value="{{$student->name? $student->name:''}}" class="form-control" placeholder="Name">
        </div>
        {{--<div class="col-sm-5">--}}
        {{--<p class="form-control-static text-danger">姓名不能为空</p>--}}
        {{--</div>--}}
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label">Age</label>
        <div class="col-sm-5">
            <input type="text" name="Student[age]" value="{{$student->age? $student->age:''}}" class="form-control" placeholder="Age">
        </div>
        {{--<div class="col-sm-5">--}}
        {{--<p class="form-control-static text-danger">年龄只能为整数</p>--}}
        {{--</div>--}}
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label">Gender</label>
        <div class="col-sm-5">
            @foreach($student->sex() as $key=>$val)
                <label class="radio-inline">
                    <input type="radio" name="Student[sex]" {{$student->sex == $key ? "checked":""}} value="{{$key}}">{{$val}}
                </label>
            @endforeach
        </div>
        {{--<div class="col-sm-5">--}}
        {{--<p class="form-control-static text-danger">请选择性别</p>--}}
        {{--</div>--}}
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>