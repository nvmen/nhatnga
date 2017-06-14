@extends('layouts.backend')
@section('pageTitle', 'Locations')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Location Management
            </h1>
            <div class="row" style="padding-bottom: 17px;">
                <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#add">New
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
                    <th>Location</th>
                    <th>Description</th>
                    <th>Country</th>
                    <th>Domestic</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($locations as $location)
                    <tr>
                        <td>
                            <img src=" {!! route('media.get', ['id'=>$location->media_ids])  !!}" alt=Banner" height="42" width="42">
                        </td>
                        <td>
                            {{$location->translation('vi')->first()->name}}(Vi)<br/>
                            {{$location->translation('en')->first()->name}}(En)
                        </td>
                        <td>
                            {{$location->translation('vi')->first()->short_description}}(Vi)<br/>
                            {{$location->translation('en')->first()->short_description}}(En)
                        </td>
                        <td> {{$location->country}}</td>
                        <td> {{$location->is_domestic==1?'True':'False'}}</td>
                        <td>
                            <a href="{!! route('backend.location.get', ['id'=>$location->id])  !!}"><span
                                        class="glyphicon glyphicon-pencil"></span>Edit</a>
                            <a href="javascript:void(0)" onclick="delete_location('{{$location->id}}')"><span
                                        class="glyphicon glyphicon-trash"></span>Delete</a>
                        </td>
                    </tr>
                @endforeach

                </tbody>
            </table>
        </div>
    </div>



    <div id="add" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">New Location</h4>
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
                                           placeholder="Country">
                                </div>
                                <div class="form-group">
                                    <input type="checkbox" id="is_domestic" name="is_domestic" checked >  Domestic<br>
                                </div>
                                <div class="form-group">
                                    <label> Name Vi</label>
                                    <input type="text" class="form-control" id="name_vi" name="name_vi"
                                           placeholder="Name Vi">
                                </div>

                                <div class="form-group">
                                    <label> Name En</label>
                                    <input type="text" class="form-control" id="name_en" name="name_en"
                                           placeholder="Name En">
                                </div>
                                <div class="form-group">
                                    <label> Description Vi</label>
                                      <textarea rows="4" cols="50" class="form-control" id="short_des_vi"
                                                name="short_des_vi"
                                                placeholder="short description Vi"></textarea>
                                </div>
                                <div class="form-group">
                                    <label> Description En</label>
                                    <textarea rows="4" cols="50" class="form-control" id="short_des_en"
                                              name="short_des_en"
                                              placeholder="short description EN"></textarea>

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

        function edit(banner) {
            var bannerEdit = banner;
            console.log(bannerEdit);
        }
        function delete_location(id) {
            bootbox.confirm("Are you sure you want to delete?", function (result) {

                /* your callback code */
                if (result) {
                    show_spinner();
                    var token = '{{ csrf_token() }}';
                    var obj = {_token: token, id: id};
                    $.post('{{route('backend.location.delete')}}', obj)
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
            var country = $('#country').val();
            var ckb = $("#is_domestic").is(':checked')
            if (global_media.length == 0) {
                alert('Media not empty')
                return false;
            }
            var media_id = global_media[0].id;

            var obj = {
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
            $.post('{{route('backend.location.add')}}', obj)
                    .done(function (data) {
                        hide_spinner();
                        if (data.success == true) {
                            //  $.notify("Delete successful", "success");
                            $('#add').modal('hide');
                            $.notify("Add successful", "success");
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

