@extends('layouts.frontend')
@section('pageTitle', 'Services')
@section('content')
    <div class="site wrapper-content">
        <div class="top_site_main" style="background-image:url({{ URL::asset('images/banner/top-heading.jpg') }} );">
            <div class="banner-wrapper container article_heading">
                <div class="breadcrumbs-wrapper">
                    <ul class="phys-breadcrumb">
                        <li><a href="#" class="home">Home</a></li>
                        <li>{{__('nhatnga_menu.search')}}</li>
                    </ul>
                </div>
                <h1 class="heading_primary">{{__('nhatnga_menu.search')}}</h1></div>
        </div>
        <section class="content-area">
            <div class="container">
                <div class="row">
                    <div class="site-main col-sm-9 alignleft" id="main-content">

                        <div class="wrapper-blog-content">
                            @foreach($results as $search)
                                <article class="type-post">
                                    <div class="img_post"><a href="{{$search->link}}">
                                            <img width="370" height="260" src="{{$search->image_url}}"
                                                 class="wp-post-image" alt=""></a>
                                    </div>
                                    <div class="entry-content content-thumbnail">
                                        <header class="entry-header">
                                            <h2 class="entry-title">
                                                <a href="single.html" rel="bookmark">{{$search->title}}</a>
                                            </h2>
                                            <div class="entry-meta">
											<span class="posted-on">Posted on <a href="javascript:void(0)" rel="bookmark">
                                                    <time class="entry-date published"
                                                          datetime="{{$search->post_date}}">{{$search->post_date->format('d/m/Y')}}
                                                    </time>
                                                </a></span>
                                            </div>
                                        </header>
                                        <div class="entry-desc">
                                            <p>{{$search->short_description}} </p>
                                        </div>
                                    </div>
                                </article>
                            @endforeach
                        </div>


                        <div class="navigation paging-navigation" role="navigation">
                            {!! $results->links() !!}
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