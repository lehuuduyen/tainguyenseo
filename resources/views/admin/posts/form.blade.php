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
@php
$categoryId =(isset($post) && $post->category_id)?$post->category_id:false;
$categoryNeedIsValidate =(isset($post) && $post->category->is_validate)?$post->category->is_validate:false;
$postCategoryIsValidate =(isset($post) && $post->is_validated ==1)?$post->is_validated:false;
@endphp
<h2> {{ $headline }} </h2>
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">{{ $headline }}</h6>
    </div>
    <div class="card-body">

        <div class="row justify-content-md-left">
            <div class="col-md-10">
                @if ($mode == 'edit')
                {!! Form::model($post, ['route' => ['posts.update', $post->id], 'method' => 'put', 'id' => 'createPost']) !!}
                @else
                {!! Form::open(['route' => 'posts.store', 'method' => 'post', 'id' => 'createPost']) !!}
                @endif
                <div class="form-group">
                    <label for="name">Tên bài đăng<sup style="color:red">*</sup>
                    </label>
                    {{ Form::text('title', null, ['class' => 'form-control', 'id' => 'title', 'placeholder' => 'Tên bài đăng', 'required' => 'required']) }}
                </div>
                {{-- @if (auth()->user()->role == 1) --}}

                <div class="form-group <?= ($categoryNeedIsValidate) ? "" : "d-none" ?>  domain">
                    <label for="name">Domain<sup style="color:red">*</sup> </label>

                    {{ Form::text('domain', null, ['class' => 'form-control', 'id' => 'domain', 'placeholder' => 'Domain',"readonly"=>$postCategoryIsValidate]) }}

                    <div class="invalid-feedback" style="<?= (!$postCategoryIsValidate) ? "display:block" : "" ?>">
                        Vui lòng <span type="button" data-toggle="modal" onclick="clickModal()" data-target="#exampleModal">
                            <b><u>Kiểm duyệt</u></b>
                        </span>
                    </div>
                    <div class="valid-feedback" style="<?= ($postCategoryIsValidate) ? "display:block" : "" ?>">
                        Đã kiểm duyệt

                    </div>
                </div>

                <div class="form-group">
                    <label for="parent_id">Danh mục<sup style="color:red">*</sup></label>
                    <select class="form-control" id="category_id" name="category_id" onchange="changeCategory(this)" <?= ($postCategoryIsValidate) ? "readonly" : "" ?> required>
                        <option>Chọn danh mục</option>
                        <?php
                        if ((isset($post)) && $postCategoryIsValidate == true) {
                        ?>
                            @foreach ($categoriesList as $category)
                            <option value="<?= $category->id ?>" <?= ($categoryId == $category->id) ? "selected" : "disabled" ?> data-is_validate="<?= $category->is_validate ?>">
                                <?= $category->name ?></option>
                            @endforeach
                        <?php
                        } else {
                        ?>
                            @foreach ($categoriesList as $category)
                            <option value="<?= $category->id ?>" <?= ($categoryId == $category->id) ? "selected" : "" ?> data-is_validate="<?= $category->is_validate ?>">
                                <?= $category->name ?></option>
                            @endforeach
                        <?php
                        }
                        ?>



                    </select>
                </div>
                <div class="form-group">
                    <label for="demo">Mô tả nhanh<sup style="color:red">*</sup></label>
                    {{ Form::textarea('demo', null, ['class' => 'form-control', 'id' => 'demo']) }}
                </div>
                <div class="form-group">
                    <label for="description">Mô tả<sup style="color:red">*</sup></label>
                    @if ($mode == 'edit')
                    <div id="editor" name="description" id="description" required="required">
                        {!! $post->description !!}</div>
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
                        <label for="min_price" class="col-md-2">Từ : <sup style="color:red">* </sup></label>
                        {{ Form::text('min_price', isset($post->min_price) ? number_format($post->min_price, 0, '', ',') : null, ['class' => 'form-control currency', 'id' => 'min_price', 'style' => 'max-width: 30%;']) }}
                        <label for="max_price" class="col-md-2">Đến: </label>
                        {{ Form::text('max_price', isset($post->max_price) ? number_format($post->max_price, 0, '', ',') : null, ['class' => 'form-control currency', 'id' => 'max_price', 'style' => 'max-width: 30%;']) }}
                    </div>

                </div>
                <div class="form-group">
                    <label for="is_validate">Trạng thái: </label>
                    {{ Form::select('status', $status, NULL, [ 'class'=>'form-control', 'id' => 'status']) }}
                </div>
                @if((auth()->user()->role == 1) && $mode == 'edit' && $post->created_by != auth()->user()->id)
                <div class="form-group">
                    <label for="is_prestige">Uy tín: </label>
                    {!! Form::checkbox('is_prestige[]', false, ($post->is_prestige), [ 'id' => 'is_prestige']) !!}
                </div>
                @endif

                <button type="submit" class="btn btn-primary">{{ $button }}</button>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade " id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Xác minh domain qua file</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <span jsslot="" class="PbnGhe oJeWuf fb0g6">
                    <div jscontroller="y5NZL" jsaction="LNlWBf:TvD9Pc;" data-resource-id="sc-domain:google.com"><c-wiz jsrenderer="W0jTE" data-is-verification-disabled="false" jsshadow="" jsdata="deferred-c1" data-p="%.@.&quot;sc-domain:google.com&quot;,1,1,&quot;https://search.google.com/search-console/welcome?sjid=16764114872218177151-AP&quot;]" jscontroller="jWo0Zb" jsaction="JIbuQc:acUjBc(acUjBc),Hbn3B(eDx0uf);aLn7Wb:CGTidc(oaYlK),RW4jGd(pdfcob);" data-node-index="0;0" jsmodel="hc6Ubd" c-wiz="">
                            <div>
                                <div class="ByGl9 wdM1fd">
                                    <div class="D1E8p">
                                        <div class="wafqxf">
                                            <div class="W8EZA">
                                                <div class="qN626b"><span>1</span></div>
                                                <div class="hTXuX">
                                                    <div class="hTXuX">Xác minh qua file txt: <b jsslot="" class="vRMGwf oJeWuf">verify.txt</b></div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="wafqxf">
                                            <div class="W8EZA">
                                                <div class="qN626b">2</div>
                                                <div class="hTXuX">
                                                    <div class="hTXuX">Đăng nhập domain: <b class="textDomain"></b>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="wafqxf">
                                                <div class="W8EZA">
                                                    <div class="qN626b">3</div>
                                                    <div class="hTXuX"><span>Copy file txt này vào đường dẫn <b><span class="textDomain"></span>/verify.txt</span>
                </span>
            </div>
        </div>
    </div>
    <div class="fCyCnf">
        <div class="RDvAZb">
            <div class="gVqAvf" jscontroller="l7DpL" jsaction="JIbuQc:p0xsmb(kImuFf)">
                <div class="edhGSc zKHdkd xfUKk CDELXb" jscontroller="pxq3x" jsaction="clickonly:KjsqPd; focus:Jt1EX; blur:fpfTEe; input:Lg5SV" jsshadow="">
                    <div class="RpC4Ne oJeWuf">
                        <div class="Pc9Gce Wic03c">
                            <textarea id="copy" class="KHxj8b tL9Q4c" data-rows="1" tabindex="0" aria-label="" jscontroller="gZjhIf" jsaction="input:Lg5SV;ti6hGc:XMgOHc;rcuQ6b:WYd;" readonly="" dir="ltr" style="height: 20px;">google-site-verification=2os9zHlaNv5uifqt7vtOB3DK3lCL0oyTpnpaJhJ3MYc</textarea>
                        </div>
                        <div class="z0oSpf mIZh1c"></div>
                        <div class="Bfurwb cXrdqd"></div>
                    </div>
                    <div class="jE8NUc">
                        <div class="YElZX Is7Fhb"></div>
                    </div>
                </div>
                <div role="button" class="U26fgb A9jyad O0WRkf oG5Srb HQ8yf C0oVfc HNax3b M9Bg4d" jscontroller="VXdfxd" jsaction="click:cOuCgd; mousedown:UX7yZ; mouseup:lbsD7e; mouseenter:tfO1Yc; mouseleave:JywGue; focus:AHmuwe; blur:O22p3e; contextmenu:mg9Pef;touchstart:p6p2H; touchmove:FwuNnf; touchend:yfqBxc(preventDefault=true); touchcancel:JMtRjd;" jsshadow="" aria-disabled="false" tabindex="0" data-verification-method="7">
                    <div class="Vwe4Vb MbhUzd"></div>
                    <div class="ZFr60d CeoRYc"></div><span jsslot="" class="CwaK9"><span onclick="copyText()" class="RveJvd snByac">Copy</span></span>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="wafqxf">
    <div class="W8EZA">
        <div class="qN626b">4</div>
        <div class="hTXuX"><span>Nhấn verify ở dưới</div>
    </div>

</div>

</div>
</div>
</span>
<div class="modal-footer">
    <b onclick="cssValidAfter()" data-dismiss="modal" aria-label="Close" class="btn-default">Verify sau</b>
    <button type="button" data-dismiss="modal" aria-label="Close" onclick="clickVerify()" class="btn btn-primary">Verify</button>
</div>
</div>

</div>
</div>
</div>
<script src="https://cdn.ckeditor.com/ckeditor5/35.2.0/classic/ckeditor.js"></script>
<script src="{!! url('assets/js/global.js') !!}"></script>
<script>
    function clickVerify() {
        var token = jQuery('input[name="_token"]').val();
        var formData = new FormData();
        formData.append("domain", $("#domain").val());
        fetch("/verify", {
                method: "POST",
                headers: {
                    'X-CSRF-TOKEN': token
                },
                body: formData,
            })
            .then((response) => response.json())
            .then((data) => {
                console.log(data);

                if (data.status) {
                    cssValid()
                } else {
                    alert("Kiểm duyệt không thành công")
                }
            })
            .catch((error) => {
                console.log(error);
            });
        $(".textDomain").html($("#domain").val())
    }

    function clickModal() {
        var token = jQuery('input[name="_token"]').val();
        var formData = new FormData();
        formData.append("domain", $("#domain").val());
        fetch("/upload_domain", {
                method: "POST",
                headers: {
                    'X-CSRF-TOKEN': token
                },
                body: formData,
            })
            .then((response) => response.json())
            .then((data) => {
                $("#copy").val(data.hash)
            })
            .catch((error) => {
                console.error("Error:", error);
            });
        $(".textDomain").html($("#domain").val())
    }

    function copyText() {
        // Get the textarea element
        var textarea = document.getElementById("copy");

        // Select the text inside the textarea
        textarea.select();

        // Copy the selected text to the clipboard
        document.execCommand("copy");

        // Alert the user
        alert("Text copied to clipboard!");
    }
</script>
<script>
    jQuery(document).ready(function() {
        var token = jQuery('input[name="_token"]').val();
        ClassicEditor
            .create(document.querySelector('#editor'), {
                ckfinder: {
                    uploadUrl: '{{ route('ckfinder_upload') }}?command=QuickUpload&type=Files&responseType=json',
                    headers: {
                        'X-CSRF-TOKEN': token,
                    },
                }

            })
            .catch(error => {
                console.error(error);
            });
        // editor.on('text-change', function(delta, oldDelta, source) {
        //     jQuery('#description').val(editor.container.firstChild.innerHTML);
        // });

        // uploadQuillImage();

    });
    $('#domain').change(function() {
        cssInvalid()
    });

    function cssInvalid() {
        $(".domain #domain").addClass('is-invalid')
        $(".domain #domain").removeClass('is-valid')
        $(".invalid-feedback").css('display', 'block')
        $(".valid-feedback").css('display', 'none')

    }

    function cssValid() {
        $(".domain #domain").removeClass('is-invalid')
        $(".domain #domain").addClass('is-valid')
        $(".invalid-feedback").css('display', 'none')
        $(".valid-feedback").css('display', 'block')
    }

    function cssValidAfter() {
        $(".domain #domain").removeClass('is-invalid')
        $(".domain #domain").removeClass('is-valid')
        $(".invalid-feedback").css('display', 'none')
        $(".valid-feedback").css('display', 'none')
    }

    function changeCategory(_this) {
        var selectedOption = $(_this).find(':selected');
        var isValidate = selectedOption.data('is_validate');
        if (isValidate == 1) {
            $(".domain").removeClass('d-none');
            $("#domain").attr('required', 'required');

        } else {
            $(".domain").addClass('d-none');
            $("#domain").removeAttr('required');

        }
        cssValidAfter()
    }
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