@extends('layouts.backend')
@section('pageTitle', 'Services')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Tour Management
            </h1>
            <div class="row" style="padding-bottom: 17px;">
                <div class="col-md-2">
                    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#add">New
                    </button>
                </div>
                <div class="col-md-6">
                    <form method="get" action="{{route('backend.location.index')}}">
                        <div class="form-group input-group">
                            <input type="text" id='search' name='search' class="form-control" value="">
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
                    <th>Tour name <i class="fa fa-fw fa-sort"></i></th>
                    <th>Destination</th>
                    <th>Price</th>
                    <th>Tour Type</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Image</td>
                    <td>Location</td>
                    <td>Description</td>
                    <td>Country</td>
                    <td>Domestic</td>
                    <td>Domestic</td>
                    <td>Action</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>


    <div id="add" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">New Tour</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-area">
                                <br style="clear:both">
                                <h3>Select Images</h3>
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
                                            <label>Tour Code</label>
                                            <input type="text" class="form-control" id="country" name="country"
                                                   placeholder="Tour Code">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="row" >
                                            <div class="col-md-5" >
                                                <div class="row">
                                                    <label>Outbound?</label>
                                                </div>
                                                <input type="checkbox" id="is_outbound" name="is_outbound"><br/>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="row">
                                                    <label>Publish?</label>
                                                </div>

                                                <input type="checkbox" id="is_publish" name="is_publish" checked><br/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <label>Tour Type</label>
                                        <select id="tour_type" name="tour_type" class="form-control"
                                                style="width: 80%">
                                            <option value="long_tour">Long tour</option>
                                            <option value="short_tour">Short tour</option>
                                            <option value="food_tour">Food tour</option>
                                        </select>
                                    </div>
                                    <div class="col-md-3">
                                        <label>Food Location</label>
                                        <select id="tour_type" name="tour_type" class="form-control"
                                                style="width: 80%">
                                            <option value="north">North Vietnam</option>
                                            <option value="middle">Middle Vietnam</option>
                                            <option value="south">South Vietnam</option>
                                            <option value="all" selected >All</option>

                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">

                                        <div class="col-md-3">
                                            <label>Food Type</label>
                                            <select id="food_type" name="tour_type" class="form-control"
                                                    style="width: 80%">
                                                <option value="eatmeat">Eat meat</option>
                                                <option value="vegetarian">Vegetarian meals </option>
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
                                                            <input type="number" class="form-control" id="discount_percent"
                                                                   style="width: 80px"
                                                                   name="discount_percent" value="0"/>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="row">
                                                        <div class="row"><label style="padding-top: 5px;">Rating</label>
                                                        </div>
                                                        <div class="row">
                                                            <select id="is_outbound" name="is_outbound" class="form-control"
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

                                        <div class="col-md-6">
                                            <div class="col-md-6">
                                                <label>Adults Price (VI)</label>
                                                <input type="number" class="form-control" id="price_vi" name="price_vi"
                                                       value="0"/>
                                            </div>
                                            <div class="col-md-6">
                                                <label>Adults Price (EN)</label>
                                                <input type="number" class="form-control" id="price_en" name="price_en"
                                                       value="0"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4">
                                        <label>Children Price (VI)</label>
                                        <input type="number" class="form-control" id="price_vi" name="price_vi"
                                               value="0"/>
                                    </div>
                                    <div class="col-md-4">
                                        <label>Children Price (EN)</label>
                                        <input type="number" class="form-control" id="price_en" name="price_en"
                                               value="0"/>
                                    </div>
                                    <div class="col-md-4">
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
                                        <select id="start_from" name="start_from">
                                            <option value="1">1 star</option>
                                            <option value="2">2 stars</option>
                                            <option value="3">3 stars</option>
                                            <option value="4">4 stars</option>
                                            <option value="5">5 stars</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <label>Destination</label>
                                        <select id="destination" name="destination">
                                            <option value="1">1 star</option>
                                            <option value="2">2 stars</option>
                                            <option value="3">3 stars</option>
                                            <option value="4">4 stars</option>
                                            <option value="5">5 stars</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="row"><label>Duration</label></div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <select id="destination" name="day" class="form-control">
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
                                                    option value="10">10 Day</option>
                                                    option value="11">11 Day</option>
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
                                                <select id="destination" name="day" class="form-control">
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
                                                    option value="10">10 Nights</option>
                                                    option value="11">11 Nights</option>
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
                                    <label>Tour Name Vi</label>
                                    <input type="text" class="form-control" id="name_vi" name="name_vi"
                                           placeholder="Tour Name Vi">
                                </div>

                                <div class="form-group">
                                    <label> Tour Name En</label>
                                    <input type="text" class="form-control" id="name_en" name="name_en"
                                           placeholder="Tour Name En">
                                </div>
                                <div class="form-group">
                                    <label> Description Vi</label>
                                      <textarea rows="4" cols="50" class="form-control" id="des_vi"
                                                name="des_vi"
                                                placeholder="short description Vi"></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Description En</label>
                                    <textarea rows="4" cols="50" class="form-control" id="des_en"
                                              name="des_en"
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
        $(document).ready(function () {
            $('.datepicker').datepicker();
            $('#start_from').selectize();
            $('#destination').selectize();
        });
    </script>
@stop

