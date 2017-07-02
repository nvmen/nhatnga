@extends('layouts.frontend')
@section('pageTitle', 'VISA')
@section('content')
    <link href="{{ URL::asset('css/nhatnga.css') }}" rel="stylesheet">
    <style>
        #content-visa ol {
            list-style: decimal;
            margin-left:20px;
        }
        #content-visa ul {
            list-style: disc;
            margin-left:30px;
        }
    </style>
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

                <div class="site-main col-sm-9 alignleft" id="main-content">

                    <div class="row visa-info">
                        <div class="col-md-2 col-md-offset-1">
                            <div class="asia-visa">


                                <a href="{{ route('frontend.visa.asia') }}" title="{{__('nhatnga_menu.visa_asia')}}">
                                    <div style="width: 100%">
                                        <img src ="{{URL::asset('images/continent/chau2.png')}}" height="60" width="60"/>
                                    </div>

                                    <span class="title">{{__('nhatnga_menu.visa_asia')}}</span>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="europe-visa">
                                <a href="{{ route('frontend.visa.europe') }}"
                                   title="{{__('nhatnga_menu.visa_europe')}}">
                                    <div style="width: 100%">
                                        <img src ="{{URL::asset('images/continent/chau1.png')}}" height="60" width="60"/>
                                    </div>

                                    <span class="title">{{__('nhatnga_menu.visa_europe')}}</span>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="america-visa">
                                <a href="{{ route('frontend.visa.america') }}"
                                   title="{{__('nhatnga_menu.visa_america')}}">
                                    <div style="width: 100%">
                                        <img src ="{{URL::asset('images/continent/chau3.png')}}" height="60" width="60"/>
                                    </div>
                                    <span class="title">{{__('nhatnga_menu.visa_america')}}</span>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="visa_australia">
                                <a href="{{ route('frontend.visa.australia') }}"
                                   title="{{__('nhatnga_menu.visa_australia')}}">
                                    <div style="width: 100%">
                                        <img src ="{{URL::asset('images/continent/chau4.png')}}" height="60" width="60"/>
                                    </div>
                                    <span class="title">{{__('nhatnga_menu.visa_australia')}}</span>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="visa_africa">
                                <a href="{{  route('frontend.visa.africa') }}"
                                   title="{{__('nhatnga_menu.visa_africa')}}">
                                    <div style="width: 100%">
                                        <img src ="{{URL::asset('images/continent/chau5.png')}}" height="60" width="60"/>
                                    </div>
                                    <span class="title">{{__('nhatnga_menu.visa_africa')}}</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="row" id="content-visa">
                        {!! $service->translation()->first()->content !!}
                    </div>
                </div>
                <div class="widget-area col-sm-3 align-left">
                   <div class="row" >
                       @include('frontend.common.left_services')
                   </div>
                </div>


            </div>
        </section>
    </div>

@stop

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
                    <div class="site-main col-sm-9 alignleft" id="main-content">
                        <div class="row-fluid">
                            <div class="span2 offset1">men</div>
                            <div class="span2">men</div>
                            <div class="span2">men</div>
                            <div class="span2">men</div>
                            <div class="span2">men</div>
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