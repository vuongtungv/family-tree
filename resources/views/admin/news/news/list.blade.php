@extends('admin.layouts.index')


@section('content')
    <!-- BEGIN PAGE BREADCRUMB -->
    <ul class="page-breadcrumb breadcrumb">
        <li>
            <a href="index.html">Tin tức</a>
            <i class="fa fa-circle"></i>
        </li>
        <li>
            <span class="active">Danh sách tin tức</span>
        </li>
    </ul>
    <!-- END PAGE BREADCRUMB -->

    <!-- BEGIN PAGE BASE CONTENT -->
    <div class="m-heading-1 border-green m-bordered">
        <h3>Danh sách tin tức</h3>
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
                        <a href="{{ route('admin_add_news') }}" class="btn btn-circle blue-steel btn-outline">
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
                                <th>Tiêu đề</th>
                                <th>Danh mục</th>
                                <th class="text-center" width="40">Trạng thái</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($listNews as $key=>$item)
                                <tr>
                                    <td>{{ $key+1 }}</td>
                                    <td><a href="{{ route('admin_edit_news' , $item->id) }}">{{ $item->name }}</a></td>
                                    <td>{{ $item->category_name }}</td>
                                    <td class="text-center">
                                        @if($item->status == 1)
                                            <span class="label label-sm label-success"> Hoạt động </span>
                                        @else
                                            <span class="label label-sm label-danger"> Khóa </span>
                                        @endif
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
