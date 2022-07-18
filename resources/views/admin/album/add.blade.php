@extends('admin.layouts.master')
@section('content')
    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"> Add
                        <small>Album</small>
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
                    <form action="admin/album/add" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <div class="form-group">
                            <label>Name album</label>
                            <input class="form-control" name="title" placeholder="Please enter name of album"/>
                        </div>
                        <div class="form-group">
                            <label>Brief album</label>
                            <input class="form-control" name="brief" placeholder="Please enter brief of album"/>
                        </div>
                        <div class="form-group">
                            <label>Album - Category</label>
                            <select class="form-control" name="txtAlbumCategory">
                                {{--<option>--- Choose album category ---</option>--}}
                                @foreach($albumCategory as $albumcate)
                                    <option value="{{ $albumcate->id }}">{{ $albumcate->title }}</option>
                                @endforeach
                            </select>
                        </div>

                        {{--show file type1--}}
                        <div class="form-group">
                            <label for="files" class="custom-file-upload">
                                <i class="fa fa-cloud-upload"></i> Custom Upload
                            </label>
                            <input id="files" type="file" multiple name="file[]" accept="image/x-png,image/gif,image/jpeg"/>
                            <output id="result"/>
                        </div>

                        {{--show file type 2--}}
                        {{--<div class="form-control">--}}
                            {{--<label for="files" class="custom-file-upload">--}}
                                {{--<i class="fa fa-cloud-upload"></i> Custom Upload--}}
                            {{--</label>--}}
                            {{--<input id="fileupload" type="file" name="files[]" multiple>--}}
                        {{--</div>--}}

                        <div class="form-group" style="margin-top: 10px;">
                            <button type="submit" class="btn btn-default">Add album</button>
                            <button type="reset" class="btn btn-default">Reset</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->
    
    <style>
        /*CSS choose file type 1*/
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


    {{--js type 1--}}
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
@endsection
