
@extends('admin.layouts.master')
@section('content')
    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">List
                        <small>Album Category</small>
                    </h1>
                </div>
                <!-- /.col-lg-12 -->
                @if(count($errors)>0)
                    <div class="alert alert-danger">
                        @foreach($errors->all() as $err)
                            {{$err}}<br/>
                        @endforeach
                    </div>
                @endif
                @if(session('notification'))
                    <div class="alert alert-success">
                        {{session('notification')}}
                    </div>
                @endif
                <table class="table table-striped table-bordered table-hover table-style-default" id="dataTables-example">
                    <thead>
                    <tr align="center">
                        <th>ID</th>
                        <th>Name</th>
                        <th>Delete</th>
                        <th>Edit</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($showAlbums as $item)
                        <tr class="odd gradeX" align="center">
                            <td>{{$item->id}}</td>
                            <td>{{$item->title}}</td>
                            <td class="center">
                                <i class="fa fa-trash-o  fa-fw"></i>
                                <a onclick="return confirm('Are you sure?')" href="admin/album-category/delete/{{$item->id}}"> Delete</a>
                            </td>
                            <td class="center">
                                <i class="fa fa-pencil fa-fw"></i>
                                <a href="admin/album-category/edit/{{$item->id}}">Edit</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->
@endsection
