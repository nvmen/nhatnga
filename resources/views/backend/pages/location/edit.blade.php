@extends('layouts.backend')
@section('pageTitle', 'Locations')
@section('content')
    <div class="row">
        <div class="modal-content">
            <div class="modal-header">

                <h4 class="modal-title">Edit Location</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-area">
                            <br style="clear:both">
                            <h3>Select a Image</h3>
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
                                <label> Country</label>
                                <input type="text" class="form-control" id="country" name="country"
                                       value="{{$location->country}}"
                                       placeholder="Country">
                            </div>

                            <div class="form-group">
                                <input type="checkbox" id="is_domestic" name="is_domestic" @if($location->is_domestic)checked @endif >  Domestic<br>
                            </div>
                            <div class="form-group">
                                <label> Name Vi</label>
                                <input type="text" class="form-control" id="name_vi" name="name_vi"
                                       value="{{$location->translation('vi')->first()->name}}"
                                       placeholder="Name Vi">
                            </div>

                            <div class="form-group">
                                <label> Name En</label>
                                <input type="text" class="form-control" id="name_en" name="name_en"
                                       value="{{$location->translation('en')->first()->name}}"
                                       placeholder="Name En">
                            </div>
                            <div class="form-group">
                                <label> Description Vi</label>
                                      <textarea rows="4" cols="50" class="form-control" id="short_des_vi"
                                                name="short_des_vi"
                                                placeholder="short description Vi">{{$location->translation('vi')->first()->short_description}}</textarea>
                            </div>
                            <div class="form-group">
                                <label> Description En</label>
                                    <textarea rows="4" cols="50" class="form-control" id="short_des_en"
                                              name="short_des_en"
                                              placeholder="short description EN">{{$location->translation('vi')->first()->short_description}}</textarea>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <input type="hidden" id ="id" name="id" value="{{$location->id}}">
            <div class="modal-footer">
                <button type="button" id="submit" name="submit" class="btn btn-primary pull-right"
                        onclick="edit_location()">Save
                </button>

            </div>
        </div>
        <script>

            var global_files = [];
            var global_media = [{{$location->media_ids}}];
            var url1 = '{{route('backend.show.media')}}';
            var url2 = '{{route('backend.upload.media')}}';
            var options = {
                filebrowserImageBrowseUrl: url1 + '?type=Images',
                filebrowserImageUploadUrl: url1 + '/upload?type=Images&_token=',
                filebrowserBrowseUrl: url1 + '?type=Files',
                filebrowserUploadUrl: url1 + '/upload?type=Files&_token={{ csrf_token() }}'
            };
            function edit_location() {
                var token = '{{ csrf_token() }}';
                var name_vi = $('#name_vi').val();
                var id = $('#id').val();
                var name_en = $('#name_en').val();
                var short_des_vi = $('#short_des_vi').val();
                var short_des_en = $('#short_des_en').val();
                var country = $('#country').val();
                var ckb = $("#is_domestic").is(':checked')
                if (global_media.length == 0) {
                    alert('Media not empty')
                    return false;
                }
                var media_id = global_media[0].id;
                var old_media_id ='{{$location->media_ids}}';
                if(media_id== undefined){
                    media_id = old_media_id;
                }
                var obj = {
                    id:id,
                    _token: token,
                    name_vi: name_vi,
                    name_en: name_en,
                    short_des_vi: short_des_vi,
                    short_des_en: short_des_en,
                    media_ids: media_id,
                    is_domestic:ckb==true?1:0,
                    country:country
                }
                show_spinner();
                $.post('{{route('backend.location.edit')}}', obj)
                        .done(function (data) {
                            hide_spinner();
                            if (data.success == true) {
                                //  $.notify("Delete successful", "success");
                                $.notify("Edit successful", "success");
                                setTimeout(function () {
                                            //   location.reload();
                                        }
                                        , 500);

                            } else {
                                $.notify(data.message, "error")
                                hide_spinner();
                            }
                        })
                        .fail(function () {
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
    </div>
@stop