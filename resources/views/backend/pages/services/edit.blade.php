@extends('layouts.backend')
@section('pageTitle', 'Services')
@section('content')
    <div class="row">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit Service</h4>
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
                                <label for="title_vi">Name Vi</label>
                                <input type="text" class="form-control" id="title_vi" name="title_vi"
                                       placeholder="Title Vi"
                                       value="{{$service_vi->name}}"
                                >
                            </div>
                            <div class="form-group">
                                <label for="title_vi">Name En</label>
                                <input type="text" class="form-control" id="title_en" name="title_en"
                                       value="{{$service_en->name}}"
                                       placeholder="Title En">
                            </div>
                            <div class="form-group">
                                <label for="content_vi">Content Vi</label>
                               <textarea id="content_vi" name="content_vi" class="form-control">
                                   {{$service_vi->content}}
                                </textarea>
                            </div>
                            <div class="form-group">
                                <label for="content_en">Content En</label>
                               <textarea id="content_en" name="content_en" class="form-control">
                                    {{$service_en->content}}
                                </textarea>
                            </div>
                            <input type="hidden" name="id" id="id" value="{{$service->id}}"/>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" id="submit" name="submit" class="btn btn-primary pull-right"
                        onclick="save_edit()">Save
                </button>

            </div>
        </div>
    </div>


    <script>
        var global_files = [];
        var global_media = [{{$service->media_ids}}];

        CKEDITOR.replace('content_vi', options);
        CKEDITOR.replace('content_en', options);


        function save_edit() {

            var token = '{{ csrf_token() }}';
            var title_vi = $('#title_vi').val();
            var title_en = $('#title_en').val();
            var id = $('#id').val();

            var content_vi = CKEDITOR.instances['content_vi'].getData();
            var content_en = CKEDITOR.instances['content_en'].getData();

            if (global_media.length == 0) return false;
            var media_id = global_media[0].id;
            var old_media_id ='{{$service->media_ids}}';
            if(media_id== undefined){
                media_id = old_media_id;
            }
            var obj = {
                _token: token,
                name_vi: title_vi,
                id: id,
                name_en: title_en,
                content_vi: content_vi,
                content_en: content_en,
                media_ids: media_id
            }
            //  console.log('===========>',obj)
            show_spinner();
            $.post('{{route('backend.services.save')}}', obj)
                    .done(function (data) {
                        hide_spinner();
                        if (data.success == true) {
                            $.notify("Edit successful", "success");
                            setTimeout(function () {
                                        location.reload();
                                    }
                                    , 500);

                        } else {
                            $.notify("Can't edit this banner", "error");
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
                    //// Create the mock file:
                    var mockFile = {
                        name: '{{$media_info['name']}}',
                        size: '{{$media_info['size']}}'
                    };
                    // Call the default addedfile event handler
                    self.emit("addedfile", mockFile);
                    // And optionally show the thumbnail of the file:
                    self.emit("thumbnail", mockFile, '{{$media_info['link']}}');

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
                        global_files = [];
                        global_media = [];
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

                    });
                }
            };
        })
    </script>
@stop

