@auth
@extends('admin.index')

@section('main_content')
<div class="row clearfix page_header">
	<div class="col-md-6">
		<h2> Bài đăng </h2>
	</div>
	<div class="col-md-6 text-right">
		<a class="btn btn-info" href="{{ url('posts/create') }}"> <i class="fa fa-plus"></i> Tạo bài đăng </a>
	</div>
</div>

@stop
@endauth