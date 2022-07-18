@extends('admin.layouts.index')


@section('content')

    <!-- BEGIN VALIDATION STATES-->
    <div class="portlet light portlet-fit portlet-form bordered">
        <div class="portlet-title">
            <div class="caption">
                <i class=" icon-layers font-red"></i>
                <span class="caption-subject font-red sbold uppercase">Thêm mới: Màu sắc</span>
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
            <form action="{{ route('post_admin_product_color_add') }}" id="add-banners" method="POST" role="form" enctype="multipart/form-data">
                {{ csrf_field()}}
                <div class="form-body">
                    <div class="form-group form-md-line-input form-md-floating-label">
                        <input type="text" class="form-control" name="name" id="name">
                        <label for="name">Tên *</label>
                    </div>
                    <div class="form-group form-md-line-input form-md-floating-label">
                        <input type="text" class="form-control" name="alias" id="alias">
                        <label for="alias">alias</label>
                        <span class="help-block">Some help goes here...</span>
                    </div>
                    <div class="form-group form-md-line-input form-md-floating-label">
                        <input type="number" class="form-control" name="ordering" id="ordering">
                        <label for="alias">Số thứ tự</label>
                    </div>


                    <div class="form-group form-md-line-input form-md-floating-label">
                        <label class="tv-label-default">Trạng thái</label>
                        <div class="input-group">
                            <div class="icheck-inline">
                                <label><input type="radio" value="1" name="published" checked class="icheck"> Hoạt động </label>
                                <label><input type="radio" value="0" name="published" class="icheck"> Ngừng </label>
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
    <!-- END VALIDATION STATES-->

@endsection
