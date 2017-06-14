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
            <div class="modal-footer">
                <button type="button" id="submit" name="submit" class="btn btn-primary pull-right"
                        onclick="add_new()">Save
                </button>

            </div>
        </div>

    </div>
@stop