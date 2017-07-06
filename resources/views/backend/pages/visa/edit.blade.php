@extends('layouts.backend')
@section('pageTitle', 'Services')
@section('content')
    <div class="row">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit Visa</h4>
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
                                <label for="name_vi">Location</label>
                                <select class="form-control" id="location">
                                    @foreach($cates as  $cate)
                                        <option value='{{$cate->id}}' @if($visa->visa_cate_id ==$cate->id) selected @endif>{{$cate->translation()->first()->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="name_vi">Name Vi</label>
                                <input type="text" class="form-control" id="name_vi" name="name_vi"
                                       placeholder="Name Vi"
                                       value="{{$visa_vi->name}}"
                                >
                            </div>
                            <div class="form-group">
                                <label for="name_vi">Name En</label>
                                <input type="text" class="form-control" id="name_en" name="name_en"
                                       value="{{$visa_en->name}}"
                                       placeholder="Name En">
                            </div>

                            <div class="form-group">
                                <label for="name_en">Short Description (Vi)</label>
                                    <textarea class="form-control" id="short_des_vi" name="short_des_vi"
                                              placeholder="Short Description (Vi)">{{$visa_vi->short_description}}
                                    </textarea>


                            </div>
                            <div class="form-group">
                                <label for="name_en">Short Description (En)</label>
                                    <textarea class="form-control" id="short_des_en" name="short_des_en"
                                              placeholder="Short Description (En)">{{$visa_en->short_description}}
                                    </textarea>
                            </div>

                            <div class="form-group">
                                <label for="content_vi">Content Title Vi</label>
                               <textarea id="content_vi" name="content_vi" class="form-control">
                                   {{$visa_vi->content}}
                                </textarea>
                            </div>
                            <div class="form-group">
                                <label for="content_en">Content Title En</label>
                               <textarea id="content_en" name="content_en" class="form-control">
                                    {{$visa_en->content}}
                                </textarea>
                            </div>

                            <div class="form-group">
                                <label for="content_vi">Content Business VISA (Vi)</label>
                                    <textarea class="form-control" id="col_work_vi" name="col_work_vi"
                                              placeholder="Content Vi">{{$visa_vi->col_work}}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="content_en">Content Business VISA(En)</label>
                                    <textarea class="form-control" id="col_work_en" name="col_work_en"
                                              placeholder="Content En">{{$visa_en->col_work}}</textarea>
                            </div>

                            <div class="form-group">
                                <label for="content_vi">Content Tourist And Visiting Family VISA (Vi)</label>
                                    <textarea class="form-control" id="col_travel_vi" name="col_travel_vi"
                                              placeholder="Content Vi">{{$visa_vi->col_travel}}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="content_en">Content Tourist And Visiting Family VISA VISA(En)</label>
                                    <textarea class="form-control" id="col_travel_en" name="col_travel_en"
                                              placeholder="Content En">{{$visa_en->col_travel}}</textarea>
                            </div>

                            <div class="form-group">
                                <label for="content_vi">Content Study, Marriage, Immigrant VISA (Vi)</label>
                                    <textarea class="form-control" id="col_study_vi" name="col_study_vi"
                                              placeholder="Content Vi">{{$visa_vi->col_study}}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="content_en">Content Study, Marriage, Immigrant VISA(En)</label>
                                    <textarea class="form-control" id="col_study_en" name="col_study_en"
                                              placeholder="Content En">{{$visa_en->col_study}}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="content_vi">Content Note VISA (Vi)</label>
                                    <textarea class="form-control" id="col_note_vi" name="col_note_vi"
                                              placeholder="Content Vi">{{$visa_vi->col_note}}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="content_en">Content Note VISA(En)</label>
                                    <textarea class="form-control" id="col_note_en" name="col_note_en"
                                              placeholder="Content En">{{$visa_en->col_note}}</textarea>
                            </div>


                            <input type="hidden" name="id" id="id" value="{{$visa->id}}"/>
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
        var global_media = [{{$visa->media_ids}}];
        var url1 = '{{route('backend.show.media')}}';
        var url2 = '{{route('backend.upload.media')}}';
        var options = {
            filebrowserImageBrowseUrl: url1 + '?type=Images',
            filebrowserImageUploadUrl: url1 + '/upload?type=Images&_token=',
            filebrowserBrowseUrl: url1 + '?type=Files',
            filebrowserUploadUrl: url1 + '/upload?type=Files&_token={{ csrf_token() }}',
            height: 200,
        };
        CKEDITOR.replace('content_vi', options);
        CKEDITOR.replace('content_en', options);

        CKEDITOR.replace('col_work_en', options);
        CKEDITOR.replace('col_work_vi', options);

        CKEDITOR.replace('col_travel_vi', options);
        CKEDITOR.replace('col_travel_en', options);

        CKEDITOR.replace('col_study_vi', options);
        CKEDITOR.replace('col_study_en', options);

        CKEDITOR.replace('col_note_vi', options);
        CKEDITOR.replace('col_note_en', options);

        function save_edit() {


            var token = '{{ csrf_token() }}';
            var id = $('#id').val();
            var name_vi = $('#name_vi').val();
            var name_en = $('#name_en').val();

            var short_des_vi = $('#short_des_vi').val();
            var short_des_en = $('#short_des_en').val();

            var location = $('#location').val();
            var content_vi = CKEDITOR.instances['content_vi'].getData();
            var content_en = CKEDITOR.instances['content_en'].getData();

            var col_work_vi = CKEDITOR.instances['col_work_vi'].getData();
            var col_work_en = CKEDITOR.instances['col_work_en'].getData();

            var col_travel_vi = CKEDITOR.instances['col_travel_vi'].getData();
            var col_travel_en = CKEDITOR.instances['col_travel_en'].getData();

            var col_study_vi = CKEDITOR.instances['col_study_vi'].getData();
            var col_study_en = CKEDITOR.instances['col_study_en'].getData();

            var col_note_vi = CKEDITOR.instances['col_note_vi'].getData();
            var col_note_en = CKEDITOR.instances['col_note_en'].getData();

            if (global_media.length == 0) return false;
            var media_id = global_media[0].id;
            var old_media_id ='{{$visa->media_ids}}';
            if(media_id== undefined){
                media_id = old_media_id;
            }
            var obj = {
                _token: token,
                id: id,
                name_vi: name_vi,
                name_en: name_en,
                short_des_vi: short_des_vi,
                short_des_en: short_des_en,
                location: location,
                content_vi: content_vi,
                content_en: content_en,
                media_ids: media_id,

                col_work_vi: col_work_vi,
                col_work_en: col_work_en,

                col_travel_en: col_travel_en,
                col_travel_vi: col_travel_vi,

                col_study_en: col_study_en,
                col_study_vi: col_study_vi,
                col_note_vi: col_note_vi,
                col_note_en: col_note_en,
            }
            //  console.log('===========>',obj)
            show_spinner();
            $.post('{{route('backend.visa.save')}}', obj)
                    .done(function (data) {
                        hide_spinner();
                        if (data.success == true) {
                            //  $.notify("Delete successful", "success");
                            $.notify("Edit successful", "success");
                            setTimeout(function () {
                                       // location.reload();
                                    }
                                    , 500);

                        } else {
                            $.notify(data.message, "error");
                            hide_spinner();
                        }
                    })
                    .fail(function () {
                        hide_spinner();
                    });

        }


        var global_files = [];
        var global_media = [{{$visa->media_ids}}];
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

