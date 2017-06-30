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
                        <div id="tmhtmlcontent_topColumn">
                            <ul class=" clearfix row">
                                <li class="tmhtmlcontent-item-1 col-xs-4 ">
                                    <a href="index.php?id_category=20&amp;controller=category" class="item-link" title="">
                                        <img src="{{URL::asset('images/custom/abc.jpg')}}" class="item-img img-responsive" title="" alt="" width="471" height="300">
                                        <div class="item-html">
                                            <h2>Flowers</h2>
                                        </div>
                                    </a>
                                </li>
                                <li class="tmhtmlcontent-item-2 col-xs-4 ">
                                    <a href="index.php?id_category=21&amp;controller=category" class="item-link" title="">
                                        <img src="{{URL::asset('images/custom/abc.jpg')}}" class="item-img img-responsive" title="" alt="" width="471" height="300">
                                        <div class="item-html">
                                            <h2>indoor plants</h2>
                                        </div>
                                    </a>
                                </li>

                                <li class="tmhtmlcontent-item-1 col-xs-4 ">
                                    <a href="index.php?id_category=20&amp;controller=category" class="item-link" title="">
                                        <img src="{{URL::asset('images/custom/abc.jpg')}}" class="item-img img-responsive" title="" alt="" width="471" height="300">
                                        <div class="item-html">
                                            <h2>Flowers</h2>
                                        </div>
                                    </a>
                                </li>
                                <li class="tmhtmlcontent-item-2 col-xs-4 ">
                                    <a href="index.php?id_category=21&amp;controller=category" class="item-link" title="">
                                        <img src="{{URL::asset('images/custom/abc.jpg')}}" class="item-img img-responsive" title="" alt="" width="471" height="300">
                                        <div class="item-html">
                                            <h2>indoor plants</h2>
                                        </div>
                                    </a>
                                </li>

                            </ul>
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