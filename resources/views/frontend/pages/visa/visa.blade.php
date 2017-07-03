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

                    @foreach($visa_list as $visa)
                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <div class="col-item">
                            <div class="photo">
                                <a href="{{route('frontend.visa.detail',['slug'=>$visa->slug_url])}}">
                                    <img src="{!! route('media.get', ['id'=>$visa->media_ids,'resize'=>'248x185'])  !!}" class="img-responsive" alt="a" />
                                </a>
                            </div>
                            <div class="info">
                                <div class="row">
                                    <div class="price col-md-12">
                                        <a href="{{route('frontend.visa.detail',['slug'=>$visa->slug_url])}}">
                                            <h5> {{$visa->translation()->first()->name}}</h5>
                                        </a>
                                    </div>
                                </div>
                                <div class="clearfix">
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
    </div>

@stop