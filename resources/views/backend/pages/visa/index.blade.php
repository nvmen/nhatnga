@extends('layouts.backend')
@section('pageTitle', 'Services')
@section('content')

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                VISA Management
            </h1>
            <div class="row" style="padding-bottom: 17px;">
                <div class="col-md-2">
                    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#add">New
                    </button>
                </div>
                <div class="col-md-6">
                    <form method="get" action="{{route('backend.visa.index')}}">
                        <div class="form-group input-group">
                            <input type="text" id='search' name='search' class="form-control" value="{{$search}}">
                            <span class="input-group-btn">
                                <button class="btn btn-default" onclick="submit()" type="button"><i
                                            class="fa fa-search"></i></button>
                            </span>
                        </div>
                    </form>
                </div>
            </div>


        </div>
    </div>
    <div class="row">
        <div class="table-responsive">
            <table class="table table-bordered table-hover table-striped">
                <thead>
                <tr>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Short Description</th>
                    <th>Location</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($visas as $visa)
                    <tr>
                        <td>
                            <img src=" {!! route('media.get', ['id'=>$visa->media_ids])  !!}" alt=Banner" height="42"
                                 width="42">
                        </td>
                        <td>
                            {{$visa->translation('vi')->first()->name}}(Vi)<br/>
                            {{$visa->translation('en')->first()->name}}(En)
                        </td>
                        <td>
                            {{$visa->translation('vi')->first()->short_description}}(Vi)<br/>
                            {{$visa->translation('en')->first()->short_description}}(En)
                        </td>
                        <td>
                            {{$visa->visa_cate()->first()->translation('en')->first()->name}}
                        </td>
                        <td>
                            <a href="{!! route('backend.visa.get', ['id'=>$visa->id])  !!}"><span
                                        class="glyphicon glyphicon-pencil"></span>Edit</a>
                            <a href="javascript:void(0)" onclick="delete_visa('{{$visa->id}}')"><span
                                        class="glyphicon glyphicon-trash"></span>Delete</a>
                        </td>
                    </tr>

                @endforeach

                </tbody>
            </table>
            <div class="panel-footer">
                <div class="row">
                    <div class="col col-xs-12 text-center">
                        {!! $visas->links() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div id="add" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Add VISA</h4>
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
                                    <label for="name_vi">Location</label>
                                    <select class="form-control" id="location">
                                        @foreach($cates as  $cate)
                                            <option value='{{$cate->id}}'>{{$cate->translation()->first()->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="name_vi">VISA Name (Vi)</label>
                                    <input type="text" class="form-control" id="name_vi" name="name_vi"
                                           placeholder="Name Vi">
                                </div>
                                <div class="form-group">
                                    <label for="name_en">VISA Name (En)</label>
                                    <input type="text" class="form-control" id="name_en" name="name_en"
                                           placeholder="Name en">
                                </div>

                                <div class="form-group">
                                    <label for="name_en">Short Description (Vi)</label>
                                    <textarea class="form-control" id="short_des_vi" name="short_des_vi"
                                              placeholder="Short Description (Vi)"></textarea>

                                </div>
                                <div class="form-group">
                                    <label for="name_en">Short Description (En)</label>
                                    <textarea class="form-control" id="short_des_en" name="short_des_en"
                                              placeholder="Short Description (En)"></textarea>
                                </div>

                                <div class="form-group">
                                    <label for="content_vi">Content Title (Vi)</label>
                                    <textarea class="form-control" id="content_vi" name="content_vi"
                                              placeholder="Content Vi">{{$template}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="content_en">Content Title(En)</label>
                                    <textarea class="form-control" id="content_en" name="content_en"
                                              placeholder="Content En">{{$template_en}}</textarea>
                                </div>

                                <div class="form-group">
                                    <label for="content_vi">Content Business VISA (Vi)</label>
                                    <textarea class="form-control" id="col_work_vi" name="col_work_vi"
                                              placeholder="Content Vi"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="content_en">Content Business VISA(En)</label>
                                    <textarea class="form-control" id="col_work_en" name="col_work_en"
                                              placeholder="Content En"></textarea>
                                </div>

                                <div class="form-group">
                                    <label for="content_vi">Content Tourist And Visiting Family  VISA (Vi)</label>
                                    <textarea class="form-control" id="col_travel_vi" name="col_travel_vi"
                                              placeholder="Content Vi"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="content_en">Content Tourist And Visiting Family VISA(En)</label>
                                    <textarea class="form-control" id="col_travel_en" name="col_travel_en"
                                              placeholder="Content En"></textarea>
                                </div>

                                <div class="form-group">
                                    <label for="content_vi">Content Study, Marriage, Immigrant VISA (Vi)</label>
                                    <textarea class="form-control" id="col_study_vi" name="col_study_vi"
                                              placeholder="Content Vi"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="content_en">Content Study, Marriage, Immigrant VISA(En)</label>
                                    <textarea class="form-control" id="col_study_en" name="col_study_en"
                                              placeholder="Content En"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="content_vi">Content Note VISA (Vi)</label>
                                    <textarea class="form-control" id="col_note_vi" name="col_note_vi"
                                              placeholder="Content Vi"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="content_en">Content Note VISA(En)</label>
                                    <textarea class="form-control" id="col_note_en" name="col_note_en"
                                              placeholder="Content En"></textarea>
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
        var global_media = [];
        var url1 = '{{route('backend.show.media')}}';
        var url2 = '{{route('backend.upload.media')}}';
        var options = {
            filebrowserImageBrowseUrl: url1 + '?type=Images',
            filebrowserImageUploadUrl: url1 + '/upload?type=Images&_token=',
            filebrowserBrowseUrl: url1 + '?type=Files',
            filebrowserUploadUrl: url1 + '/upload?type=Files&_token={{ csrf_token() }}',
            height: 200,
            toolbar: 'Basic',
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


        function delete_banner(id) {
            bootbox.confirm("Are you sure you want to delete this banner?", function (result) {

                /* your callback code */
                if (result) {
                    show_spinner();
                    var token = '{{ csrf_token() }}';
                    var obj = {_token: token, id: id};
                    $.post('{{route('backend.visa.delete')}}', obj)
                            .done(function (data) {
                                hide_spinner();
                                if (data.success == true) {
                                    //  $.notify("Delete successful", "success");

                                    $.notify("Delete successful", "success");
                                    setTimeout(function () {
                                                window.location.reload();
                                            }
                                            , 500);
                                } else {
                                    // $.notify(data.message, "error")

                                    hide_spinner();
                                }
                            })
                            .fail(function () {
                                hide_spinner();
                            });
                } else {

                }
            })
        }
        function add_new() {


            var token = '{{ csrf_token() }}';
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

            var obj = {
                _token: token,
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
            $.post('{{route('backend.visa.add')}}', obj)
                    .done(function (data) {
                        hide_spinner();
                        if (data.success == true) {
                            //  $.notify("Delete successful", "success");
                            $('#add').modal('hide');
                            $.notify("Add successful", "success");
                            setTimeout(function () {
                                        window.location.reload(false);
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

        //backend.visa.delete

        function delete_visa(id) {
            bootbox.confirm("Are you sure you want to delete this visa?", function (result) {

                /* your callback code */
                if (result) {
                    show_spinner();
                    var token = '{{ csrf_token() }}';
                    var obj = {_token: token, id: id};
                    $.post('{{route('backend.visa.delete')}}', obj)
                            .done(function (data) {
                                hide_spinner();
                                if (data.success == true) {
                                    $.notify("Delete successful", "success");

                                    $.notify("Delete successful", "success");
                                    setTimeout(function () {
                                                location.reload();
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
                } else {

                }
            })
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
                        global_files = [];
                        global_media = [];
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

