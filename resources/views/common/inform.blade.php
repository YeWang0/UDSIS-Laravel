<!-- 成功提示框 -->
@if (Session::has('success'))
<div class="alert alert-success alert-dismissible" role="alert">
    <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
    <strong>Success！</strong> {{Session::get('success')}}
</div>
@endif

@if (Session::has('error'))
<!-- 失败提示框 -->
<div class="alert alert-danger alert-dismissible" role="alert">
    <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
    <strong>Error！</strong> {{Session::get('success')}}
</div>
@endif