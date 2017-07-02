@extends('layouts.frontend')
@section('pageTitle', $visa->translation()->first()->name)
@section('content')
<style>
    .wpb_wrapper ul, ol {
        padding: 0;
        margin: 0;
    }
    /*************************************
 * generic styling for ALS elements
 ************************************/

    .als-container {
        position: relative;
        width: 100%;
        margin: 0px auto;
        z-index: 0;
    }

    .als-viewport {
        position: relative;
        overflow: hidden;
        margin: 0px auto;
    }

    .als-wrapper {
        position: relative;
        list-style: none;
    }

    .als-item {
        position: relative;
        display: block;
        text-align: center;
        cursor: pointer;
        float: left;
    }

    .als-prev, .als-next {
        position: absolute;
        cursor: pointer;
        clear: both;
    }
    /*************************************
     * specific styling for #demo3
     ************************************/

    #demo3 {
        margin: 40px auto;
    }

    #demo3 .als-item {
        margin: 0px 5px;
        padding: 4px 0px;
        min-height: 120px;
        min-width: 100px;
        text-align: center;
    }

    #demo3 .als-item img {
        display: block;
        margin: 0 auto;
        vertical-align: middle;
    }

    #demo3 .als-prev, #demo3 .als-next {
        top: 40px;
    }

    #demo3 .als-prev {
        left: 200px;
    }

    #demo3 .als-next {
        right: 200px;
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
                    <div class="site-main col-sm-9 alignleft wpb_wrapper" id ="main-content">
                        <div class="col-md-12">
                            <div class="row">
                                {!! $visa->translation()->first()->content !!}
                            </div>
                        </div>

                        <div class="col-md-12">
                        <br/>
                        </div>
                    </div>
                    <div class="widget-area col-sm-3 align-left">
                        @include('frontend.common.left_continent')
                    </div>
                </div>
            </div>
        </section>
    </div>
    <script>
        $(document ).ready(function() {

        });
    </script>
@stop

