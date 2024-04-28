@auth
@if(auth()->user()->role == 1)
@extends('admin.index')

@section('main_content')
<div class="row clearfix page_header">
    <div class="col-md-6">
        <h2> Thiết lập giới thiệu công cụ </h2>
    </div>
    <div class="col-md-6 text-right">
        <a class="btn btn-info" href="{{ url('tools/create') }}"> <i class="fa fa-plus"></i> Thêm công cụ </a>
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
                        <th>Tên công cụ</th>
                        <th>Link</th>
                        <th>Mô tả công cụ</th>
                        <th class="text-center">#</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Tên công cụ</th>
                        <th>Link</th>
                        <th>Mô tả công cụ</th>
                        <th class="text-center">#</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ($tools as $tool)
                    <tr>
                        <td> {{ $tool->id }} </td>
                        <td> {{ $tool->name }} </td>
                        <td> {{ $tool->url }} </td>
                        <td> {{ $tool->tool_description }} </td>
                        <td class="text-center">
                            <form method="POST" action=" {{ route('tools.destroy', ['tool' => $tool->id]) }} ">
                                <a class="btn btn-primary btn-sm" href="{{ route('tools.edit', ['tool' => $tool->id]) }}">
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