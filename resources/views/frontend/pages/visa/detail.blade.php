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
    <style>


        .product-item {
            padding: 15px;
            background: #fff;
            margin-top: 20px;
            border-radius: 5px;
            border: 1px solid #f1f1f1;
            position: relative;
        }
        .product-item:hover {

        }
        .product-item:after {
            content: ".";
            display: block;
            height: 0;
            clear: both;
            visibility: hidden;
            font-size: 0;
            line-height:0;
        }

        .pi-img-wrapper {
            position: relative;
        }
        .pi-img-wrapper div {
            background: rgba(0,0,0,0.3);
            position: absolute;
            left: 0;
            top: 0;
            display: none;
            width: 100%;
            height: 100%;
            text-align: center;
        }
        .product-item:hover>.pi-img-wrapper>div {
            display: block;
        }
        .pi-img-wrapper div .btn {
            padding: 3px 10px;
            color: #fff;
            border: 1px #fff solid;
            margin: -13px 5px 0;
            background: transparent;
            text-transform: uppercase;
            position: relative;
            top: 50%;
            line-height: 1.4;
            font-size: 12px;
        }
        .product-item .btn:hover {
            background: #e84d1c;
            border-color: #c8c8c8;
        }

        .product-item h3 {
            font-size: 14px;
            font-weight: 600;
            padding-bottom: 4px;
            text-transform: uppercase;
            height: 16px;
            text-align: center;
        }
        .product-item h3 a {
            color: #3e4d5c;
        }
        .product-item h3 a:hover {
            color: #E02222;
        }
        .img-border{
            border:1px solid #eee;
        }
    </style>
    <style>
        /* Global */


       #popular-data img { max-width:100%; }

        #popular-data a {
            -webkit-transition: all 150ms ease;
            -moz-transition: all 150ms ease;
            -ms-transition: all 150ms ease;
            -o-transition: all 150ms ease;
            transition: all 150ms ease;
        }

        #popular-data a:hover {
            -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=50)"; /* IE 8 */
            filter: alpha(opacity=50); /* IE7 */
            opacity: 0.6;
            text-decoration: none;
        }




        #popular-data .thumbnails li> .fff .caption {
            background:#fff !important;
            padding:10px
        }

        /* Page Header */
        #popular-data  .page-header {
            background: #f9f9f9;
            margin: -30px -40px 40px;
            padding: 20px 40px;
            border-top: 4px solid #ccc;
            color: #999;
            text-transform: uppercase;
        }

        #popular-data .page-header h3 {
            line-height: 0.88rem;
            color: #000;
        }

        #popular-data ul.thumbnails {
            margin-bottom: 0px;
        }



        /* Thumbnail Box */
        #popular-data .caption h4 {
            color: #444;
        }

        #popular-data .caption p {
            color: #999;
        }

        /* Carousel Control */
        #popular-data .control-box {
            text-align: right;
            width: 100%;
        }
        #popular-data .carousel-control{
            background: #666;
            border: 0px;
            border-radius: 0px;
            display: inline-block;
            font-size: 34px;
            font-weight: 200;
            line-height: 18px;
            opacity: 0.5;
            padding: 4px 10px 0px;
            position: static;
            height: 30px;
            width: 15px;
        }



        /* Mobile Only */
        @media (max-width: 767px) {
            #popular-data .page-header, .control-box {
                text-align: center;
            }
        }
        @media (max-width: 479px) {
            #popular-data .caption {
                word-break: break-all;
            }
        }


        #popular-data li { list-style-type:none;}

        ::selection { background: #ff5e99; color: #FFFFFF; text-shadow: 0; }
        ::-moz-selection { background: #ff5e99; color: #FFFFFF; }
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

                <div class="row">
                    <div class="col-md-12" >
                        <div class="shortcode_title title-center title-decoration-bottom-center">
                            <h3 class="title_primary"> {{__('nhatnga_menu.popular_visas')}}</h3>
                            <span class="line_after_title"></span>
                        </div>
                    </div>
                </div>

                @php
                $index =0;
                @endphp
                <div class="row" id="popular-data">
                    <!-- Load Visa popular-->
                    <div class="carousel slide" id="myCarousel">
                        <div class="carousel-inner">
                            @foreach($visa_popular as $chunk)
                                <div class="item  @if($index == 0)active @endif">
                                    <ul class="thumbnails">
                                        @foreach($chunk as $popular)
                                            <li class="col-sm-3">
                                                <div class="product-item">
                                                    <div class="pi-img-wrapper">
                                                        <img src="{!! route('media.get', ['id'=>$popular->media_ids,'resize'=>'148x85'])  !!}" class="img-responsive img-border" alt="{{$popular->translation()->first()->name}}">
                                                        <div>
                                                            <a href="{{route('frontend.visa.detail',['slug'=>$popular->slug_url])}}" class="btn">View</a>
                                                        </div>
                                                    </div>
                                                     <h3><a href="{{route('frontend.visa.detail',['slug'=>$popular->slug_url])}}">{{$popular->translation()->first()->name}}</a></h3>
                                                </div>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div><!-- /Slide1 -->
                                @php
                                $index =1;
                                @endphp
                            @endforeach
                        </div>


                        <nav>
                            <ul class="control-box pager">
                                <li><a data-slide="prev" href="#myCarousel" class=""><i class="glyphicon glyphicon-chevron-left"></i></a></li>
                                <li><a data-slide="next" href="#myCarousel" class=""><i class="glyphicon glyphicon-chevron-right"></i></li>
                            </ul>
                        </nav>
                        <!-- /.control-box -->

                    </div><!-- /#myCarousel -->
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

