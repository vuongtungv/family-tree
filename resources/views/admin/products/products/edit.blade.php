@extends('admin.layouts.index')
@section('css')
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    {{--<link href="admin_asset/global/plugins/dropzone/dropzone.min.css" rel="stylesheet" type="text/css" />--}}
    {{--<link href="admin_asset/global/plugins/dropzone/basic.min.css" rel="stylesheet" type="text/css" />--}}

    <link href="https://cdn.syncfusion.com/ej2/material.css" rel="stylesheet">

@endsection

@section('content')

    <!-- BEGIN VALIDATION STATES-->
    <div class="portlet light portlet-fit portlet-form bordered">
        <div class="portlet-title">
            <div class="caption">
                <i class=" icon-layers font-red"></i>
                <span class="caption-subject font-red sbold uppercase">Chi tiết: Sản phẩm</span>
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
            <form action="{{ route('post_admin_edit_products_products', $detail->id) }}" id="add-product" method="POST" role="form" enctype="multipart/form-data">
                {{ csrf_field()}}
                <div class="form-body">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item active">
                            <a class="nav-link " id="product-infor-tab" data-toggle="tab" href="#product-infor" role="tab" aria-controls="product-infor" aria-selected="true">Thông tin cơ bản</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="product-option-tab" data-toggle="tab" href="#product-option" role="tab" aria-controls="product-option" aria-selected="false">Product option</a>
                        </li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane active" id="product-infor" role="tabpanel" aria-labelledby="product-infor-tab">
                            <div class="form-group">
                                <label class="tv-label-default" for="category_id">Danh mục *</label>
                                <select data-placeholder="Chọn danh mục cha" id="category_id" name="category_id" class="form-control js-parent-id-placeholder select2">
                                    <option value="">Danh mục</option>
                                    @foreach($listCategoryProducts as $item)
                                        {{$space = ''}}
                                        @if($item->level >0)
                                            @for($i = 1; $i <= $item->level; $i++)
                                                {{$space.=" -- "}}
                                            @endfor
                                        @endif
                                        <option @if($detail->category_id == $item->id) selected @endif value="{{$item->id}}">{{$space.$item->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group form-md-line-input form-md-floating-label">
                                <input type="text" class="form-control" name="name" id="name" value="{{$detail->name}}">
                                <label for="name">Tiêu đề *</label>
                            </div>

                            <div class="form-group form-md-line-input form-md-floating-label">
                                <input type="text" class="form-control" name="alias" id="alias" value="{{$detail->alias}}">
                                <label for="alias">Alias</label>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group form-md-line-input form-md-floating-label">
                                        <input type="text" class="form-control" name="price_range_1" id="price_range_1" value="{{$detail->price_range_1}}">
                                        <label for="price_range_1">Khoảng giá từ</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group form-md-line-input form-md-floating-label">
                                        <input type="text" class="form-control" name="price_range_2" id="price_range_2" value="{{$detail->price_range_2}}">
                                        <label for="price_range_2">Đến</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="tv-label-default" for="category_id">Kiểu khuyến mãi</label>
                                        <select data-placeholder="Kiểu khuyến mãi" id="discount_type" name="discount_type" class="form-control js-parent-id-placeholder select2">
                                            <option value=""></option>
                                            <option value="percent" @if($detail->discount_type == 'percent') checked @endif>Phần trăm (%)</option>
                                            <option value="discount" @if($detail->discount_type == 'discount') checked @endif>Giảm giá</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group form-md-line-input form-md-floating-label margin-top-10 margin-bottom-15">
                                        <input type="text" class="form-control" name="discount_value" id="discount_value" value="{{$detail->discount_value}}">
                                        <label for="discount_value">Giá trị khuyến mãi</label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group form-md-line-input form-md-floating-label">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label class="tv-label-default">Trạng thái</label>
                                        <div class="input-group">
                                            <div class="icheck-inline">
                                                <label><input type="radio" value="1" name="status" @if($detail->published == '1') checked @endif class="icheck"> Hoạt động </label>
                                                <label><input type="radio" value="0" name="status" @if($detail->published == '0') checked @endif class="icheck"> Ngừng </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="tv-label-default">Trang chủ</label>
                                        <div class="input-group">
                                            <div class="icheck-inline">
                                                <label><input type="radio" value="1" name="show_home" @if($detail->show_home == '1') checked @endif class="icheck"> Hiện </label>
                                                <label><input type="radio" value="0" name="show_home" @if($detail->show_home == '0') checked @endif class="icheck"> Ẩn </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group form-md-line-input form-md-floating-label">
                                <input type="number" class="form-control" name="ordering" id="ordering" value="{{$detail->ordering}}">
                                <label for="ordering">Số tứ tự</label>
                            </div>

                            <div class="form-group form-md-line-input form-md-floating-label">
                                <input type="text" class="form-control" name="brief" id="brief" value="{{$detail->brief}}">
                                <label for="brief">Tóm tắt</label>
                            </div>
                            <div class="form-md-line-input form-md-floating-label">
                                <label for="body" class="style-label-default">Nội dung</label>
                                <textarea name="body" class="form-control" id="body">{{$detail->description}}</textarea>
                            </div>

                            <div class="upload-image form-group form-md-line-input form-md-floating-label">
                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                    <div class="fileinput-preview thumbnail" data-trigger="fileinput"
                                         style="width: 200px; height: 150px;">
                                        <img src="{{ $detail->image ? '/storage/app/public/'.$detail->image : ''}}" alt="">
                                    </div>
                                <div>
                            <span class="btn red btn-outline btn-file">
                                <span class="fileinput-new"> Select image </span>
                                <span class="fileinput-exists"> Change </span>
                                <input type="file" name="image" value="{{$detail->image}}"> </span>
                                        <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput">
                                            Remove </a>
                                    </div>
                                </div>
                                <div class="clearfix margin-top-10">
                                    <span class="label label-success">NOTE!</span> Image preview only works in IE10+, FF3.6+,
                                    Safari6.0+, Chrome6.0+ and Opera11.1+. In older browsers the filename is shown instead.
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="product-option" role="tabpanel" aria-labelledby="product-option-tab">
                            <div class="form-group">
                                <div class="width-over">
                                    @foreach($detail_option as $key => $item_option)
                                    <div class="item-detail" data-id-option="{{$item_option->id}}">
                                        <div class="row">
                                            <div class="col-md-7">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <label for="name_option">Tên</label>
                                                        <input type="text" class="form-control" name="name_option[{{$item_option->id}}]" id="name_option" value="{{$item_option->name}}">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label class="control-label" for="style_id">Kiểu dáng</label>
                                                        <select data-placeholder="Chọn kiểu dáng" id="style_id" name="style_id[{{$item_option->id}}]" class="form-control js-parent-id-placeholder select2">
                                                            <option value="">Danh mục</option>
                                                            @foreach($listStyle as $item)
                                                                <option @if($item->id == $item_option->style_id) selected @endif value="{{$item->id}}">{{$item->name}}</option>
                                                            @endforeach
                                                        </select>

                                                        <label class="control-label" for="color_id">Màu sắc</label>
                                                        <select data-placeholder="Chọn màu sắc" id="color_id" name="color_id[{{$item_option->id}}]" class="form-control js-parent-id-placeholder select2">
                                                            <option value="">Danh mục</option>
                                                            @foreach($listColor as $item)
                                                                <option @if($item->id == $item_option->color_id) selected @endif value="{{$item->id}}">{{$item->name}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label class="control-label" for="size_id">Kích thước</label>
                                                        <select data-placeholder="Chọn kích thước" id="size_id" name="size_id[{{$item_option->id}}]" class="form-control js-parent-id-placeholder select2">
                                                            <option value="">Danh mục</option>
                                                            @foreach($listSize as $item)
                                                                <option @if($item->id == $item_option->size_id) selected @endif value="{{$item->id}}">{{$item->name}}</option>
                                                            @endforeach
                                                        </select>

                                                        <label class="control-label">Qty</label>
                                                        <input type="text" name="quantity[{{$item_option->id}}][]" placeholder="0" class="form-control" value="{{$item_option->quantity}}" />
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label class="tv-label-default">Trạng thái</label>
                                                        <div class="input-group">
                                                            <div class="icheck-inline lh-32">
                                                                <label><input type="checkbox" id="published_option" name="published_option[{{$item_option->id}}][]" @if($item_option->published == 1) checked @endif> Hoạt động </label>
                                                            </div>
                                                        </div>

                                                        <label class="control-label">Giá</label>
                                                        <input type="text" placeholder="0" class="form-control" name="price[{{$item_option->id}}]" value="{{$item_option->price}}"/>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-md-4">
                                                <label class="control-label">Ảnh</label>
                                                <div id='uploadfile'>
                                                    <input type="file" id="fileupload-detail-{{$item_option->id}}" name="FilesOption[{{$item_option->id}}][]" multiple/>
                                                </div>
                                            </div>
                                            <div class="col-md-1">
                                                <label class="control-label">&nbsp;</label>
                                                <a href="javascript:;" onclick="delete_item_option({{$item_option->id}})" data-repeater-delete class="btn btn-danger">
                                                    <i class="fa fa-close"></i>
                                                </a>
                                            </div>
                                            <hr class="col-md-12">
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="mt-repeater width-over">
                                    <div data-repeater-list="group_a">
                                        <div data-repeater-item class="row">
                                            <div class="col-md-7">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <label for="name_option">Tên</label>
                                                        <input type="text" class="form-control" name="name_option" id="name_option">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label class="control-label" for="style_id">Kiểu dáng</label>
                                                        <select data-placeholder="Chọn kiểu dáng" id="style_id" name="style_id[]" class="form-control js-parent-id-placeholder select2">
                                                            <option value="">Danh mục</option>
                                                            @foreach($listStyle as $item)
                                                                <option value="{{$item->id}}">{{$item->name}}</option>
                                                            @endforeach
                                                        </select>

                                                        <label class="control-label" for="color_id">Màu sắc</label>
                                                        <select data-placeholder="Chọn màu sắc" id="color_id" name="color_id[]" class="form-control js-parent-id-placeholder select2">
                                                            <option value="">Danh mục</option>
                                                            @foreach($listColor as $item)
                                                                <option value="{{$item->id}}">{{$item->name}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label class="control-label" for="size_id">Kích thước</label>
                                                        <select data-placeholder="Chọn kích thước" id="size_id" name="size_id[]" class="form-control js-parent-id-placeholder select2">
                                                            <option value="">Danh mục</option>
                                                            @foreach($listSize as $item)
                                                                <option value="{{$item->id}}">{{$item->name}}</option>
                                                            @endforeach
                                                        </select>

                                                        <label class="control-label">Qty</label>
                                                        <input type="text" name="quantity" placeholder="0" class="form-control" />
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label class="tv-label-default">Trạng thái</label>
                                                        <div class="input-group">
                                                            <div class="icheck-inline lh-32">
                                                                <label><input type="checkbox" id="published_option" name="published_option" value="Hoạt động" checked> Hoạt động </label>

                                                            </div>
                                                        </div>

                                                        <label class="control-label">Giá</label>
                                                        <input type="text" placeholder="0" class="form-control" name="price"/>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-md-4">
                                                <label class="control-label">Ảnh</label>
                                                <div id='uploadfile'>
                                                    <input type="file" id="fileupload-0" name="UploadFiles" multiple/>
                                                </div>
                                                {{--<input type="hidden" value="{{$js_image_option}}">--}}
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


@section('js')
    {{--<script src="admin_asset/global/plugins/dropzone/dropzone.min.js" type="text/javascript"></script>--}}
    {{--<script src="admin_asset/pages/scripts/form-dropzone.min.js" type="text/javascript"></script>--}}

    <script src="admin_asset/global/plugins/jquery-repeater/jquery.repeater.js" type="text/javascript"></script>
    <script src="admin_asset/pages/scripts/form-repeater.min.js" type="text/javascript"></script>

    <script src="https://cdn.syncfusion.com/ej2/dist/ej2.min.js" type="text/javascript"></script>




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
                    $(this).prev("div").attr('id',`row-drop-${$i}`);
                    var $this = $('.mt-repeater').find(`#row-drop-${$i}`);

                    $('.select2-container').remove();
                    $('.select2').select2({
                        width: '100%',
                        // placeholder: "Placeholder text",
                        // allowClear: true
                    });
                    $i++;
                    // $this.find('#drag-overlay-0').attr('id',`drag-overlay-${$i}`);
                    // $this.find('#image-option-0').attr('name',`image-option-${$i}`);
                    // $this.find('#image-option-0').attr('id',`image-option-${$i}`);
                    // js_load_dropzone($i);
                    $this.find('#fileupload-0').attr('id',`fileupload-${$i}`);
                    ej2_sj($i);
                },
                hide: function (deleteElement) {
                    if(confirm('Are you sure you want to delete this element?')) {
                        $(this).slideUp(deleteElement);
                    }
                },
            })


            ej2_sj(0);

        });

        function ej2_sj($i) {
            ej.base.enableRipple(true);

            // Initialize the uploader component
            var uploadObj = new ej.inputs.Uploader({
                asyncSettings: {
                    saveUrl: 'https://aspnetmvc.syncfusion.com/services/api/uploadbox/Save',
                    removeUrl: 'https://aspnetmvc.syncfusion.com/services/api/uploadbox/Remove'
                },
                // files: preloadFiles,
                // removing: onFileRemove,
                // dropArea: dropElement
            });

            //Render initialized Uploader
            uploadObj.appendTo('#fileupload-'+$i);
        }



        /// show img từng option
        let img_option_list = <?php echo json_encode($js_image_option); ?>;

        if(img_option_list){

            for (let i in img_option_list){
                let img_list_obj = img_option_list[i];

                let img_list = [];
                for (const key of Object.keys(img_list_obj)) {
                    // console.log(img_list_obj[key]);
                    img_list.push(img_list_obj[key]);
                }

                let preloadFiles = img_list;
                ej.base.enableRipple(true);
                //Initialize the control by preload files
                let uploadObjPre = new ej.inputs.Uploader({
                    asyncSettings: {
                        saveUrl: 'https://ej2.syncfusion.com/services/api/uploadbox/Save',
                        removeUrl: 'https://ej2.syncfusion.com/services/api/uploadbox/Remove'
                    },
                    files: preloadFiles,
                });
                uploadObjPre.appendTo(`#fileupload-detail-${i}`);
            }
        }

        // let preloadFiles = [
        //     {name: 'Nature', size: 500000},
        //     {name: 'TypeScript Succinctly', size: 12000, type: '.pdf'},
        //     {name: 'ASP.NET Webhooks', size: 500000, type: '.docx'},
        // ];
        // ej.base.enableRipple(true);
        // //Initialize the control by preload files
        // let uploadObjPre = new ej.inputs.Uploader({
        //     asyncSettings: {
        //         saveUrl: 'https://ej2.syncfusion.com/services/api/uploadbox/Save',
        //         removeUrl: 'https://ej2.syncfusion.com/services/api/uploadbox/Remove'
        //     },
        //     files: preloadFiles,
        // });
        // uploadObjPre.appendTo('#fileupload-detail-1');


        const _token = $('input[name="_token"]').val();
        // click to delete image
        $('.e-file-delete-btn').click(function(){
            let url_image_delete = $(this).parent().attr('data-file-name');
            if(url_image_delete){

                $.ajax({
                    url: "{{route("delete_item_image_in_detail_product")}}",
                    method: "POST",
                    data:{url_image:url_image_delete, _token:_token},
                    success:function(data){

                    }
                });
            }
        });


        function delete_item_option(id_option) {

            if (confirm("Bạn có chắc chắn muốn xóa?")) {
                $.ajax({
                    url: "{{route("delete_item_option_in_detail_product")}}",
                    method: "POST",
                    data:{id_option:id_option, _token:_token},
                    success:function(data){
                        if(data){
                            $(".item-detail[data-id-option='"  + id_option + "']").remove();
                        }
                    }
                });
            } else {

            }
        }

    </script>
@endsection
