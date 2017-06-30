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
                                        <img src="https://ld-prestashop.template-help.com/prestashop_60010/modules/tmhtmlcontent/img/0353e7c53eb9a2cf7e33233387fba5f7dfcb8f44_banner-img-1.jpg" class="item-img img-responsive" title="" alt="" width="471" height="300">
                                        <div class="item-html">
                                            <h3>Award-Winning</h3>
                                            <h2>Flowers</h2>
                                        </div>
                                    </a>
                                </li>
                                <li class="tmhtmlcontent-item-2 col-xs-4 ">
                                    <a href="index.php?id_category=21&amp;controller=category" class="item-link" title="">
                                        <img src="https://ld-prestashop.template-help.com/prestashop_60010/modules/tmhtmlcontent/img/13d3a7b1e3ab3cf3056fdfea25c3bd665b01f722_banner-img-2.jpg" class="item-img img-responsive" title="" alt="" width="471" height="300">
                                        <div class="item-html">
                                            <h3>Great selection of beautiful</h3>
                                            <h2>indoor plants</h2>
                                        </div>
                                    </a>
                                </li>
                                <li class="tmhtmlcontent-item-3 col-xs-4 ">
                                    <a href="index.php?id_category=16&amp;controller=category" class="item-link" title="">
                                        <img src="https://ld-prestashop.template-help.com/prestashop_60010/modules/tmhtmlcontent/img/fea2031622392697095b259681e64bcc755691ff_banner-img-3.jpg" class="item-img img-responsive" title="" alt="" width="471" height="300">
                                        <div class="item-html">
                                            <h3>gift bags make perfect presents</h3>
                                            <h2>FLOWER GIFTS</h2>
                                        </div>
                                    </a>
                                </li>
                                <li class="tmhtmlcontent-item-4 col-xs-4 ">
                                    <a href="index.php?id_category=12&amp;controller=category" class="item-link" title="">
                                        <img src="https://ld-prestashop.template-help.com/prestashop_60010/modules/tmhtmlcontent/img/9e98d539e1f523eb279b0eac1dd2bc0ade477f90_banner-img-4.jpg" class="item-img img-responsive" title="" alt="" width="471" height="300">
                                        <div class="item-html">
                                            <h3>Plants &amp; Flowers for</h3>
                                            <h2>garden </h2>
                                        </div>
                                    </a>
                                </li>
                                <li class="tmhtmlcontent-item-4 col-xs-4 ">
                                    <a href="index.php?id_category=12&amp;controller=category" class="item-link" title="">
                                        <img src="https://ld-prestashop.template-help.com/prestashop_60010/modules/tmhtmlcontent/img/9e98d539e1f523eb279b0eac1dd2bc0ade477f90_banner-img-4.jpg" class="item-img img-responsive" title="" alt="" width="471" height="300">
                                        <div class="item-html">
                                            <h3>Plants &amp; Flowers for</h3>
                                            <h2>garden </h2>
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