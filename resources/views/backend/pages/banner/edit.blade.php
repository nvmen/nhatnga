@extends('layouts.backend')
@section('pageTitle', 'Edit Banner')
@section('content')
    <div class="row">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit Banner</h4>
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
                                       placeholder="Title Vi"
                                       value="{{$banner->translation('vi')->first()->title}}"
                                >
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="title_en" name="title_en"
                                       value="{{$banner->translation('en')->first()->title}}"
                                       placeholder="Title En">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="sub_title_vi" name="sub_title_vi"
                                       value="{{$banner->translation('vi')->first()->sub_title}}"
                                       placeholder="Sub Title Vi">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="sub_title_en" name="sub_title_en"
                                       value="{{$banner->translation('en')->first()->sub_title}}"
                                       placeholder="Sub Title EN">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="link_vi" name="link_vi"
                                       value="{{$banner->translation('vi')->first()->link}}"
                                       placeholder="Link Vi  Example(http://google.com)">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="link_en" name="link_en"
                                       value="{{$banner->translation('en')->first()->link}}"
                                       placeholder="Link En  Example(http://google.com)">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="link_text_vi" name="link_text_vi"
                                       value="{{$banner->translation('vi')->first()->link_text}}"
                                       placeholder="Link Text Vi Example(Xem)">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="link_text_en" name="link_text_en"
                                       value="{{$banner->translation('en')->first()->link_text}}"
                                       placeholder="Link Text En Example(View Tour)">
                                <input type="hidden" id='id' name="id" value="{{$banner->id}}">
                            </div>


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
    <script type="text/javascript">

        function save_edit() {

            var token = '{{ csrf_token() }}';
            var title_vi = $('#title_vi').val();
            var title_en = $('#title_en').val();
            var id = $('#id').val();

            var sub_title_vi = $('#sub_title_vi').val();
            var sub_title_en = $('#sub_title_en').val();

            var link_vi = $('#link_vi').val();
            var link_en = $('#link_en').val();

            var link_text_vi = $('#link_text_vi').val();
            var link_text_en = $('#link_text_en').val();

            if (global_media.length == 0) return false;
            var media_id = global_media[0].id;
            var old_media_id ='{{$banner->media_ids}}';
            if(media_id== undefined){
                media_id = old_media_id;
            }
            var obj = {
                _token: token,
                title_vi: title_vi,
                id: id,
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
            $.post('{{route('backend.banner.save.edit')}}', obj)
                    .done(function (data) {
                        hide_spinner();
                        if (data.success == true) {
                            $.notify("Add successful", "success");
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
        var global_files = [];
        var global_media = [{{$banner->media_ids}}];
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
