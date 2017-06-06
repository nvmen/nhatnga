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
@stop

