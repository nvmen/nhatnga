@extends('layouts.frontend')
@section('pageTitle', __('nhatnga_menu.services_workpermit'))
@section('content')

    <div class="site wrapper-content">
        <div class="top_site_main" style="background-image:url({{ URL::asset('images/banner/top-heading.jpg') }} );">
            <div class="banner-wrapper container article_heading">
                <div class="breadcrumbs-wrapper">
                    <ul class="phys-breadcrumb">
                        <li><a href="#" class="home">Home</a></li>
                        <li>{{__('nhatnga_menu.services')}}</li>
                        <li>{{__('nhatnga_menu.services_workpermit')}}</li>
                    </ul>
                </div>
                <h1 class="heading_primary">{{__('nhatnga_menu.services_workpermit')}}</h1></div>
        </div>
        <section class="content-area">
            <div class="container">
                <div class="row">
                    <div class="site-main col-sm-9 alignleft">
                        <div class="row">
                            <div class="col-sm-12">
                                {!! $service->translation()->first()->content !!}
                            </div>
                        </div>
                    </div>
                    <div class="widget-area col-sm-3 align-left">
                        <div class="row">
                            @include('frontend.common.left_services')
                        </div>


                    </div>
                </div>
            </div>
        </section>
    </div>

@stop