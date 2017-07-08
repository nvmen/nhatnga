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
            padding-top: 10px;

        }

        .no-border {
            border: none;
        }

        .phone_number {
            text-align: right;

        }

        .title-hotline {
            color: #ff0000;
            font-weight: bold;
            /*  font-size: 30px;*/
        }

        .title-data {
            text-align: center;
        }

        .content-discount p {
            font-weight: bold;
            font-size: 20px;
        }
        .line_after_title {
            color: #ffb300;
        }
        .line_after_title:after {
            content: ' ';
            display: block;
            height: 1px;
            bottom: -2px;
            left: 50%;
            -webkit-transform: translate(-50%, 0);
            -moz-transform: translate(-50%, 0);
            transform: translate(-50%, 0);
            width: 50px;
            border-style: solid;
            border-width: 3px 0 0 0;
        }

        #visa-detail ol {
            list-style: disc;
            margin-left:20px;
        }
        #visa-detail ul {
            list-style: disc;
            margin-left:30px;
        }
		#visa-detail h3{
		  font-weight: bold;
          font-size: 20px;
		}
        .img-border{
            border:1px solid #eee;
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
                        <div class="service-box wow zoomIn no-border" data-wow-duration="1.5s" data-wow-delay="0.1s"
                             style="visibility: visible; animation-duration: 1.5s; animation-delay: 0.1s; animation-name: zoomIn;">

                            <div class="row">
                                <div class="col-sm-6 col-md-4">
                                    <img src="{!! route('media.get', ['id'=>$visa->media_ids,'resize'=>'300x185'])  !!}"
                                         class="img-rounded img-responsive img-border"/>
                                </div>
                                <div class="col-sm-6 col-md-8 title-data">
                                    <h1 class="title-hotline">
                                        Hotline: <span class="phone_number">0919.345.788</span></h1>
                                    <div class="content-discount">
                                        <p>
                                            {!!$visa->translation()->first()->content !!}
                                        </p>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12" >
                        <div class="shortcode_title title-center title-decoration-bottom-center">
                            <h3 class="title_primary"> {{__('nhatnga_menu.document')}}</h3>
                            <span class="line_after_title"></span>
                        </div>

                    </div>
                </div>
                <div class="row" id="visa-detail">
                    <div class="col-md-4 col-sm-6" >
                        <div class="service-box wow zoomIn data-visa" data-wow-duration="1.5s" data-wow-delay="0.1s"
                             style="visibility: visible; animation-duration: 1.5s; animation-delay: 0.1s; animation-name: zoomIn;">

                            <h3>{{__('nhatnga_menu.business_visa')}} </h3>
                            <hr class="divider divider-lg-left divider-gray-dark divider-80">
                            <div class="text-left">
                                {!! $visa->translation()->first()->col_work !!}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 ">
                        <div class="service-box wow zoomIn data-visa" data-wow-duration="1.5s" data-wow-delay="0.1s"
                             style="visibility: visible; animation-duration: 1.5s; animation-delay: 0.1s; animation-name: zoomIn;">
                            <h3> {{__('nhatnga_menu.tourist_and_visiting_family_visa')}}</h3>
                            <hr class="divider divider-lg-left divider-gray-dark divider-80">
                            <div class="text-left">
                                {!! $visa->translation()->first()->col_travel !!}

                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="service-box wow zoomIn data-visa" data-wow-duration="1.5s" data-wow-delay="0.1s"
                             style="visibility: visible; animation-duration: 1.5s; animation-delay: 0.1s; animation-name: zoomIn;">
                            <h3>{{__('nhatnga_menu.study_marriage_immigrant_visa')}}</h3>
                            <hr class="divider divider-lg-left divider-gray-dark divider-80">
                            <div class="text-left">
                                {!! $visa->translation()->first()-> col_study !!}

                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="service-box  service-box-note wow zoomIn" data-wow-duration="1.5s"
                             data-wow-delay="0.1s"
                             style="visibility: visible; animation-duration: 1.5s; animation-delay: 0.1s; animation-name: zoomIn;">
                            <h3>{{__('nhatnga_menu.visa_note')}} </h3>
                            <hr class="divider divider-lg-left divider-gray-dark divider-80">
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
        $(document).ready(function () {
            var highestBox = 0;

            // Select and loop the elements you want to equalise
            $('.data-visa').each(function () {

                // If this box is higher than the cached highest then store it
                if ($(this).height() > highestBox) {
                    highestBox = $(this).height();
                }

            });

            // Set the height of all those children to whichever was highest
            $('.data-visa').height(highestBox);


        });
    </script>
@stop

