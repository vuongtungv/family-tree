@extends('admin.layouts.master')
@section('content')
    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"> Edit
                        <small>Album category</small>
                    </h1>
                </div>
                <!-- /.col-lg-12 -->
                <div class="col-lg-7" style="padding-bottom:120px">
                    @if(count($errors)>0)
                        <div class="alert alert-danger">
                            @foreach($errors->all() as $err)
                                {{$err}}<br/>
                            @endforeach
                        </div>
                    @endif
                    <form action="admin/album-category/edit/{{$getAlbumCategory->id}}" method="POST">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <div class="form-group">
                            <label>Name albums</label>
                            <input class="form-control" name="title" placeholder="Please enter name of album-category" value="{{ $getAlbumCategory->title }}"/>
                        </div>
                        <button type="submit" class="btn btn-default">Submit edit</button>
                        <a href="admin/album-category/list" type="reset" class="btn btn-default">Cancel</a>
                    </form>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->
@endsection
