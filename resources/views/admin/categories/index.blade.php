@auth
@extends('admin.index')

@section('main_content')
<div class="row clearfix page_header">
	<div class="col-md-6">
		<h2> Danh mục </h2>
	</div>
	<div class="col-md-6 text-right">
		<a class="btn btn-info" href="{{ url('groups/create') }}"> <i class="fa fa-plus"></i> Thêm danh mục </a>
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
						<th class="text-right">#</th>
					</tr>
				</thead>
				<tfoot>
					<tr>
						<th>ID</th>
						<th>Tên</th>
						<th class="text-right">#</th>
					</tr>
				</tfoot>
				<tbody>
					<tr>
						<td> 1 </td>
						<td> Tên link </td>
						<td class="text-right">
							<form method="POST" action=" {{ url('categories/' . "") }} ">
								@csrf
								@method('DELETE')
								<button onclick="return confirm('Are you sure?')" type="submit" class="btn btn-danger"> <i class="fa fa-trash"></i> Delete </button>
							</form>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>

@stop
@endauth