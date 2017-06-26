@extends('layouts.frontend')
@section('pageTitle', $news->translation()->first()->name)
@section('content')
    <div class="site wrapper-content">
        <div class="top_site_main" style="background-image:url({{ URL::asset('images/banner/top-heading.jpg') }} );">
            <div class="banner-wrapper container article_heading">
                <div class="breadcrumbs-wrapper">
                    <ul class="phys-breadcrumb">
                        <li><a href="" class="home">Home</a></li>
                        <li><a href="{{route('frontend.news.index')}}"> {{__('nhatnga_menu.news')}}</a></li>
                    </ul>
                </div>
                <h1 class="heading_primary">{{$news->translation()->first()->name}}</h1></div>
        </div>
        <section class="content-area">
            <div class="container">
                <div class="row">
                    <div class="site-main col-sm-9 alignleft" id="main-content">

                        <article class="post_list_content_unit type-post">
                            <div class="feature-image">
                                <img  src="{!! route('media.get', ['id'=>$news->media_ids,'resize'=>'1200x600'])  !!}"
                                     alt="">
                            </div>
                            <h1 class="post_list_title">{{$news->translation()->first()->name}}</h1>
                            {!! $news->translation()->first()->content !!}
                        </article>
                    </div>
                    <div class="widget-area col-sm-3 align-left">
                        @include('frontend.common.leftbar')
                    </div>
                </div>
            </div>
        </section>
    </div>
@stop