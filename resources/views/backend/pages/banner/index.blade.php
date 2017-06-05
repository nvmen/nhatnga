@extends('layouts.backend')
@section('pageTitle', 'Services')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Banner Management
            </h1>
            <div class="row" style="padding-bottom: 17px;">
                <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#addBanner">New
                </button>
            </div>

        </div>
    </div>
    <div class="row">
        <div class="table-responsive">
            <table class="table table-bordered table-hover table-striped">
                <thead>
                <tr>
                    <th>Image</th>
                    <th>Title</th>
                    <th>Sub Title</th>
                    <th>Link</th>
                    <th>Link Text</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>

                @foreach($banners as $banner)
                    <tr>
                        <td>
                            <img src=" {!! route('media.get', ['id'=>$banner->media_id])  !!}" alt=Banner" height="42" width="42">
                        </td>
                        <td>
                            {{$banner->translation('vi')->first()->title}}(Vi)<br/>
                            {{$banner->translation('en')->first()->title}}(En)
                        </td>
                        <td>
                            {{$banner->translation('vi')->first()->sub_title}}(Vi)<br/>
                            {{$banner->translation('en')->first()->sub_title}}(En)
                        </td>
                        <td>
                             {{$banner->translation('vi')->first()->link}}(Vi)<br/>
                             {{$banner->translation('en')->first()->link}}(En)
                        </td>
                        <td>
                            {{$banner->translation('vi')->first()->link_text}}(Vi)<br/>
                            {{$banner->translation('en')->first()->link_text}}(En)
                        </td>
                        <td>


                               <a href="javascript:void(0)"><span class="glyphicon glyphicon-pencil"></span>Edit</a>
                                <a href="javascript:void(0)" onclick="delete_banner('{{$banner->id}}')"><span class="glyphicon glyphicon-trash"></span>Delete</a>



                        </td>
                    </tr>

                @endforeach

                </tbody>
            </table>
        </div>
    </div>



    <div id="addBanner" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Add Banner</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-area">
                                <br style="clear:both">
                                <h3>Select a Image(1920x1080)</h3>
                                <div class="form-group">
                                    <form action="{{route('backend.media.upload')}}" class="dropzone"
                                          id="my-awesome-dropzone">
                                        <div class="fallback">
                                            <input name="filebanner" type="file"/>
                                            <input name="hidden" type="_token" value='{{ csrf_token() }}'/>
                                        </div>
                                    </form>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="title_vi" name="title_vi"
                                           placeholder="Title Vi">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="title_en" name="title_en"
                                           placeholder="Title En">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="sub_title_vi" name="sub_title_vi"
                                           placeholder="Sub Title Vi">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="sub_title_en" name="sub_title_en"
                                           placeholder="Sub Title EN">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="link_vi" name="link_vi"
                                           placeholder="Link Vi  Example(http://google.com)">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="link_en" name="link_en"
                                           placeholder="Link En  Example(http://google.com)">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="link_text_vi" name="link_text_vi"
                                           placeholder="Link Text Vi Example(Xem)">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="link_text_en" name="link_text_en"
                                           placeholder="Link Text En Example(View Tour)">
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" id="submit" name="submit" class="btn btn-primary pull-right"
                            onclick="add_new()">Save
                    </button>

                </div>
            </div>

        </div>
    </div>

    <script>
        var global_files = [];
        var global_media =[];

        function delete_banner(id){
            bootbox.confirm("Are you sure you want to delete this banner?", function(result){

                /* your callback code */
                if(result){
                    show_spinner();
                    var token = '{{ csrf_token() }}';
                    var obj ={_token:token,id:id};
                    $.post('{{route('backend.banner.delete')}}', obj)
                            .done(function (data) {
                                   hide_spinner();
                                if (data.success == true) {
                                    //  $.notify("Delete successful", "success");

                                    $.notify("Delete successful", "success");
                                    setTimeout(function () {
                                                location.reload();
                                            }
                                            , 500);
                                } else {
                                    // $.notify(data.message, "error")

                                    hide_spinner();
                                }
                            })
                            .fail(function() {
                                hide_spinner();
                            });
                }else{

                }
            })
        }
        function add_new() {

            var token = '{{ csrf_token() }}';
            var title_vi = $('#title_vi').val();
            var title_en = $('#title_en').val();

            var sub_title_vi = $('#sub_title_vi').val();
            var sub_title_en = $('#sub_title_en').val();

            var link_vi = $('#link_vi').val();
            var link_en = $('#link_en').val();

            var link_text_vi = $('#link_text_vi').val();
            var link_text_en = $('#link_text_en').val();

            if (global_media.length == 0) return false;
            var media_id = global_media[0].id;

            var obj = {
                _token: token,
                title_vi: title_vi,
                title_en: title_en,
                sub_title_vi: sub_title_vi,
                sub_title_en: sub_title_en,
                link_vi: link_vi,
                link_en: link_en,
                link_text_vi: link_text_vi,
                link_text_en: link_text_en,
                media_ids: media_id
            }
          //  console.log('===========>',obj)
             show_spinner();
            $.post('{{route('backend.banner.add')}}', obj)
                    .done(function (data) {
                        hide_spinner();
                        if (data.success == true) {
                          //  $.notify("Delete successful", "success");
                            $('#addBanner').modal('hide');
                            $.notify("Add successful", "success");

                            setTimeout(function () {
                                        location.reload();
                                    }
                                    , 500);

                        } else {
                           // $.notify(data.message, "error")

                            hide_spinner();
                        }
                    })
                    .fail(function() {
                       hide_spinner();
                    });

        }
        $(function () {
            Dropzone.options.myAwesomeDropzone = {
                maxFilesize: 5,
                maxFiles: 1,
                uploadMultiple: false,
                addRemoveLinks: true,
                dictResponseError: 'Server not Configured',
                acceptedFiles: ".png,.jpg,.gif,.bmp,.jpeg",
                init: function () {
                    var self = this;
                    // config
                    self.options.addRemoveLinks = true;
                    self.options.dictRemoveFile = "Delete";
                    //New file added
                    self.on("addedfile", function (file) {
                        if (global_files.length == 1) {
                            return;
                        }
                        console.log('new file added ', file);
                    });
                    // Send file starts
                    self.on("sending", function (file) {
                        console.log('upload started', file);
                        $('.meter').show();
                    });

                    // File upload Progress
                    self.on("totaluploadprogress", function (progress) {
                        console.log("progress ", progress);
                        $('.roller').width(progress + '%');
                    });

                    self.on("queuecomplete", function (progress) {
                        $('.meter').delay(999).slideUp(999);
                    });

                    // On removing file
                    self.on("removedfile", function (file) {
                        global_files =[];
                        global_media =[];
                        /*
                        for (var i = 0; i < global_files.length; i++) {
                            if (global_files[i] == file) {
                                global_files =[];
                            }
                        }
                        for (var i = 0; i < global_media.length; i++) {
                            if (global_media[i] == file) {
                                alert('trung');
                            }
                        }
                        */

                      //  console.log(file);
                    });
                    self.on("success", function (file, response) {

                        global_files.push(file);
                        global_media.push(response.data);
                        console.log('=========>data', response);
                    });
                }
            };
        })
    </script>


@stop

