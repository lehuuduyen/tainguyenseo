@auth
@if(auth()->user()->role == 1)
@extends('admin.index')

@section('main_content')
<div class="row clearfix page_header">
    <div class="col-md-6">
        <h2> Thiết lập quy định trung gian </h2>
    </div>
    <div class="col-md-6 text-right">
        <a class="btn btn-info" href="{{ url('regulations-admin/create') }}"> <i class="fa fa-plus"></i> Thêm quy định </a>
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
                        <th>Quy định</th>
                        <th class="text-center">#</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Quy định</th>
                        <th class="text-center">#</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ($rules as $rule)
                    <tr>
                        <td> {{ $rule->id }} </td>
                        <td> {{ $rule->regulation }} </td>
                        <td class="text-center">
                            <form method="POST" action=" {{ route('regulations-admin.destroy', ['regulations_admin' => $rule->id]) }} ">
                                <a class="btn btn-primary btn-sm" href="{{ route('regulations-admin.edit', ['regulations_admin' => $rule->id]) }}">
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
@endif
@endauth