@extends('layouts.frontend')
@section('pageTitle', $visa->translation()->first()->name)
@section('content')
    <style>
        .service-box {
            margin-bottom: 30px;
            margin-top: 30px;
            background-color: #fff;
            color: #444;
            padding: 30px;
            position: relative;
            border: 1px solid #eee;
            border-radius: 5px;
        }
        .service-box-note {

            margin-top: 0px;

        }
    </style>
    <div class="site wrapper-content">
        <div class="top_site_main" style="background-image:url({{ URL::asset('images/banner/top-heading.jpg') }} );">
            <div class="banner-wrapper container article_heading">
                <div class="breadcrumbs-wrapper">
                    <ul class="phys-breadcrumb">
                        <li><a href="{{route('frontend.home.index')}}" class="home">Home</a></li>
                        <li>{{__('nhatnga_menu.services')}}</li>
                        <li><a href="{{route('frontend.services.visa')}}">VISA</a></li>
                        <li><a href="{{$url_cate}}">{{$cate->name}}</a></li>
                        <li>{{$visa->translation()->first()->name}}</li>
                    </ul>
                </div>
                <h1 class="heading_primary">{{$visa->translation()->first()->name}}</h1></div>
        </div>

        <section class="content-area">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12">
                    <div class="service-box wow zoomIn" data-wow-duration="1.5s" data-wow-delay="0.1s" style="visibility: visible; animation-duration: 1.5s; animation-delay: 0.1s; animation-name: zoomIn;">

                            <div class="row">
                                <div class="col-sm-6 col-md-4">
                                    <img src="{!! route('media.get', ['id'=>$visa->media_ids,'resize'=>'300x225'])  !!}" class="img-rounded img-responsive" />
                                </div>
                                <div class="col-sm-6 col-md-8">
                                    <h4>
                                        Bhaumik Patel</h4>
                                    <small><cite title="San Francisco, USA">San Francisco, USA <i class="glyphicon glyphicon-map-marker">
                                            </i></cite></small>
                                    <p>
                                        <i class="glyphicon glyphicon-envelope"></i>email@example.com
                                        <br />
                                        <i class="glyphicon glyphicon-globe"></i><a href="http://www.jquery2dotnet.com">www.jquery2dotnet.com</a>
                                        <br />
                                        <i class="glyphicon glyphicon-gift"></i>June 02, 1988</p>
                                    <!-- Split button -->
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-primary">
                                            Social</button>
                                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                                            <span class="caret"></span><span class="sr-only">Social</span>
                                        </button>
                                    </div>
                                </div>
                            </div>

                    </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12" style="text-align:center"><h3> HO SO GOM CO</h3></div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <div class="service-box wow zoomIn data-visa" data-wow-duration="1.5s" data-wow-delay="0.1s" style="visibility: visible; animation-duration: 1.5s; animation-delay: 0.1s; animation-name: zoomIn;">

                            <h3>Thị thực công tác </h3>
                            <div class="text-left">
                                {!! $visa->translation()->first()->col_work !!}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 ">
                        <div class="service-box wow zoomIn data-visa" data-wow-duration="1.5s" data-wow-delay="0.1s" style="visibility: visible; animation-duration: 1.5s; animation-delay: 0.1s; animation-name: zoomIn;">
                            <h3>Thị thực du lịch, thăm thân</h3>
                            <div class="text-left">
                                {!! $visa->translation()->first()->col_travel !!}

                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="service-box wow zoomIn data-visa" data-wow-duration="1.5s" data-wow-delay="0.1s" style="visibility: visible; animation-duration: 1.5s; animation-delay: 0.1s; animation-name: zoomIn;">

                            <h3>Visa du học, kết hôn, định cư</h3>
                            <div class="text-left">
                                {!! $visa->translation()->first()-> col_study !!}

                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="service-box  service-box-note wow zoomIn" data-wow-duration="1.5s" data-wow-delay="0.1s" style="visibility: visible; animation-duration: 1.5s; animation-delay: 0.1s; animation-name: zoomIn;">

                            <h3>Lưu Ý </h3>
                            <div class="text-left">
                                {!! $visa->translation()->first()-> col_note !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
    <script>
        $(document ).ready(function() {
            var highestBox = 0;

            // Select and loop the elements you want to equalise
            $('.data-visa').each(function(){

                // If this box is higher than the cached highest then store it
                if($(this).height() > highestBox) {
                    highestBox = $(this).height();
                }

            });

            // Set the height of all those children to whichever was highest
            $('.data-visa').height(highestBox);



        });
    </script>
@stop

