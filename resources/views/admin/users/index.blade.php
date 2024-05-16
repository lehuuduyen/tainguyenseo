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
                        <th>Username</th>
                        <th>SDT</th>
                        <th>Vai trò</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                    <tr>
                        <td> {{ $user->username }} </td>
                        <td> {{ $user->sdt }} </td>
                        <td> {{ $user->roleName()[$user->role] }} </td>
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