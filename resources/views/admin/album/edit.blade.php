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
                    <form action="admin/album//edit/{{$getAlbum->id}}" method="POST">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <div class="form-group">
                            <label>Name album</label>
                            <input class="form-control" name="title" placeholder="Please enter name of album" value="{{ $getAlbum->title }}"/>
                        </div>
                        <div class="form-group">
                            <label>Brief album</label>
                            <input class="form-control" name="brief" placeholder="Please enter brief of album" value="{{ $getAlbum->brief }}"/>
                        </div>
                        <div class="form-group">
                            <label>Album - Category</label>
                            <select class="form-control" name="txtAlbumCategory">
                                <option>----- Select Category albums -----</option>
                                @foreach($getAlbumCategory as $getAC)
                                    <option
                                        @if($getAlbum->id_album_category == $getAC->id)
                                            {{"selected"}}
                                        @endif
                                            value="{{$getAC->id}}"
                                    >
                                        {{ $getAC->title }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        // choose file type1
                        {{--<div class="form-group">--}}
                            {{--<label for="files" class="custom-file-upload">--}}
                                {{--<i class="fa fa-cloud-upload"></i> Custom Upload--}}
                            {{--</label>--}}
                            {{--<input id="files" type="file" multiple name="file[]" accept="image/x-png,image/gif,image/jpeg"/>--}}
                            {{--<output id="result"/>--}}
                            {{--<?php--}}
                                {{--$imgs=[];--}}
                                {{--for($i= 0; $i<count($getDetailAlbum); $i++){--}}
                    {{--//            echo "<pre>";--}}
                    {{--//            print_r($getDetailAlbum[$i]->images_name);--}}
                    {{--//            echo "<pre>";--}}
                                    {{--$imgs[] = $getDetailAlbum[$i]->images_name;--}}

                                {{--}--}}
                            {{--?>--}}
                            {{--@foreach($imgs as $img)--}}
                                {{--<img src="images/{{$img}}" style="width: 50%; height: 50%"/>--}}
                            {{--@endforeach--}}
                        {{--</div>--}}
                        

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
    <style>
        input[type="file"] {
            display: none;
        }
        .custom-file-upload {
            border: 1px solid #ccc;
            display: inline-block;
            padding: 6px 12px;
            cursor: pointer;
        }
    </style>


    // js type 1
    <script>
        window.onload = function(){

            //Check File API support
            if(window.File && window.FileList && window.FileReader)
            {
                var filesInput = document.getElementById("files");

                filesInput.addEventListener("change", function(event){

                    var files = event.target.files; //FileList object
                    var output = document.getElementById("result");

                    for(var i = 0; i< files.length; i++)
                    {
                        var file = files[i];

                        //Only pics
                        if(!file.type.match('image'))
                            continue;

                        var picReader = new FileReader();

                        picReader.addEventListener("load",function(event){

                            var picFile = event.target;

                            var div = document.createElement("div");

                            div.innerHTML = "<img class='thumbnail' style='width:30%; height:30%; float:left' src='" + picFile.result + "'" +
                                "title='" + picFile.name + "'/>";

                            output.insertBefore(div,null);

                        });

                        //Read the image
                        picReader.readAsDataURL(file);
                    }

                });
            }
            else
            {
                console.log("Your browser does not support File API");
            }
        }
    </script>


    // js show file type 2
    <script>

    </script>


@endsection
