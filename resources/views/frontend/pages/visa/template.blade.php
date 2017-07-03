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
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-3">
                            <div class="col-item">
                                <div class="photo">
                                    <img src="http://lorempixel.com/250/250/business/?ac=23" class="img-responsive" alt="a" />
                                </div>
                                <div class="info">
                                    <div class="row">
                                        <div class="price col-md-12">
                                            <h5> Sample Product</h5>
                                        </div>
                                    </div>
                                    <div class="clearfix">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-3">
                            <div class="col-item">
                                <div class="photo">
                                    <img src="http://lorempixel.com/250/250/business/?ac=23" class="img-responsive" alt="a" />
                                </div>
                                <div class="info">
                                    <div class="row">
                                        <div class="price col-md-12">
                                            <h5> Sample Product</h5>
                                        </div>
                                    </div>
                                    <div class="clearfix">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-3">
                            <div class="col-item">
                                <div class="photo">
                                    <img src="http://lorempixel.com/250/250/business/?ac=23" class="img-responsive" alt="a" />
                                </div>
                                <div class="info">
                                    <div class="row">
                                        <div class="price col-md-12">
                                            <h5> Sample Product</h5>
                                        </div>
                                    </div>
                                    <div class="clearfix">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-3">
                            <div class="col-item">
                                <div class="photo">
                                    <img src="http://lorempixel.com/250/250/business/?ac=23" class="img-responsive" alt="a" />
                                </div>
                                <div class="info">
                                    <div class="row">
                                        <div class="price col-md-12">
                                            <h5> Sample Product</h5>
                                        </div>
                                    </div>
                                    <div class="clearfix">
                                    </div>
                                </div>
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