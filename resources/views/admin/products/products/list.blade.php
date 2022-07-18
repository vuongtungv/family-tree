@extends('admin.layouts.index')


@section('content')
    <!-- BEGIN PAGE BREADCRUMB -->
    <ul class="page-breadcrumb breadcrumb">
        <li>
            <a href="index.html">Sản phẩm</a>
            <i class="fa fa-circle"></i>
        </li>
        <li>
            <span class="active">Danh mục sản phẩm</span>
        </li>
    </ul>
    <!-- END PAGE BREADCRUMB -->

    <!-- BEGIN PAGE BASE CONTENT -->
    <div class="m-heading-1 border-green m-bordered">
        <h3>Danh mục sản phẩm</h3>
        <p> A common UI paradigm to use with interactive tables is to present buttons that will trigger some action - that may be to alter the table's state, modify the data in the table, gather the data from the table or even to activate
            some external process. Showing such buttons is an interface that end users are comfortable with, making them feel at home with the table. </p>
    </div>
    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN EXAMPLE TABLE PORTLET-->
            <div class="portlet light bordered">
                <div class="portlet-title">
                    <div class="caption font-dark">
                        <i class="icon-settings font-dark"></i>
                        <span class="caption-subject bold uppercase">Danh mục sản phẩm</span>
                    </div>
                    <div class="actions style-actions">
                        {{--<a href="javascript:;" class="btn btn-circle btn-outline green">--}}
                            {{--<i class="fa fa-pencil"></i> Edit </a>--}}
                        <a href="{{ route('admin_add_products_products') }}" class="btn btn-circle blue-steel btn-outline">
                            <i class="fa fa-plus"></i> Add </a>
                        <a class="btn btn-circle btn-icon-only btn-default fullscreen" href="javascript:;" data-original-title="" title=""> </a>
                    </div>
                    <div class="tools"></div>
                </div>
                <div class="portlet-body" style="padding-top: 0px;">
                    @if(count($errors)>0)
                        <div class="alert alert-danger">
                            @foreach($errors->all() as $err)
                                {{$err}}<br/>
                            @endforeach
                        </div>
                    @endif
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{session('success')}}
                        </div>
                    @endif
                    <table class="table table-bordered table-hover table-style-default table-products" id="sample_1">
                        <thead>
                            <tr>
                                <th class="width-stt">STT</th>
                                <th width="50" class="text-center">Ảnh</th>
                                <th>Tên sản phẩm</th>
                                <th>Danh mục</th>
                                <th width="40">Trạng thái</th>
                                <th width="175"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($listProducts  as $key=>$item)
                                <tr data-id="{{$item->id}}">
                                    <td class="text-center">{{ $key+1 }}</td>
                                    <td class="text-center td-image"><img src="{{ $item->image ? '/storage/app/public/'. str_replace('/original/', '/tiny/', $item->image) : ''}}" alt=""></td>
                                    <td><a href="{{ route('admin_edit_products_products' , $item->id) }}">{{ $item->name }}</a></td>
                                    <td>{{ $item->category_name }}</td>
                                    <td class="text-center">
                                        @if($item->published == 1)
                                            <span class="label label-sm label-success"> Hoạt động </span>
                                        @else
                                            <span class="label label-sm label-danger"> Khóa </span>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ route('admin_edit_products_products' , $item->id) }}" class="btn btn-outline btn-circle btn-sm purple">
                                            <i class="fa fa-edit"></i> Edit </a>
                                        <a data-id="{{$item->id}}" data-name="{{$item->name}}" href="{{ route('admin_delete_products_products' , $item->id) }}" class="btn btn-outline btn-circle dark btn-sm black show_confirm">
                                            <i class="fa fa-trash-o"></i> Delete </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- END EXAMPLE TABLE PORTLET-->
        </div>
    </div>
    {{ csrf_field()}}
    <!-- END BEGIN PAGE BASE CONTENT -->
@endsection

@section('js')
    <script type="text/javascript">
        $(document).on('click', '.show_confirm', function (e) {
            e.preventDefault();
            const _token = $('input[name="_token"]').val();
            let id = $(this).data('id');
            let name = $(this).data('name');
            swal({
                    title: `Bạn có chắc chắn muốn xóa: ${name} !`,
                    type: "warning",
                    confirmButtonClass: "btn-danger",
                    confirmButtonText: "Yes!",
                    showCancelButton: true,
                },
                function() {
                    $.ajax({
                        type: "POST",
                        url: "{{ route('admin_delete_products_products') }}",
                        data: {id:id , _token:_token},
                        success: function (data) {
                            //
                            // location.reload();
                            $("table tr[data-id='"  + id + "']").remove();
                        }
                    });
                });
        });

    </script>
@endsection
