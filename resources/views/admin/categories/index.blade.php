@auth
@if(auth()->user()->role == 1)
@extends('admin.index')

@section('main_content')
<div class="row clearfix page_header">
	<div class="col-md-6">
		<h2> Danh mục </h2>
	</div>
	<div class="col-md-6 text-right">
		<a class="btn btn-info" href="{{ url('categories/create') }}"> <i class="fa fa-plus"></i> Thêm danh mục </a>
	</div>
</div>

<!-- DataTales Example -->
<div class="card shadow mb-4">
	<div class="card-body">
		<div class="table-responsive">
			<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
				<thead>
					<tr>
						<th>ID</th>
						<th>Tên</th>
						<th>Danh mục phụ thuộc</th>
						<th>Được chọn</th>
						<th class="text-center">#</th>
					</tr>
				</thead>
				<tfoot>
					<tr>
						<th>ID</th>
						<th>Tên danh mục</th>
						<th>Danh mục phụ thuộc</th>
						<th>Được chọn</th>
						<th class="text-center">#</th>
					</tr>
				</tfoot>
				<tbody>
					@foreach ($categories as $category)
					<tr>
						<td> {{ $category->id }} </td>
						<td> {{ $category->name }} </td>
						<td> {{ $category->getParentIdAttribute()['name'] }} </td>
						<td> {{ $category->getValueToSelectIsValidate()[$category->is_validate] }} </td>
						<td class="text-center">
							<form method="POST" action=" {{ route('categories.destroy', ['category' => $category->id]) }} ">
								<a class="btn btn-primary btn-sm" href="{{ route('categories.edit', ['category' => $category->id]) }}">
									<i class="fa fa-edit"></i>
								</a>
								@csrf
								@method('DELETE')
								<button onclick="return confirm('Are you sure?')" type="submit" class="btn btn-danger btn-sm">
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
@endif
@endauth