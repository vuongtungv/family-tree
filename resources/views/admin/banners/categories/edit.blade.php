@extends('admin.layouts.index')


@section('content')

    <!-- BEGIN VALIDATION STATES-->
    <div class="portlet light portlet-fit portlet-form bordered">
        <div class="portlet-title">
            <div class="caption">
                <i class=" icon-layers font-red"></i>
                <span class="caption-subject font-red sbold uppercase">Chỉnh sửa: Danh mục Banners</span>
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
            <form action="{{ route('post_admin_edit_banners_category',  $detail->id) }}" id="add-category" method="POST" role="form" enctype="multipart/form-data">
                {{ csrf_field()}}
                <div class="form-body">
                    <div class="form-group form-md-line-input form-md-floating-label">
                        <input type="text" class="form-control" name="name" id="name" value="{{$detail->name}}">
                        <label for="name">Tên *</label>
                    </div>
                    <div class="form-group form-md-line-input form-md-floating-label">
                        <input type="text" class="form-control" name="alias" id="alias" value="{{$detail->alias}}">
                        <label for="alias">alias</label>
                        <span class="help-block">Some help goes here...</span>
                    </div>

                    <div class="form-group form-md-line-input form-md-floating-label">
                        <input type="number" class="form-control" name="ordering" id="ordering" value="{{$detail->ordering}}">
                        <label for="alias">Số tứ tự</label>
                    </div>


                    <div class="form-group form-md-line-input form-md-floating-label">
                        <label class="tv-label-default">Trạng thái</label>
                        <div class="input-group">
                            <div class="icheck-inline">
                                <label><input type="radio" value="1" name="status" @if($detail->status == 1) checked @endif class="icheck"> Hoạt động </label>
                                <label><input type="radio" value="0" name="status" @if($detail->status == 0) checked @endif class="icheck"> Ngừng </label>
                            </div>
                        </div>
                    </div>



                    <div class="upload-image form-group form-md-line-input form-md-floating-label">
                        <div class="row">
                            <div class="col-md-6">
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
                            </div>

                        </div>

                        <div class="clearfix margin-top-10">
                            <span class="label label-success">NOTE!</span> Image preview only works in IE10+, FF3.6+,
                            Safari6.0+, Chrome6.0+ and Opera11.1+. In older browsers the filename is shown instead.
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
    <!-- END VALIDATION STATES-->


@endsection
