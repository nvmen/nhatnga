@extends('layouts.frontend')
@section('pageTitle',$cate->name)
@php
$seo_data ="VISA ". $cate->name;
if(isset($seo_data)){
$content_seo = $seo_data;
}
@endphp
@section('content')
    <div class="site wrapper-content">
        <div class="top_site_main" style="background-image:url({{ URL::asset('images/banner/top-heading.jpg') }} );">
            <div class="banner-wrapper container article_heading">
                <div class="breadcrumbs-wrapper">
                    <ul class="phys-breadcrumb">
                        <li><a href="{{route('frontend.home.index')}}" class="home">Home</a></li>
                        <li>{{__('nhatnga_menu.services')}}</li>
                        <li><a href="{{route('frontend.services.visa')}}">VISA</a></li>
                        <li>{{$cate->name}}</li>
                    </ul>
                </div>
                <h1 class="heading_primary">{{$cate->name}}</h1></div>
        </div>
        <section class="content-area">
            <div class="container">
                <div class="row">
                    <div class="site-main col-sm-9 alignleft" id ="main-content">
                        <div class="sc-gallery wrapper_gallery">
                            <div class="gallery-tabs-wrapper">
                                <h1 class="post_list_title">{{__('nhatnga.make_visa')}}</h1>
                            </div>


                            <div class="row">
                                <div id="tmhtmlcontent_topColumn">
                                    <ul class=" clearfix row">
                                        @foreach($visa_list as $visa)
                                        <li class="tmhtmlcontent-item-1 col-xs-4 ">
                                            <a href="{{route('frontend.visa.detail',['slug'=>$visa->slug_url])}}" class="item-link"   title="{{$visa->translation()->first()->name}}">
                                                <img src="{!! route('media.get', ['id'=>$visa->media_ids,'resize'=>'275x183'])  !!}" class="item-img img-responsive" title="" alt="" width="471" height="300">
                                                <div class="item-html">
                                                    <h2>{{$visa->translation()->first()->name}}</h2>
                                                </div>
                                            </a>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>

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

@stop