@extends('layouts.frontend')
@section('pageTitle', 'VISA')
@section('content')
    <link href="{{ URL::asset('css/nhatnga.css') }}" rel="stylesheet">
    <div class="site wrapper-content">
        <div class="top_site_main" style="background-image:url({{ URL::asset('images/banner/top-heading.jpg') }} );">
            <div class="banner-wrapper container article_heading">
                <div class="breadcrumbs-wrapper">
                    <ul class="phys-breadcrumb">
                        <li><a href="#" class="home">Home</a></li>
                        <li>{{__('nhatnga_menu.services')}}</li>
                        <li>VISA</li>
                    </ul>
                </div>
                <h1 class="heading_primary">VISA</h1></div>
        </div>
        <section class="content-area">
            <div class="container">
                <div class="row">

                    <div class="row">
                        <div class="site-main col-sm-9 alignleft" id="main-content">

                            <div class="row  continent">
                                <div class="sc-gallery wrapper_gallery">
                                    <div class="gallery-tabs-wrapper">
                                        <h1 class="post_list_title">{{__('nhatnga_menu.continent_visa')}}</h1>
                                    </div>
                                    <div class="row nhatnga-achievement">
                                        <div class="col-md-15 col-sm-3 gallery_item-wrap competitions gears">
                                            <a href="{{ route('frontend.visa.asia') }}" class="swipebox"
                                               title="{{__('nhatnga_menu.visa_asia')}}">
                                                <img src="{{ asset('images/visa/asia.png') }}"
                                                     alt="{{__('nhatnga_menu.visa_asia')}}">
                                                <div class="gallery-item">
                                                    <h4 class="title">{{__('nhatnga_menu.visa_asia')}}</h4>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-15 col-sm-3 gallery_item-wrap competitions gears">
                                            <a href="{{ route('frontend.visa.europe') }}" class="swipebox"
                                               title="{{__('nhatnga_menu.visa_europe')}}">
                                                <img src="{{ asset('images/visa/europe.png') }}"
                                                     alt="{{__('nhatnga_menu.visa_europe')}}">
                                                <div class="gallery-item">
                                                    <h4 class="title">{{__('nhatnga_menu.visa_europe')}}</h4>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-15 col-sm-3 gallery_item-wrap competitions gears">
                                            <a href="{{ route('frontend.visa.america') }}" class="swipebox"
                                               title="{{__('nhatnga_menu.visa_america')}}">
                                                <img src="{{ asset('images/visa/america.png') }}"
                                                     alt="{{__('nhatnga_menu.visa_america')}}">
                                                <div class="gallery-item">
                                                    <h4 class="title">{{__('nhatnga_menu.visa_america')}}</h4>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-15 col-sm-3 gallery_item-wrap competitions gears">
                                            <a href="{{ route('frontend.visa.australia') }}" class="swipebox"
                                               title="{{__('nhatnga_menu.visa_australia')}}">
                                                <img src="{{ asset('images/visa/australia.png') }}"
                                                     alt="{{__('nhatnga_menu.visa_australia')}}">
                                                <div class="gallery-item">
                                                    <h4 class="title">{{__('nhatnga_menu.visa_australia')}}</h4>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-15 col-sm-3 gallery_item-wrap competitions gears">
                                            <a href="{{  route('frontend.visa.africa') }}" class="swipebox"
                                               title="{{__('nhatnga_menu.visa_africa')}}">
                                                <img src="{{ asset('images/visa/africa.png') }}"
                                                     alt="{{__('nhatnga_menu.visa_africa')}}">
                                                <div class="gallery-item">
                                                    <h4 class="title">{{__('nhatnga_menu.visa_africa')}}</h4>
                                                </div>
                                            </a>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="row">
                                {!! $service->translation()->first()->content !!}
                            </div>

                        </div>
                        <div class="widget-area col-sm-3 align-left">
                            @include('frontend.common.leftbar')
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