@extends('layouts.backend')
@section('pageTitle', 'Services')
@section('content')
    <div class="row">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit Tour</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-area">
                            <br style="clear:both">
                            <h3>Select Images <span style="color:red">*</span></h3>
                            <div class="form-group">
                                <form action="{{route('backend.media.upload')}}" class="dropzone"
                                      id="my-awesome-dropzone">
                                    <div class="fallback">
                                        <input name="filebanner" type="file"/>
                                        <input name="hidden" type="_token" value='{{ csrf_token() }}'/>
                                    </div>
                                </form>
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label>Tour Code <span style="color:red">*</span></label>
                                        <input type="text" class="form-control" id="tour_code" name="tour_code"
                                               placeholder="Tour Code" value="{{$tour->code}}">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="row">
                                                <label>Outbound?</label>
                                            </div>
                                            <input type="checkbox" id="is_outbound" name="is_outbound"
                                                   @if($tour->is_outbound>0) checked @endif><br/>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="row">
                                                <label>Publish?</label>
                                            </div>

                                            <input type="checkbox" id="is_publish" name="is_publish"
                                                   @if($tour->is_publish>0) checked @endif><br/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-1">
                                    <div class="row">
                                        <label>Popular?</label>
                                    </div>
                                    <input type="checkbox" id="is_popular" name="is_popular"
                                           @if($tour->is_popular>0) checked @endif><br/>
                                </div>
                                <div class="col-md-3">
                                    <label>Tour Type</label>
                                    <select id="tour_type" name="tour_type" class="form-control"
                                            style="width: 80%">
                                        <option value="1">Long tour</option>
                                        <option value="2">Short tour</option>
                                        <option value="3">Food tour</option>
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <label>Food Location</label>
                                    <select id="food_location" name="food_location" class="form-control"
                                            style="width: 80%">
                                        <option value="1">North Vietnam</option>
                                        <option value="2">Middle Vietnam</option>
                                        <option value="3">South Vietnam</option>
                                        <option value="4" selected>All</option>

                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row">


                                    <div class="col-md-3">
                                        <label>Food Type</label>
                                        <select id="food_type" name="tour_type" class="form-control"
                                                style="width: 80%">
                                            <option value="1">Eat meat</option>
                                            <option value="2">Vegetarian meals</option>
                                        </select>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="row">
                                                    <div class="row">
                                                        <label style="padding-top: 5px;">Discount(%)</label>
                                                    </div>
                                                    <div class="row">
                                                        <input type="number" class="form-control"
                                                               id="discount_percent"
                                                               style="width: 80px"
                                                               name="discount_percent"
                                                               value="{{$tour->discount_percent}}"/>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="row">
                                                    <div class="row"><label style="padding-top: 5px;">Rating</label>
                                                    </div>
                                                    <div class="row">
                                                        <select id="rating" name="rating"
                                                                class="form-control"
                                                                style="width: 100px">
                                                            <option value="1">1 star</option>
                                                            <option value="2">2 stars</option>
                                                            <option value="3">3 stars</option>
                                                            <option value="4">4 stars</option>
                                                            <option value="5">5 stars</option>
                                                        </select>
                                                    </div>
                                                </div>


                                            </div>

                                        </div>
                                    </div>

                                    <div class="col-md-5">
                                        <div class="col-md-6">
                                            <label>Adults Price (VI)</label>
                                            <input type="number" class="form-control" id="adults_price_vi"
                                                   name="adults_price_vi"
                                                   value="{{$tour->translation('vi')->first()->adult_price}}"/>
                                        </div>
                                        <div class="col-md-6">
                                            <label>Adults Price (EN)</label>
                                            <input type="number" class="form-control" id="adults_price_en"
                                                   name="adults_price_en"
                                                   value="{{$tour->translation('en')->first()->adult_price}}"/>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <label>Children Price (VI)</label>
                                    <input type="number" class="form-control" id="children_price_vi"
                                           name="children_price_vi"
                                           value="{{$tour->translation('vi')->first()->children_price}}"/>
                                </div>
                                <div class="col-md-4">
                                    <label>Children Price (EN)</label>
                                    <input type="number" class="form-control" id="children_price_en"
                                           name="children_price_en"
                                           value="{{$tour->translation('vi')->first()->children_price}}"/>
                                </div>
                                <div class="col-md-4 " style="display: none">
                                    <label>Start Date</label>

                                    <div class="input-group date" data-provide="datepicker">
                                        <input type="text" class="form-control"
                                               data-date-format="dd/mm/yyyy"
                                               id="start_date" name="start_date">
                                        <div class="input-group-addon">
                                            <span class="glyphicon glyphicon-th"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <label>Departure from</label>
                                    <select id="departure_from" name="departure_from">
                                        @foreach($locations as $location)
                                            <option value="{{$location->translation('en')->first()->id}}" @if($location->id ==$tour->departure_from) selected @endif>
                                                {{$location->translation('en')->first()->name}}</option>
                                        @endforeach

                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <label>Destination</label>
                                    <select id="destination" name="destination">
                                        @foreach($locations as $location)
                                            <option
                                                    @if($location->id ==$tour->destination) selected @endif
                                                    value="{{$location->translation('en')->first()->id}}">{{$location->translation('en')->first()->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <div class="row"><label>Duration</label></div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <select id="duration_day" name="duration_day" class="form-control">
                                                <option value="0">---</option>
                                                <option value="1">1 Day</option>
                                                <option value="2">2 Days</option>
                                                <option value="3">3 Days</option>
                                                <option value="4">4 Days</option>
                                                <option value="5">5 Days</option>
                                                <option value="6">6 Days</option>
                                                <option value="7">7 Days</option>
                                                <option value="8">8 Days</option>
                                                <option value="9">9 Days</option>
                                                <option value="10">10 Day</option>
                                                <option value="11">11 Day</option>
                                                <option value="12">12 Days</option>
                                                <option value="13">13 Days</option>
                                                <option value="14">14 Days</option>
                                                <option value="15">15 Days</option>
                                                <option value="16">16 Days</option>
                                                <option value="17">17 Days</option>
                                                <option value="18">18 Days</option>
                                                <option value="19">19 Days</option>


                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <select id="duration_night" name="duration_night" class="form-control">
                                                <option value="0" selected> ----</option>
                                                <option value="1">1 Night</option>
                                                <option value="2">2 Nights</option>
                                                <option value="3">3 Nights</option>
                                                <option value="4">4 Nights</option>
                                                <option value="5">5 Nights</option>
                                                <option value="6">6 Nights</option>
                                                <option value="7">7 Nights</option>
                                                <option value="8">8 Nights</option>
                                                <option value="9">9 Nights</option>
                                                <option value="10">10 Nights</option>
                                                <option value="11">11 Nights</option>
                                                <option value="12">12 Nights</option>
                                                <option value="13">13 Nights</option>
                                                <option value="14">14 Nights</option>
                                                <option value="15">15 Nights</option>
                                                <option value="16">16 Nights</option>
                                                <option value="17">17 Nights</option>
                                                <option value="18">18 Nights</option>
                                                <option value="19">19 Nights</option>


                                            </select>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="form-group">
                                <label>Tour Name Vi <span style="color:red">*</span></label>
                                <input type="text" class="form-control" id="name_vi" name="name_vi"
                                       value="{{$tour->translation('vi')->first()->name}}"
                                       placeholder="Tour Name Vi">
                            </div>

                            <div class="form-group">
                                <label> Tour Name En <span style="color:red">*</span></label>
                                <input type="text" class="form-control" id="name_en" name="name_en"
                                       value="{{$tour->translation('en')->first()->name}} "
                                       placeholder="Tour Name En">
                            </div>
                            <div class="form-group">
                                <label> Description Vi</label>
                                      <textarea rows="4" cols="50" class="form-control" id="des_vi"
                                                name="des_vi"
                                                placeholder="short description Vi">{{$tour->translation('vi')->first()->short_description}}</textarea>
                            </div>
                            <div class="form-group">
                                <label>Description En</label>
                                    <textarea rows="4" cols="50" class="form-control" id="des_en"
                                              name="des_en"
                                              placeholder="short description EN">{{$tour->translation('en')->first()->short_description}}</textarea>

                            </div>

                            <div class="form-group">
                                <label> Tour Description Vi</label>
                                      <textarea class="form-control" id="tour_des_vi"
                                                name="tour_des_vi"
                                                placeholder="short description Vi">{!!$tour->translation('vi')->first()->description  !!}</textarea>
                            </div>
                            <div class="form-group">
                                <label>Tour Description En</label>
                                    <textarea class="form-control" id="tour_des_en"
                                              name="tour_des_en"
                                              placeholder="short description EN">{!! $tour->translation('en')->first()->description !!}</textarea>
                            </div>


                            <div class="form-group">
                                <label> Tour Itinerary Vi</label>
                                      <textarea class="form-control" id="tour_itinerary_vi"
                                                name="tour_itinerary_vi"
                                                placeholder="short description Vi">{!!$tour->translation('vi')->first()->itinerary !!}</textarea>
                            </div>
                            <div class="form-group">
                                <label>Tour Itinerary En</label>
                                    <textarea class="form-control" id="tour_itinerary_en"
                                              name="tour_itinerary_en"
                                              placeholder="short description EN">{!! $tour->translation('en')->first()->itinerary !!}</textarea>
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
    <script>


        var url1 = '{{route('backend.show.media')}}';
        var url2 = '{{route('backend.upload.media')}}';
        var options = {
            filebrowserImageBrowseUrl: url1 + '?type=Images',
            filebrowserImageUploadUrl: url1 + '/upload?type=Images&_token=',
            filebrowserBrowseUrl: url1 + '?type=Files',
            filebrowserUploadUrl: url1 + '/upload?type=Files&_token={{ csrf_token() }}'
        };
        CKEDITOR.replace('tour_des_vi', options);
        CKEDITOR.replace('tour_des_en', options);
        CKEDITOR.replace('tour_itinerary_vi', options);
        CKEDITOR.replace('tour_itinerary_en', options);

        var global_files = [];
        var global_media = [{{$tour->media_ids}}];
        var exist_list_media_info = jQuery.parseJSON(JSON.stringify({!!json_encode($list_media_info) !!}));
        $(function () {
            Dropzone.options.myAwesomeDropzone = {
                maxFilesize: 5,
                maxFiles: 10,
                uploadMultiple: false,
                addRemoveLinks: true,
                dictResponseError: 'Server not Configured',
                acceptedFiles: ".png,.jpg,.gif,.bmp,.jpeg",
                init: function () {
                    var self = this;
                    // config
                    self.options.addRemoveLinks = true;
                    self.options.dictRemoveFile = "Delete";
                    let leng = exist_list_media_info.length;
                    for (let i = 0; i < leng; i++) {
                        var media_info = exist_list_media_info[i];
                        debugger;
                        var mockFile = {
                            name: media_info.name,
                            size: media_info.size
                        };
                        // Call the default addedfile event handler
                        self.emit("addedfile", mockFile);
                        // And optionally show the thumbnail of the file:
                        self.emit("thumbnail", mockFile, media_info.link);
                        global_files.push(mockFile);

                    }


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
                        //find index of
                        let leng = global_files.length;
                        let index = -1;
                        for (var i = 0; i < leng; i++) {
                            if (JSON.stringify(global_files[i]) === JSON.stringify(file)) {
                                index = i;
                                break;
                            }
                        }
                        if (index > -1) {
                            global_files.splice(index, 1);
                            global_media.splice(index, 1);
                        }
                    });
                    self.on("success", function (file, response) {
                        debugger;
                        global_files.push(file);
                        global_media.push(response.data.id);
                        console.log('=========>data', response);
                    });
                }
            };
        })
        $(document).ready(function () {
            var is_out ={{$tour->is_outbound}};
            if(is_out==1){
                $('#tour_type').prop('disabled', true);
            }
            $("#tour_type").val({{$tour->tour_type}});

            $("#food_location").val({{$tour->food_location}});
            $("#food_type").val({{$tour->food_type}});
            $("#duration_day").val({{$tour->duration_day}});
            $("#duration_night").val({{$tour->duration_night}});
            $("#rating").val({{$tour->rating}});

            $("#food_location").val({{$tour->food_location}});

            //$('.datepicker').datepicker();
          //  $('#departure_from').val({{$tour->departure_from}});
            $('#departure_from').selectize();
            $('#destination').selectize();
            $('#food_type').prop('disabled', true);
            $('#food_location').prop('disabled', true);
            $('#is_outbound').change(function () {
                if ($(this).is(":checked")) {
                    // tour international
                    $('#tour_type').prop('disabled', true);
                    $('#food_type').prop('disabled', true);
                    $('#food_location').prop('disabled', true);
                } else {

                    $('#tour_type').prop('disabled', false);
                    if ($('#tour_type').val() == "3") {
                        // tour international
                        $('#food_type').prop('disabled', false);
                        $('#food_location').prop('disabled', false);
                    } else {
                        $('#food_type').prop('disabled', true);
                        $('#food_location').prop('disabled', true);
                    }
                }

            });

            if($('#tour_type').val()==3){
                $('#food_type').prop('disabled', false);
                $('#food_location').prop('disabled', false);
            }else{
                $('#food_type').prop('disabled', true);
                $('#food_location').prop('disabled', true);
            }
            $('#tour_type').change(function () {

                if ($('#tour_type').val() == "3") {
                    // tour international
                    $('#food_type').prop('disabled', false);
                    $('#food_location').prop('disabled', false);
                } else {
                    $('#food_type').prop('disabled', true);
                    $('#food_location').prop('disabled', true);
                }

            });
        });

        function add_new() {
            /*
             CKEDITOR.replace('tour_des_vi', options);
             CKEDITOR.replace('tour_des_en', options);
             CKEDITOR.replace('tour_itinerary_vi', options);
             CKEDITOR.replace('tour_itinerary_en', options);
             */
            var tour_des_vi = CKEDITOR.instances['tour_des_vi'].getData();
            var tour_des_en = CKEDITOR.instances['tour_des_en'].getData();

            var tour_itinerary_vi = CKEDITOR.instances['tour_itinerary_vi'].getData();
            var tour_itinerary_en = CKEDITOR.instances['tour_itinerary_en'].getData();
            var token = '{{ csrf_token() }}';
            var tour_code = $('#tour_code').val();
            var is_outbound = $('#is_outbound').is(":checked") ? 1 : 0;
            var is_publish = $('#is_publish').is(":checked") ? 1 : 0;
            var is_popular = $('#is_popular').is(":checked") ? 1 : 0;
            var tour_type = $('#tour_type').val();
            var food_location = $('#food_location').val();
            var food_type = $('#food_type').val();
            var discount_percent = $('#discount_percent').val();
            var rating = $('#rating').val();
            var adults_price_vi = $('#adults_price_vi').val();
            var adults_price_en = $('#adults_price_en').val();
            var children_price_vi = $('#children_price_vi').val();
            var children_price_en = $('#children_price_en').val();
            var departure_from = $('#departure_from').val();
            var destination = $('#destination').val();
            var duration_day = $('#duration_day').val();
            var duration_night = $('#duration_night').val();
            var name_vi = $('#name_vi').val();
            var name_en = $('#name_en').val();
            var des_vi = $('#des_vi').val();
            var des_en = $('#des_en').val();
            var start_date = $('#start_date').val();
            debugger;
            var media_ids = '';
            let i = 0;
            let leng = global_media.length;
            var arr = [];
            for (i = 0; i < leng; i++) {
                arr.push(global_media[i]);
            }
            media_ids = arr.toString();

            console.log('=========>media', media_ids);
            if (global_media.length == 0) {
                alert('Media not empty')
                return false;
            }

            var id = '{{$tour->id}}';
            var obj = {
                _token: token,
                id :id,
                code: tour_code,
                is_outbound: is_outbound,
                is_publish: is_publish,
                is_popular: is_popular,
                media_ids: media_ids,
                food_location: food_location,
                tour_type: tour_type,
                food_type: food_type,
                discount_percent: discount_percent,
                rating: rating,
                adults_price_vi: adults_price_vi,
                adults_price_en: adults_price_en,
                children_price_vi: children_price_vi,
                children_price_en: children_price_en,
                departure_from: departure_from,
                destination: destination,
                duration_day: duration_day,
                duration_night: duration_night,
                name_vi: name_vi,
                name_en: name_en,
                des_vi: des_vi,
                des_en: des_en,
                start_date: start_date,
                tour_des_vi: tour_des_vi,
                tour_des_en: tour_des_en,
                tour_itinerary_vi: tour_itinerary_vi,
                tour_itinerary_en: tour_itinerary_en,
            }
            show_spinner();
            $.post('{{route('backend.tours.edit')}}', obj)
                    .done(function (data) {
                        hide_spinner();
                        if (data.success == true) {
                            //  $.notify("Delete successful", "success");
                            $('#add').modal('hide');
                            $.notify("Add successful", "success");
                            setTimeout(function () {
                                        //  location.reload();
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
    </script>


@stop

