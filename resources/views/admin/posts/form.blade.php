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
                {!! Form::model($post, [ 'route' => ['posts.update', $post->id], 'method' => 'put', 'id' => 'createPost' ]) !!}
                @else
                {!! Form::open([ 'route' => 'posts.store', 'method' => 'post', 'id' => 'createPost' ]) !!}
                @endif
                <div class="form-group">
                    <label for="name">Tên bài đăng</label>
                    {{ Form::text('title', NULL, [ 'class'=>'form-control', 'id' => 'title', 'placeholder' => 'Tên danh mục', 'required' => 'required' ]) }}
                </div>
                <div class="form-group">
                    <label for="name">Domain</label>
                    {{ Form::text('domain', NULL, [ 'class'=>'form-control', 'id' => 'domain', 'placeholder' => 'Domain (nếu có)' ]) }}
                </div>
                <div class="form-group">
                    <label for="parent_id">Danh mục</label>
                    {{ Form::select('category_id', [NULL => 'Chọn danh mục'] + $categoriesList, NULL, [ 'class'=>'form-control', 'id' => 'category_id', 'required' => 'required']) }}
                </div>
                <div class="form-group">
                    <label for="demo">Mô tả nhanh</label>
                    {{ Form::textarea('demo', null, [ 'class'=>'form-control', 'id' => 'demo']) }}
                </div>
                <div class="form-group">
                    <label for="description">Mô tả</label>
                    @if($mode == 'edit')
                    <div id="editor" name="description" id="description" required="required">{!! $post->description !!}</div>
                    <textarea style="display: none" id="description" name="description">{{ $post->description }}</textarea>
                    @else
                    <div id="editor" name="description" id="description" required="required"></div>
                    <textarea style="display: none" id="description" name="description"></textarea>
                    @endif

                </div>
                <div class="form-group">
                    <label>Giá cả </label>
                    <br>
                    <div class="col-md-6" style="display: ruby;">
                        <label for="min_price" class="col-md-2">Từ: </label>
                        {{ Form::text('min_price', null, [ 'class'=>'form-control currency', 'id' => 'min_price', 'style' => 'max-width: 30%;', 'required' => 'required']) }}
                        <label for="max_price" class="col-md-2">Đến: </label>
                        {{ Form::text('max_price', null, [ 'class'=>'form-control currency', 'id' => 'max_price', 'style' => 'max-width: 30%;']) }}
                    </div>

                </div>
                <button type="submit" class="btn btn-primary">{{ $button }}</button>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
<script src="{!! url('assets/js/quill.js') !!}"></script>
<script>
    jQuery(document).ready(function() {
        editor.on('text-change', function(delta, oldDelta, source) {
            jQuery('#description').val(editor.container.firstChild.innerHTML);
        });

        // Format currency
        jQuery('input.currency').on('keyup', function() {
            let parts = $(this).val().split(".");
            let v = parts[0].replace(/\D/g, ""),
                dec = parts[1]
            let calc_num = Number((dec !== undefined ? v + "." + dec : v));
            let n = new Intl.NumberFormat('en-EN').format(v);
            n = dec !== undefined ? n + "." + dec : n;
            jQuery(this).val(n);
        });

        uploadQuillImage();

    });

    // Insert Image by uploading to server instead of Base64
    function uploadQuillImage() {
        var token = jQuery('input[name="_token"]').val();
        var toolbar = editor.getModule("toolbar");
        toolbar.addHandler("image", function() {
            var input = document.createElement("input");
            input.setAttribute("type", "file");
            input.setAttribute("accept", "image/*");
            input.click();

            input.onchange = function() {
                var file = input.files[0];
                var formData = new FormData();
                formData.append("image", file);

                fetch("/upload-image", {
                        method: "POST",
                        headers: {
                            'X-CSRF-TOKEN': token
                        },
                        body: formData,
                    })
                    .then((response) => response.json())
                    .then((data) => {
                        const range = editor.getSelection();
                        editor.insertEmbed(range.index, "image", data.url);
                    })
                    .catch((error) => {
                        console.error("Error:", error);
                    });
            };
        });
    }
</script>
@stop

@endauth