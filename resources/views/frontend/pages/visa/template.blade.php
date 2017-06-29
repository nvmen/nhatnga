@extends('layouts.frontend')
@section('pageTitle', 'Services')
@section('content')

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
                    <div class="site-main col-sm-9 alignleft" id="main-content">
                        <div class="col-sm-12">
                            <div class="col-sm-6">
                                <img src="https://image.ibb.co/bXSgv5/thailand.jpg">
                            </div>
                            <div class="col-sm-6">
                                <div class="wpb_wrapper">
                                    <ul>
                                        <li><strong>Đại sứ quán Thái Lan&nbsp;tại Việt Nam</strong><br>
                                            Địa chỉ: 63-65 Hoàng Diệu, Hà Nội, Việt Nam.
                                        </li>
                                        <li><strong>Lãnh&nbsp;sự quán Thái Lan tại&nbsp;TP.&nbsp;Hồ Chí Minh</strong>
                                            <br>
                                            Địa chỉ: Số&nbsp;77 Trần Quốc Thảo, Q3, TP.Hồ Chí Minh.
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="row">
                                <h2 style="text-align: center;font-family:Roboto;font-weight:;font-style:"
                                    class="vc_custom_heading">Hồ sơ xin VISA Thái Lan</h2>
                            </div>
                            <div class="row">
                                <h4 style="text-align: left;">Các hồ sơ cơ bản&nbsp;cần chuẩn bị để làm thủ tục xin VISA
                                    Thái Lan</h4>
                            </div>
                            <div class="row">
                                <div class="wpb_wrapper">
                                    <ol>
                                        <li><h5>Hộ chiếu</h5></li>
                                        <li><h5>02 hình 4×6 nền trắng</h5>
                                        </li>
                                    </ol>
                                </div>
                            </div>
                            <div class="row">
                                <div class="wpb_wrapper">
                                    <p>QUỐC TỊCH VIỆT NAM ĐƯỢC MIỄN VISA 30 NGÀY</p>
                                </div>
                            </div>
                            <div class="row">
                                <h4 style="text-align: left;">Hồ sơ cần chuẩn bị riêng cho từng &nbsp;trường hợp sau:</h4>
                            </div>
                        </div>

                    </div>
                    <div class="widget-area col-sm-3 align-left">
                        @include('frontend.common.leftbar')
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