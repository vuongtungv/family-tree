@extends('admin.layouts.index')
@section('css')
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    {{--<link href="admin_asset/global/plugins/dropzone/dropzone.min.css" rel="stylesheet" type="text/css" />--}}
    {{--<link href="admin_asset/global/plugins/dropzone/basic.min.css" rel="stylesheet" type="text/css" />--}}

    <link href="admin_asset/global/plugins/fancybox/source/jquery.fancybox.css" rel="stylesheet" type="text/css"/>
    <link href="admin_asset/global/plugins/jquery-file-upload/blueimp-gallery/blueimp-gallery.min.css" rel="stylesheet"
          type="text/css"/>
    <link href="admin_asset/global/plugins/jquery-file-upload/css/jquery.fileupload.css" rel="stylesheet"
          type="text/css"/>
    <link href="admin_asset/global/plugins/jquery-file-upload/css/jquery.fileupload-ui.css" rel="stylesheet"
          type="text/css"/>

@endsection

@section('content')

    <!-- BEGIN VALIDATION STATES-->
    <div class="portlet light portlet-fit portlet-form bordered">
        <div class="portlet-title">
            <div class="caption">
                <i class=" icon-layers font-red"></i>
                <span class="caption-subject font-red sbold uppercase">Thêm mới: Sản phẩm</span>
            </div>
            <div class="actions">
                <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                    <i class="icon-cloud-upload"></i>
                </a>
                <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                    <i class="icon-wrench"></i>
                </a>
                <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                    <i class="icon-trash"></i>
                </a>
            </div>
        </div>

        <div class="portlet-body">
            <!-- BEGIN FORM-->
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{ route('post_admin_add_products_products') }}" id="add-product" method="POST" role="form"
                  enctype="multipart/form-data">
                {{ csrf_field()}}
                <div class="form-body">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item active ">
                            <a class="nav-link " id="product-infor-tab" data-toggle="tab" href="#product-infor"
                               role="tab" aria-controls="product-infor" aria-selected="true">Thông tin cơ bản</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="product-option-tab" data-toggle="tab" href="#product-option"
                               role="tab" aria-controls="product-option" aria-selected="false">Product option</a>
                        </li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane active" id="product-infor" role="tabpanel"
                             aria-labelledby="product-infor-tab">
                            <div class="form-group">
                                <label class="tv-label-default" for="category_id">Danh mục *</label>
                                <select data-placeholder="Chọn danh mục cha" id="category_id" name="category_id"
                                        class="form-control js-parent-id-placeholder select2">
                                    <option value="">Danh mục</option>
                                    @foreach($listCategoryProducts as $item)
                                        {{$space = ''}}
                                        @if($item->level >0)
                                            @for($i = 1; $i <= $item->level; $i++)
                                                {{$space.=" -- "}}
                                            @endfor
                                        @endif
                                        <option value="{{$item->id}}">{{$space.$item->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group form-md-line-input form-md-floating-label">
                                <input type="text" class="form-control" name="name" id="name">
                                <label for="name">Tiêu đề *</label>
                            </div>

                            <div class="form-group form-md-line-input form-md-floating-label">
                                <input type="text" class="form-control" name="alias" id="alias">
                                <label for="alias">alias</label>
                            </div>
                            <div class="form-group form-md-line-input form-md-floating-label">
                                <input type="text" class="form-control" name="brief" id="brief">
                                <label for="alias">Tóm tắt</label>
                            </div>
                            <div class="form-md-line-input form-md-floating-label">
                                <label for="body" class="style-label-default">Nội dung</label>
                                <textarea name="body" class="form-control" id="body"></textarea>
                            </div>

                            <div class="form-group form-md-line-input form-md-floating-label">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label class="tv-label-default">Trạng thái</label>
                                        <div class="input-group">
                                            <div class="icheck-inline">
                                                <label><input type="radio" value="1" name="status" checked
                                                              class="icheck"> Hoạt động </label>
                                                <label><input type="radio" value="0" name="status" class="icheck"> Ngừng
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="tv-label-default">Trang chủ</label>
                                        <div class="input-group">
                                            <div class="icheck-inline">
                                                <label><input type="radio" value="1" name="show_home" class="icheck">
                                                    Hiện </label>
                                                <label><input type="radio" value="0" name="show_home" checked
                                                              class="icheck"> Ẩn </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group form-md-line-input form-md-floating-label">
                                <input type="number" class="form-control" name="ordering" id="ordering">
                                <label for="alias">Số tứ tự</label>
                            </div>

                            <div class="upload-image form-group form-md-line-input form-md-floating-label">
                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                    <div class="fileinput-preview thumbnail" data-trigger="fileinput"
                                         style="width: 200px; height: 150px;"></div>
                                    <div>
                            <span class="btn red btn-outline btn-file">
                                <span class="fileinput-new"> Select image </span>
                                <span class="fileinput-exists"> Change </span>
                                <input type="file" name="image"> </span>
                                        <a href="javascript:;" class="btn red fileinput-exists"
                                           data-dismiss="fileinput">
                                            Remove </a>
                                    </div>
                                </div>
                                <div class="clearfix margin-top-10">
                                    <span class="label label-success">NOTE!</span> Image preview only works in IE10+,
                                    FF3.6+,
                                    Safari6.0+, Chrome6.0+ and Opera11.1+. In older browsers the filename is shown
                                    instead.
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="product-option" role="tabpanel" aria-labelledby="product-option-tab">
                            <div class="form-group">
                                <div class="mt-repeater width-over">
                                    <div data-repeater-list="group-a">
                                        <div data-repeater-item class="row 123">
                                            <div class="col-md-2">
                                                <label class="control-label" for="style_id">Kiểu dáng</label>
                                                <select data-placeholder="Chọn kiểu dáng" id="style_id"
                                                        name="style_id[]"
                                                        class="form-control js-parent-id-placeholder select2">
                                                    <option value="">Danh mục</option>
                                                    @foreach($listStyle as $item)
                                                        <option value="{{$item->id}}">{{$item->name}}</option>
                                                    @endforeach
                                                </select>

                                                <label class="control-label" for="color_id">Màu sắc</label>
                                                <select data-placeholder="Chọn màu sắc" id="color_id" name="color_id[]"
                                                        class="form-control js-parent-id-placeholder select2">
                                                    <option value="">Danh mục</option>
                                                    @foreach($listColor as $item)
                                                        <option value="{{$item->id}}">{{$item->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-md-2">
                                                <label class="control-label" for="size_id">Kích thước</label>
                                                <select data-placeholder="Chọn màu sắc" id="size_id" name="size_id[]"
                                                        class="form-control js-parent-id-placeholder select2">
                                                    <option value="">Danh mục</option>
                                                    @foreach($listSize as $item)
                                                        <option value="{{$item->id}}">{{$item->name}}</option>
                                                    @endforeach
                                                </select>

                                                <label class="control-label">Qty</label>
                                                <input type="text" placeholder="0" class="form-control"/>
                                            </div>
                                            <div class="col-md-7">
                                                <!-- The fileupload-buttonbar contains buttons to add/delete files and start/cancel the upload -->
                                                <div class="row fileupload-buttonbar">
                                                    <div class="col-lg-7">
                                                        <!-- The fileinput-button span is used to style the file input field as button -->
                                                        <span class="btn btn-success fileinput-button">
                                                          <i class="glyphicon glyphicon-plus"></i>
                                                          <span>Add files...</span>
                                                          <input type="file" name="files[]" multiple/>
                                                        </span>
                                                        <button type="submit" class="btn btn-primary start">
                                                            <i class="glyphicon glyphicon-upload"></i>
                                                            <span>Start upload</span>
                                                        </button>
                                                        <button type="reset" class="btn btn-warning cancel">
                                                            <i class="glyphicon glyphicon-ban-circle"></i>
                                                            <span>Cancel upload</span>
                                                        </button>
                                                        <button type="button" class="btn btn-danger delete">
                                                            <i class="glyphicon glyphicon-trash"></i>
                                                            <span>Delete selected</span>
                                                        </button>
                                                        <input type="checkbox" class="toggle"/>
                                                        <!-- The global file processing state -->
                                                        <span class="fileupload-process"></span>
                                                    </div>
                                                    <!-- The global progress state -->
                                                    <div class="col-lg-5 fileupload-progress fade">
                                                        <!-- The global progress bar -->
                                                        <div
                                                            class="progress progress-striped active"
                                                            role="progressbar"
                                                            aria-valuemin="0"
                                                            aria-valuemax="100"
                                                        >
                                                            <div
                                                                class="progress-bar progress-bar-success"
                                                                style="width: 0%;"
                                                            ></div>
                                                        </div>
                                                        <!-- The extended global progress state -->
                                                        <div class="progress-extended">&nbsp;</div>
                                                    </div>
                                                </div>
                                                <!-- The table listing the files available for upload/download -->
                                                <table role="presentation" class="table table-striped">
                                                    <tbody class="files"></tbody>
                                                </table>

                                            </div>
                                            <div class="col-md-1">
                                                <label class="control-label">&nbsp;</label>
                                                <a href="javascript:;" data-repeater-delete class="btn btn-danger">
                                                    <i class="fa fa-close"></i>
                                                </a>
                                            </div>
                                            <hr class="col-md-12">
                                        </div>
                                    </div>
                                    {{--<hr>--}}
                                    <a href="javascript:;" data-repeater-create class="btn btn-info mt-repeater-add">
                                        <i class="fa fa-plus"></i> Add Variation</a>
                                    <br>
                                    {{--<br>--}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-actions">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="pull-right">
                                {{--<button type="submit" class="btn dark">Validate</button>--}}
                                <button type="submit" class="btn btn-success">Submit</button>
                                {{--<button type="submit" class="btn btn-secondary">Back</button>--}}
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <!-- END FORM-->
        </div>
    </div>


@endsection

<!-- The template to display files available for upload -->
<script id="template-upload" type="text/x-tmpl">
      {% for (var i=0, file; file=o.group-a[0][files][i]; i++) { %}
          <tr class="template-upload fade{%=o.options.loadImageFileTypes.test(file.type)?' image':''%}">
              <td>
                  <span class="preview"></span>
              </td>
              <td>
                  <p class="name">{%=file.name%}</p>
                  <strong class="error text-danger"></strong>
              </td>
              <td>
                  <p class="size">Processing...</p>
                  <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0"><div class="progress-bar progress-bar-success" style="width:0%;"></div></div>
              </td>
              <td>
                  {% if (!o.options.autoUpload && o.options.edit && o.options.loadImageFileTypes.test(file.type)) { %}
                    <button class="btn btn-success edit" data-index="{%=i%}" disabled>
                        <i class="glyphicon glyphicon-edit"></i>
                        <span>Edit</span>
                    </button>
                  {% } %}
                  {% if (!i && !o.options.autoUpload) { %}
                      <button class="btn btn-primary start" disabled>
                          <i class="glyphicon glyphicon-upload"></i>
                          <span>Start</span>
                      </button>
                  {% } %}
                  {% if (!i) { %}
                      <button class="btn btn-warning cancel">
                          <i class="glyphicon glyphicon-ban-circle"></i>
                          <span>Cancel</span>
                      </button>
                  {% } %}
              </td>
          </tr>
      {% } %}
    </script>
<!-- The template to display files available for download -->
<script id="template-download" type="text/x-tmpl">
      {% for (var i=0, file; file=o.files[i]; i++) { %}
          <tr class="template-download fade{%=file.thumbnailUrl?' image':''%}">
              <td>
                  <span class="preview">
                      {% if (file.thumbnailUrl) { %}
                          <a href="{%=file.url%}" title="{%=file.name%}" download="{%=file.name%}" data-gallery><img src="{%=file.thumbnailUrl%}"></a>
                      {% } %}
                  </span>
              </td>
              <td>
                  <p class="name">
                      {% if (file.url) { %}
                          <a href="{%=file.url%}" title="{%=file.name%}" download="{%=file.name%}" {%=file.thumbnailUrl?'data-gallery':''%}>{%=file.name%}</a>
                      {% } else { %}
                          <span>{%=file.name%}</span>
                      {% } %}
                  </p>
                  {% if (file.error) { %}
                      <div><span class="label label-danger">Error</span> {%=file.error%}</div>
                  {% } %}
              </td>
              <td>
                  <span class="size">{%=o.formatFileSize(file.size)%}</span>
              </td>
              <td>
                  {% if (file.deleteUrl) { %}
                      <button class="btn btn-danger delete" data-type="{%=file.deleteType%}" data-url="{%=file.deleteUrl%}"{% if (file.deleteWithCredentials) { %} data-xhr-fields='{"withCredentials":true}'{% } %}>
                          <i class="glyphicon glyphicon-trash"></i>
                          <span>Delete</span>
                      </button>
                      <input type="checkbox" name="delete" value="1" class="toggle">
                  {% } else { %}
                      <button class="btn btn-warning cancel">
                          <i class="glyphicon glyphicon-ban-circle"></i>
                          <span>Cancel</span>
                      </button>
                  {% } %}
              </td>
          </tr>
      {% } %}
    </script>
@section('js')
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <script src="admin_asset/global/plugins/fancybox/source/jquery.fancybox.pack.js" type="text/javascript"></script>
    <script src="admin_asset/global/plugins/jquery-file-upload/js/vendor/jquery.ui.widget.js"
            type="text/javascript"></script>
    <script src="admin_asset/global/plugins/jquery-file-upload/js/vendor/tmpl.min.js" type="text/javascript"></script>
    <script src="admin_asset/global/plugins/jquery-file-upload/js/vendor/load-image.min.js"
            type="text/javascript"></script>
    <script src="admin_asset/global/plugins/jquery-file-upload/js/vendor/canvas-to-blob.min.js"
            type="text/javascript"></script>
    <script src="admin_asset/global/plugins/jquery-file-upload/blueimp-gallery/jquery.blueimp-gallery.min.js"
            type="text/javascript"></script>
    <script src="admin_asset/global/plugins/jquery-file-upload/js/jquery.iframe-transport.js"
            type="text/javascript"></script>
    <script src="admin_asset/global/plugins/jquery-file-upload/js/jquery.fileupload.js" type="text/javascript"></script>
    <script src="admin_asset/global/plugins/jquery-file-upload/js/jquery.fileupload-process.js"
            type="text/javascript"></script>
    <script src="admin_asset/global/plugins/jquery-file-upload/js/jquery.fileupload-image.js"
            type="text/javascript"></script>
    <script src="admin_asset/global/plugins/jquery-file-upload/js/jquery.fileupload-audio.js"
            type="text/javascript"></script>
    <script src="admin_asset/global/plugins/jquery-file-upload/js/jquery.fileupload-video.js"
            type="text/javascript"></script>
    <script src="admin_asset/global/plugins/jquery-file-upload/js/jquery.fileupload-validate.js"
            type="text/javascript"></script>
    <script src="admin_asset/global/plugins/jquery-file-upload/js/jquery.fileupload-ui.js"
            type="text/javascript"></script>
    <!-- END PAGE LEVEL PLUGINS -->

    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="admin_asset/pages/scripts/form-fileupload.min.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL SCRIPTS -->

    <script src="admin_asset/global/plugins/jquery-repeater/jquery.repeater.js" type="text/javascript"></script>
    <script src="admin_asset/pages/scripts/form-repeater.min.js" type="text/javascript"></script>




    <script type="text/javascript">
        CKEDITOR.replace('body');

        $(document).ready(function () {

            $i = 0;

            $('.mt-repeater').repeater({
                initEmpty: false,
                // defaultValues: {
                //     'text-input': 'foo'
                // },
                show: function () {
                    $(this).prev("div").attr('id', `row-drop-${$i}`);
                    var $this = $('.mt-repeater').find(`#row-drop-${$i}`);
                    // $this.slideDown();
                    // var sels = $this.prevUntil("form.repeater").find("select option:selected");
                    // sels.each(function(e,v){
                    //     $this.find("select option[value='"+v.value+"']").remove();
                    // });
                    $('.select2-container').remove();
                    $('.select2').select2({
                        width: '100%',
                        // placeholder: "Placeholder text",
                        // allowClear: true
                    });
                    $i++;
                    $this.find('#drag-overlay-0').attr('id', `drag-overlay-${$i}`);
                    $this.find('#image-option-0').attr('name', `image-option-${$i}`);
                    $this.find('#image-option-0').attr('id', `image-option-${$i}`);
                    // js_load_dropzone($i);
                },
                // hide: function (deleteElement) {
                //     if (confirm('Are you sure you want to delete this element?')) {
                //         $(this).slideUp(deleteElement);
                //     }
                // },
            })

            // Dropzone.options.dropzone =
            // {
            //     maxFilesize: 10,
            //     renameFile: function (file) {
            //         var dt = new Date();
            //         var time = dt.getTime();
            //         return time + file.name;
            //     },
            //     acceptedFiles: ".jpeg,.jpg,.png,.gif",
            //     addRemoveLinks: true,
            //     timeout: 60000,
            //     success: function (file, response) {
            //         console.log(response);
            //     },
            //     error: function (file, response) {
            //         return false;
            //     }
            // };
            // js_load_dropzone(0);

        });
        /*
         * jQuery File Upload Demo
         * https://github.com/blueimp/jQuery-File-Upload
         *
         * Copyright 2010, Sebastian Tschan
         * https://blueimp.net
         *
         * Licensed under the MIT license:
         * https://opensource.org/licenses/MIT
         */

        /* global $ */

        $(function () {
            'use strict';

            // Initialize the jQuery File Upload widget:
            $('#fileupload').fileupload({
                // Uncomment the following to send cross-domain cookies:
                //xhrFields: {withCredentials: true},
                url: 'server/php/'
            });

            // Enable iframe cross-domain access via redirect option:
            $('#fileupload').fileupload(
                'option',
                'redirect',
                window.location.href.replace(/\/[^/]*$/, '/cors/result.html?%s')
            );

            if (window.location.hostname === 'blueimp.github.io') {
                // Demo settings:
                $('#fileupload').fileupload('option', {
                    url: '//jquery-file-upload.appspot.com/',
                    // Enable image resizing, except for Android and Opera,
                    // which actually support image resizing, but fail to
                    // send Blob objects via XHR requests:
                    disableImageResize: /Android(?!.*Chrome)|Opera/.test(
                        window.navigator.userAgent
                    ),
                    maxFileSize: 999000,
                    acceptFileTypes: /(\.|\/)(gif|jpe?g|png)$/i
                });
                // Upload server status check for browsers with CORS support:
                if ($.support.cors) {
                    $.ajax({
                        url: '//jquery-file-upload.appspot.com/',
                        type: 'HEAD'
                    }).fail(function () {
                        $('<div class="alert alert-danger"></div>')
                            .text('Upload server currently unavailable - ' + new Date())
                            .appendTo('#fileupload');
                    });
                }
            } else {
                // Load existing files:
                $('#fileupload').addClass('fileupload-processing');
                $.ajax({
                    // Uncomment the following to send cross-domain cookies:
                    //xhrFields: {withCredentials: true},
                    url: $('#fileupload').fileupload('option', 'url'),
                    dataType: 'json',
                    context: $('#fileupload')[0]
                })
                    .always(function () {
                        $(this).removeClass('fileupload-processing');
                    })
                    .done(function (result) {
                        $(this)
                            .fileupload('option', 'done')
                            // eslint-disable-next-line new-cap
                            .call(this, $.Event('done'), {result: result});
                    });
            }
        });

    </script>



@endsection
