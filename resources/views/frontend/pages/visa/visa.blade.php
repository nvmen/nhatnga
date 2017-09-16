@extends('layouts.frontend')
@section('pageTitle',$cate->name)
@php
$seo_data ="VISA ". $cate->name;
if(isset($seo_data)){
$content_seo = $seo_data;
}
@endphp

@section('content')
 <style>


     .product-item {
         padding: 15px;
         background: #fff;
         margin-top: 20px;
         border-radius: 5px;
         border: 1px solid #f1f1f1;
         position: relative;
     }
     .product-item:hover {

     }
     .product-item:after {
         content: ".";
         display: block;
         height: 0;
         clear: both;
         visibility: hidden;
         font-size: 0;
         line-height:0;
     }

     .pi-img-wrapper {
         position: relative;
     }
     .pi-img-wrapper div {
         background: rgba(0,0,0,0.3);
         position: absolute;
         left: 0;
         top: 0;
         display: none;
         width: 100%;
         height: 100%;
         text-align: center;
     }
     .product-item:hover>.pi-img-wrapper>div {
         display: block;
     }
     .pi-img-wrapper div .btn {
         padding: 3px 10px;
         color: #fff;
         border: 1px #fff solid;
         margin: -13px 5px 0;
         background: transparent;
         text-transform: uppercase;
         position: relative;
         top: 50%;
         line-height: 1.4;
         font-size: 12px;
     }
     .product-item .btn:hover {
         background: #e84d1c;
         border-color: #c8c8c8;
     }

     .product-item h3 {
         font-size: 14px;
         font-weight: 600;
         padding-bottom: 4px;
         text-transform: uppercase;
		 height: 16px;
         text-align: center;
     }
     .product-item h3 a {
         color: #3e4d5c;
     }
     .product-item h3 a:hover {
         color: #E02222;
     }
     .img-border{
         border:1px solid #eee;
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
                        <li>{{$cate->name}}</li>
                    </ul>
                </div>
                <h1 class="heading_primary">{{$cate->name}}</h1></div>
        </div>
        <section class="content-area">
            <div class="container">
                <div class="col-md-12">
                    <h3>{{__('nhatnga.make_visa')}}</h3>
                </div>
                <div class="row">
                    @foreach($visa_list as $visa)
                    <div class="col-md-3">
                        <div class="product-item">
                            <div class="pi-img-wrapper">
                                <img 
                                     src="{{\App\Helper::get_url_media($visa->media_ids,'148x85')}}"
                                     onerror="this.src='{!! route('media.get', ['id'=>$visa->media_ids,'resize'=>'148x85'])  !!}';"
                                     class="img-responsive img-border" alt="{{$visa->translation()->first()->name}}">
                                <div>
                                    <a href="{{route('frontend.visa.detail',['slug'=>$visa->slug_url])}}" class="btn">View</a>
                                </div>
                            </div>
                            <h3><a href="{{route('frontend.visa.detail',['slug'=>$visa->slug_url])}}">{{$visa->translation()->first()->name}}</a></h3>
                        </div>
                    </div>
                    @endforeach
                </div>

            </div>
        </section>
    </div>

@stop