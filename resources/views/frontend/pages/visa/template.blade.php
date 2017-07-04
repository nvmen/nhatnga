@extends('layouts.frontend')
@section('pageTitle', 'Services')
@section('content')
    <style>
        .service-box {
            margin-bottom: 30px;
            margin-top: 30px;
            background-color: #fff;
            color: #444;
            padding: 30px;
            position: relative;
            border: 1px solid grey;
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
                        <li>ghjghj</li>
                        <li>ghjgh</li>
                    </ul>
                </div>
                <h1 class="heading_primary">ghjghjgh</h1></div>
        </div>
        <section class="content-area">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6 col-sm-6">
                        <img src="https://image.ibb.co/bXSgv5/thailand.jpg">
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-sm-6">
                        <div class="wpb_wrapper">
                            <ul>
                                <li><span style="font-size:20px;"><strong>Đại sứ quán Thái Lan&nbsp;tại Việt
                                            Nam</strong></span><br>
                                    Địa chỉ: 63-65 Hoàng Diệu, Hà Nội, Việt Nam.
                                </li>
                                <li><span style="font-size:20px;"><strong>Lãnh&nbsp;sự quán Thái Lan tại&nbsp;TP.&nbsp;Hồ
                                            Chí Minh</strong></span><br>
                                    Địa chỉ: Số&nbsp;77 Trần Quốc Thảo, Q3, TP.Hồ Chí Minh.
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12" style="text-align:center"><h3> HO SO GOM CO</h3></div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <div class="service-box wow zoomIn" data-wow-duration="1.5s" data-wow-delay="0.1s" style="visibility: visible; animation-duration: 1.5s; animation-delay: 0.1s; animation-name: zoomIn;">

                            <h3>Thị thực công tác </h3>
                            <div class="text-left">
                                <p>
                                    I will place all the necessary content for this event here, including where they can register, join, attend &amp; so on.
                                </p>
                                <p>
                                    If not enough room, I will link to learn more, a new event page dedicated.
                                </p>
                                <p>
                                    Yap. Really looking goody awesome!
                                </p>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="service-box wow zoomIn" data-wow-duration="1.5s" data-wow-delay="0.1s" style="visibility: visible; animation-duration: 1.5s; animation-delay: 0.1s; animation-name: zoomIn;">
                              <h3>Thị thực du lịch, thăm thân</h3>
                            <div class="text-left">
                                <p>
                                    I will place all the necessary content for this event here, including where they can register, join, attend &amp; so on.
                                </p>
                                <p>
                                    If not enough room, I will link to learn more, a new event page dedicated.
                                </p>
                                <p>
                                    Yap. Really looking goody awesome!
                                </p>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="service-box wow zoomIn" data-wow-duration="1.5s" data-wow-delay="0.1s" style="visibility: visible; animation-duration: 1.5s; animation-delay: 0.1s; animation-name: zoomIn;">

                            <h3>Visa du học, kết hôn, định cư</h3>
                            <div class="text-left">
                                <p>
                                    I will place all the necessary content for this event here, including where they can register, join, attend &amp; so on.
                                </p>
                                <p>
                                    If not enough room, I will link to learn more, a new event page dedicated.
                                </p>
                                <p>
                                    Yap. Really looking goody awesome!
                                </p>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="service-box  service-box-note wow zoomIn" data-wow-duration="1.5s" data-wow-delay="0.1s" style="visibility: visible; animation-duration: 1.5s; animation-delay: 0.1s; animation-name: zoomIn;">

                            <h3>Lưu Ý </h3>
                            <div class="text-left">
                                <p>
                                    I will place all the necessary content for this event here, including where they can register, join, attend &amp; so on.
                                </p>
                                <p>
                                    If not enough room, I will link to learn more, a new event page dedicated.
                                </p>
                                <p>
                                    Yap. Really looking goody awesome!
                                </p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <script>
        $(document).ready(function () {
            $('#main-content').children('img').map(function () {
                //  return $(this).attr('src')
            })
        });
    </script>
@stop