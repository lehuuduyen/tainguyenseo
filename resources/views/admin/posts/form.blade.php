@auth
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
        <div class="row justify-content-md-left">
            <div class="col-md-10">
                @if($mode == 'edit')
                {!! Form::model($posts, [ 'route' => ['posts.update', $posts->id], 'method' => 'put' ]) !!}
                @else
                {!! Form::open([ 'route' => 'posts.store', 'method' => 'post' ]) !!}
                @endif
                <div class="form-group">
                    <label for="name">Tên bài đăng</label>
                    {{ Form::text('name', NULL, [ 'class'=>'form-control', 'id' => 'name', 'placeholder' => 'Tên danh mục' ]) }}
                </div>
                <div class="form-group">
                    <label for="parent_id">Danh mục</label>
                    {{ Form::select('category_id', [0 => 'Chọn danh mục'] + $categoriesList, NULL, [ 'class'=>'form-control', 'id' => 'category_id']) }}
                </div>
                <div class="form-group">
                    <label for="description">Mô tả</label>
                    <div id="editor" name="description" style="max-width: 100%;">
                    </div>
                </div>
                <div class="form-group">
                    <label for="demo">Demo</label>
                    {{ Form::textarea('demo', null, [ 'class'=>'form-control', 'id' => 'demo']) }}
                </div>
                <div class="form-group">
                    <label>Giá cả </label>
                    <br>
                    <div class="col-md-6" style="display: ruby;">
                        <label for="min_price" class="col-md-2">Từ: </label>
                        {{ Form::text('min_price', null, [ 'class'=>'form-control ', 'id' => 'min_price', 'style' => 'max-width: 30%;']) }}
                        <label for="min_price" class="col-md-2">Đến: </label>
                        {{ Form::text('min_price', null, [ 'class'=>'form-control ', 'id' => 'min_price', 'style' => 'max-width: 30%;']) }}
                    </div>

                </div>
                <button type="submit" class="btn btn-primary">Tạo bài đăng</button>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
<script src="{!! url('assets/js/quill.js') !!}"></script>

@stop

@endauth