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
<div class="card shadow mb-4">
	<div class="card-body">
		<div class="table-responsive">
			<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
				<thead>
					<tr>
						<th width="20%">Tiêu đề</th>
						<th width="10%">Danh mục</th>
						<th width="40%" height="50">Mô tả nhanh</th>
						<!-- <th width="20%">Giá cả</th> -->
						<th class="text-center">#</th>
					</tr>
				</thead>
				<tfoot>
					<tr>
						<th>Tiêu đề</th>
						<th>Danh mục</th>
						<th>Mô tả nhanh</th>
						<!-- <th>Giá cả</th> -->
						<th class="text-center">#</th>
					</tr>
				</tfoot>
				<tbody>
					@foreach ($posts as $post)
					<tr>
						<td> {{ $post->title }} </td>
						<td> {{ $post->category->name }} </td>
						<td> {{ $post->demo }} </td>
						<!-- <td> {{ number_format($post->min_price, 0, '', '.') }} đ
							@if(!empty($post->max_price))
							- {{ number_format($post->max_price, 0, '', '.') }} đ
							@endif
						</td> -->
						<td class="text-center">
							<form method="POST" action=" {{ route('posts.destroy', ['post' => $post->id]) }} ">
								<a class="btn btn-primary btn-sm" href="{{ route('posts.edit', ['post' => $post->id]) }}">
									<i class="fa fa-edit"></i>
								</a>
								@csrf
								@method('DELETE')
								<button onclick="return confirm('Bạn có chắc chắn muốn xóa?')" type="submit" class="btn btn-danger btn-sm">
									<i class="fa fa-trash"></i>
								</button>
							</form>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>
@stop
@endauth