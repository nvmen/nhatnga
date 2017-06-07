@extends('layouts.frontend')
@section('pageTitle', 'Services')
@section('content')

    <div class="site wrapper-content">
        <div class="top_site_main" style="background-image:url({{ URL::asset('images/banner/top-heading.jpg') }} );">
            <div class="banner-wrapper container article_heading">
                <div class="breadcrumbs-wrapper">
                    <ul class="phys-breadcrumb">
                        <li><a href="#" class="home">Home</a></li>
                         <li>{{__('nhatnga_menu.services')}}</li>
                        <li>{{__('nhatnga.serivce_translation')}}</li>
                    </ul>
                </div>
                <h1 class="heading_primary">{{__('nhatnga.serivce_translation')}}</h1></div>
        </div>
        <section class="content-area">
            <div class="container">
                <div class="row">
                    <div class="site-main col-sm-9 alignleft" id ="main-content">
                        {!! $service->translation()->first()->content !!}
                        <div>
                            <img width="1200" height="800" src="http://travelwp.physcode.com/wp-content/uploads/2016/09/86H.jpg"  alt="">
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
        $(document ).ready(function() {
            $('#main-content').children('img').map(function(){
              //  return $(this).attr('src')
            })
        });
    </script>
@stop