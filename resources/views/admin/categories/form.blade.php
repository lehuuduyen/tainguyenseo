@auth
@if(auth()->user()->role == 1)
@extends('admin.index')

@section('main_content')
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<h2> {{ $headline }} </h2>
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">{{ $headline }}</h6>
    </div>
    <div class="card-body">
        <div class="row justify-content-md-center">
            <div class="col-md-6">
                @if($mode == 'edit')
                {!! Form::model($category, [ 'route' => ['categories.update', $category->id], 'method' => 'put' ]) !!}
                @else
                {!! Form::open([ 'route' => 'categories.store', 'method' => 'post' ]) !!}
                @endif
                <div class="form-group">
                    <label for="name">Tên danh mục</label>
                    {{ Form::text('name', NULL, [ 'class'=>'form-control', 'id' => 'name', 'placeholder' => 'Tên danh mục' ]) }}
                </div>
                <div class="form-group">
                    <label for="parent_id">Danh mục phụ thuộc</label>
                    {{ Form::select('parent_id', [0 => 'Chọn danh mục phụ thuộc (nếu cần)'] + $categoriesList, NULL, [ 'class'=>'form-control', 'id' => 'parent_id']) }}
                </div>
                <div class="form-group">
                    <label for="is_validate">Được chọn: </label>
                    {{ Form::select('is_validate', $is_validate, NULL, [ 'class'=>'form-control', 'id' => 'is_validate']) }}
                </div>
                <button type="submit" class="btn btn-primary">Thêm</button>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@stop
@endif
@endauth