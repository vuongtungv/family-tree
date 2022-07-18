@extends('admin.layouts.index')


@section('content')
    <!-- BEGIN PAGE BREADCRUMB -->
    <ul class="page-breadcrumb breadcrumb">
        <li>
            <a href="index.html">Thành viên</a>
            <i class="fa fa-circle"></i>
        </li>
        <li>
            <span class="active">Danh sách thành viên</span>
        </li>
    </ul>
    <!-- END PAGE BREADCRUMB -->

    <!-- BEGIN PAGE BASE CONTENT -->
    <div class="m-heading-1 border-green m-bordered">
        <h3>Danh sách thành viên</h3>
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
                        <span class="caption-subject bold uppercase">Danh sách tin tức</span>
                    </div>
                    <div class="actions style-actions">
                        {{--<a href="javascript:;" class="btn btn-circle btn-outline green">--}}
                            {{--<i class="fa fa-pencil"></i> Edit </a>--}}
                        <a href="{{ route('admin_family_tree_add') }}" class="btn btn-circle blue-steel btn-outline">
                            <i class="fa fa-plus"></i> Add </a>
                        <a class="btn btn-circle btn-icon-only btn-default fullscreen" href="javascript:;" data-original-title="" title=""> </a>
                    </div>
                    <div class="tools"></div>
                </div>
                <div class="portlet-body">
                    <table class="table table-striped table-bordered table-hover table-style-default" id="sample_1">
                        <thead>
                            <tr>
                                <th>STT</th>
                                <th width="50" class="text-center">Ảnh</th>
                                <th>Tên</th>
                                <th>Bố</th>
                                <th>Mẹ</th>
                                <th>Kết hôn với</th>
                                <th>Ghi chú</th>
                                <th>Năm sinh</th>
                                <th>Năm mất</th>
                                <th width="175"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($listFamilyTree as $key=>$item)
                                <tr>
                                    <td>{{ $key+1 }}</td>
                                    <td class="text-center td-image"><img src="{{ $item->image ? '/storage/app/public/'. str_replace('/original/', '/tiny/', $item->img) : ''}}" alt=""></td>
                                    <td><a href="{{ route('admin_edit_family_tree' , $item->id) }}">{{ $item->name }}</a></td>
                                    <td>{{ $item->mid_name }}</td>
                                    <td>{{ $item->fid_name }}</td>
                                    <td>{{ $item->pids_name }}</td>
                                    <td>{{ $item->relationship }}</td>
                                    <td>{{ $item->bdate }}</td>
                                    <td>{{ $item->ddate }}</td>
                                    <td>
                                        <a href="{{ route('admin_edit_family_tree' , $item->id) }}" class="btn btn-outline btn-circle btn-sm purple">
                                            <i class="fa fa-edit"></i> Edit </a>
                                        <a data-id="{{$item->id}}" data-name="{{$item->name}}" href="{{ route('admin_delete_family_tree' , $item->id) }}" class="btn btn-outline btn-circle dark btn-sm black show_confirm">
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
                        url: "{{ route('admin_delete_family_tree') }}",
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
