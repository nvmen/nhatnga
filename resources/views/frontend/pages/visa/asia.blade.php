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
                            <div class="sc-gallery wrapper_gallery">
                                <div class="gallery-tabs-wrapper">
                                    <h1 class="post_list_title">Vui lòng chọn nước bạn muốn làm VISA</h1>
                                </div>
                                <div class="row content_gallery">
                                    @foreach($visa_list as $visa)

                                    <div class="col-sm-4 gallery_item-wrap competitions gears">
                                        <a href="{{route('frontend.visa.detail',['slug'=>$visa->slug_url])}}" class="swipebox"
                                           title="{{$visa->translation()->first()->name}}">
                                            <img src=" {!! route('media.get', ['id'=>$visa->media_ids])  !!}" alt="{{$visa->translation()->first()->name}}">
                                            <div class="gallery-item">
                                                <h4 class="title">{{$visa->translation()->first()->name}}</h4>
                                            </div>
                                        </a>
                                    </div>
                                    @endforeach
                                    <div class="col-sm-4 gallery_item-wrap competitions gears">
                                        <a href="{{ asset('images/tour/tour-1.jpg') }}" class="swipebox"
                                           title="World’s hottest destinations for vegans">
                                            <img src="{{ asset('images/tour/tour-1.jpg') }}" alt="World’s hottest destinations for vegans">
                                            <div class="gallery-item">
                                                <h4 class="title">World’s hottest destinations for vegans</h4>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-sm-4 gallery_item-wrap competitions gears">
                                        <a href="{{ asset('images/tour/tour-1.jpg') }}" class="swipebox"
                                           title="World’s hottest destinations for vegans">
                                            <img src="{{ asset('images/tour/tour-1.jpg') }}" alt="World’s hottest destinations for vegans">
                                            <div class="gallery-item">
                                                <h4 class="title">World’s hottest destinations for vegans</h4>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-sm-4 gallery_item-wrap competitions gears">
                                        <a href="{{ asset('images/tour/tour-1.jpg') }}" class="swipebox"
                                           title="World’s hottest destinations for vegans">
                                            <img src="{{ asset('images/tour/tour-1.jpg') }}" alt="World’s hottest destinations for vegans">
                                            <div class="gallery-item">
                                                <h4 class="title">World’s hottest destinations for vegans</h4>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-sm-4 gallery_item-wrap competitions gears">
                                        <a href="{{ asset('images/tour/tour-1.jpg') }}" class="swipebox"
                                           title="World’s hottest destinations for vegans">
                                            <img src="{{ asset('images/tour/tour-1.jpg') }}" alt="World’s hottest destinations for vegans">
                                            <div class="gallery-item">
                                                <h4 class="title">World’s hottest destinations for vegans</h4>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-sm-4 gallery_item-wrap competitions gears">
                                        <a href="{{ asset('images/tour/tour-1.jpg') }}" class="swipebox"
                                           title="World’s hottest destinations for vegans">
                                            <img src="{{ asset('images/tour/tour-1.jpg') }}" alt="World’s hottest destinations for vegans">
                                            <div class="gallery-item">
                                                <h4 class="title">World’s hottest destinations for vegans</h4>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-sm-4 gallery_item-wrap competitions gears">
                                        <a href="{{ asset('images/tour/tour-1.jpg') }}" class="swipebox"
                                           title="World’s hottest destinations for vegans">
                                            <img src="{{ asset('images/tour/tour-1.jpg') }}" alt="World’s hottest destinations for vegans">
                                            <div class="gallery-item">
                                                <h4 class="title">World’s hottest destinations for vegans</h4>
                                            </div>
                                        </a>
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