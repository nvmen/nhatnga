@extends('layouts.frontend')
@section('pageTitle',  __('nhatnga_menu.news'))
@section('content')
    <div class="site wrapper-content">
        <div class="top_site_main" style="background-image:url({{ URL::asset('images/banner/top-heading.jpg') }} );">
            <div class="banner-wrapper container article_heading">
                <div class="breadcrumbs-wrapper">
                    <ul class="phys-breadcrumb">
                        <li><a href="#" class="home">Home</a></li>
                        <li>{{__('nhatnga_menu.news')}}</li>
                    </ul>
                </div>
                <h1 class="heading_primary">{{__('nhatnga_menu.news')}}</h1></div>
        </div>
        <section class="content-area">
            <div class="container">
                <div class="row">
                    <div class="site-main col-sm-9 alignleft" id="main-content">
                        <div class="wrapper-blog-content">

                            @foreach($list_news as $news)
                                <article class="type-post">
                                    <div class="img_post"><a href="{{route('frontend.news.detail',['slug'=>$news->slug_url])}}">

                                            @php
                                            $media_id = App\Helper::first_media_id($news->media_ids);
                                            @endphp
                                            <img src="{!! route('media.get', ['id'=>$media_id,'resize'=>'370x260'])  !!}"
                                                 alt="" title="">
                                        </a>
                                    </div>
                                    <div class="entry-content content-thumbnail">
                                        <header class="entry-header">
                                            <h2 class="entry-title">
                                                <a href="{{route('frontend.news.detail',['slug'=>$news->slug_url])}}" rel="bookmark">
                                                     {{$news->translation()->first()->name}}
                                                </a>
                                            </h2>
                                            <div class="entry-meta">
											<span class="posted-on">Posted on <a href="javascript:void(0)" rel="bookmark">
                                                    <time class="entry-date published"
                                                          datetime="{{$news->updated_at->format('d/m/Y')}}">{{$news->updated_at->format('d/m/Y')}}
                                                    </time>
                                                </a>
                                            </span>
                                            </div>
                                        </header>
                                        <div class="entry-desc">
                                            <p>
                                                {{App\Helper::get_words($news->translation()->first()->short_description)}}
                                            </p>
                                        </div>
                                    </div>
                                </article>
                            @endforeach
                                <div class="" role="navigation" style="text-align: center;">
                                    {!! $list_news->links() !!}
                                </div>
                        </div>
                    </div>
                    <div class="widget-area col-sm-3 align-left">
                        @include('frontend.common.left_services')
                    </div>
                </div>
            </div>
        </section>
    </div>
@stop