@extends('admin.layouts.index')


@section('content')

    <!-- BEGIN VALIDATION STATES-->
    <div class="portlet light portlet-fit portlet-form bordered">
        <div class="portlet-title">
            <div class="caption">
                <i class=" icon-layers font-red"></i>
                <span class="caption-subject font-red sbold uppercase">Thêm mới: Menu</span>
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
            <form action="{{ route('post_admin_edit_menu', $detail->id) }}" id="add-category" method="POST" role="form" enctype="multipart/form-data">
                {{ csrf_field()}}
                <div class="form-body">
                    <div class="form-group form-md-line-input form-md-floating-label">
                        <div class="row">
                            <div class="col-md-8">
                                <select name="parent_id" id="parent_id" class="form-control js-parent-id-placeholder">
                                    <option value="">Danh mục cha</option>
                                    @foreach($listMenu as $item)
                                        {{$space = ""}}
                                        @if($item->level >0)
                                            @for($i = 1; $i <= $item->level; $i++)
                                                {{$space.="--"}}
                                            @endfor
                                        @endif
                                        <option {{$detail->parent_id == $item->id ? 'selected' : ''}} value="{{$item->id}}">{{ $space }} {{$item->name}}</option>
                                    @endforeach
                                </select>

                            </div>
                            <div class="col-md-4">
                                <select name="group_id" id="group_id" class="form-control js-parent-id-placeholder">
                                    <option value="">Loại menu</option>
                                    @foreach($listMenuGroup as $item)
                                        <option {{$detail->group_id == $item->id ? 'selected' : ''}} value="{{$item->id}}">{{$item->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group form-md-line-input form-md-floating-label">
                        <input type="text" class="form-control" name="name" id="name" value="{{$detail->name}}">
                        <label for="name">Tên *</label>
                    </div>
                    <div class="form-group form-md-line-input form-md-floating-label">
                        <input type="text" class="form-control" name="alias" id="alias" value="{{$detail->alias}}">
                        <label for="alias">alias</label>
                        <span class="help-block">Some help goes here...</span>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group form-md-line-input form-md-floating-label">
                                <input type="text" class="form-control" name="link" id="link" value="{{$detail->link}}">
                                <label for="alias">Link</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-md-line-input form-md-floating-label">
                                <select name="target" id="target" class="form-control js-parent-id-placeholder">
                                    <option value="_self">Target</option>
                                    <option {{$detail->target == "_self" ? 'selected' : ''}} value="_self">_self</option>
                                    <option {{$detail->target == "_blank" ? 'selected' : ''}} value="_blank">_blank</option>
                                </select>
                            </div>
                        </div>
                    </div>



                    <div class="form-group form-md-line-input form-md-floating-label">
                        <input type="number" class="form-control" name="ordering" id="ordering" value="{{$detail->ordering}}">
                        <label for="alias">Số tứ tự</label>
                    </div>


                    <div class="form-group form-md-line-input form-md-floating-label">
                        <div class="row">
                            <div class="col-md-6">
                                <label class="tv-label-default">Trạng thái</label>
                                <div class="input-group">
                                    <div class="icheck-inline">
                                        <label><input type="radio" value="1" name="published" @if($detail->published == 1) checked @endif class="icheck"> Hoạt động </label>
                                        <label><input type="radio" value="0" name="published" @if($detail->published == 0) checked @endif class="icheck"> Ngừng </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                    <div class="fileinput-preview thumbnail" data-trigger="fileinput"
                                         style="width: 70px; height: 70px;">
                                        <img src="{{ $detail->icon ? '/storage/app/public/'.$detail->icon : ''}}" alt="">
                                    </div>

                                    <div>
                                <span class="btn red btn-outline btn-file">
                                    <span class="fileinput-new"> Select icon </span>
                                    <span class="fileinput-exists"> Change </span>
                                    <input type="file" name="icon" value="{{$detail->icon}}"> </span>
                                        <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput">
                                            Remove </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-md-line-input form-md-floating-label">
                        <label for="brief" class="style-label-default">Tóm tắt menu</label>
                        <textarea name="brief" class="form-control" id="brief" >{{$detail->brief}}</textarea>
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


@section('js')
    {{--<script src="{{ asset('admin_asset/js_admin/NewsCategories/default.js') }}"></script>--}}
    <script>
        CKEDITOR.replace('brief');
    </script>
@endsection
