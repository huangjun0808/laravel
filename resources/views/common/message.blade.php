<!--成功提示框-->
@if(Session::has('success'))
<div class="alert alert-success">
    <a href="#" class="close" data-dismiss="alert">&times;</a>
    <strong>成功！</strong> {{ Session::get('success') }}
</div>
@endif
<!--失败提示框-->
@if(Session::has('error'))
<div class="alert alert-danger">
    <a href="#" class="close" data-dismiss="alert">&times;</a>
    <strong>失败！</strong> {{ Session::get('error') }}
</div>
@endif