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

                        <div class="wrapper-blog-content">
                            <article class="type-post">
                                <div class="img_post"><a href="single.html">
                                        <img width="370" height="260" src="{{URL::asset('images/blog/176H.jpg')}}" class="wp-post-image" alt=""></a>
                                </div>
                                <div class="entry-content content-thumbnail">
                                    <header class="entry-header">
                                        <h2 class="entry-title">
                                            <a href="single.html" rel="bookmark">World’s hottest destinations for vegans</a>
                                        </h2>
                                        <div class="entry-meta">
											<span class="posted-on">Posted on <a href="single.html" rel="bookmark">
                                                    <time class="entry-date published" datetime="2016-09-06T04:52:25+00:00">September 6, 2016</time>
                                                </a></span>
                                        </div>
                                    </header>
                                    <div class="entry-desc">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam efficitur egestas risus. Sed eros augue, tempor et faucibus eu, cursus ac lacus. Ut sodales semper ante, at malesuada neque vestibulum </p>
                                    </div>
                                </div>
                            </article>
                            <article class="type-post">
                                <div class="img_post"><a href="single.html">
                                        <img width="370" height="260" src="{{URL::asset('images/blog/176H.jpg')}}" class="wp-post-image" alt=""></a>
                                </div>
                                <div class="entry-content content-thumbnail">
                                    <header class="entry-header">
                                        <h2 class="entry-title">
                                            <a href="single.html" rel="bookmark">Love advice from experts</a>
                                        </h2>
                                        <div class="entry-meta">
											<span class="posted-on">Posted on <a href=single.html" rel="bookmark">
                                                    <time class="entry-date published" datetime="2016-09-06T04:49:51+00:00">September 6, 2016</time>
                                                </a></span>
                                        </div>
                                    </header>
                                    <div class="entry-desc">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam efficitur egestas risus. Sed eros augue, tempor et faucibus eu, cursus ac lacus. Ut sodales semper ante, at malesuada neque vestibulum </p>
                                    </div>
                                </div>
                            </article>
                            <article class="type-post">
                                <div class="img_post">
                                    <a href="single.html"><img width="370" height="260" src="{{URL::asset('images/blog/176H.jpg')}}" alt=""></a>
                                </div>
                                <div class="entry-content content-thumbnail">
                                    <header class="entry-header">
                                        <h2 class="entry-title">
                                            <a href="single.html" rel="bookmark">The perfect summer body</a>
                                        </h2>
                                        <div class="entry-meta">
											<span class="posted-on">Posted on <a href="single.html" rel="bookmark">
                                                    <time class="entry-date published" datetime="2016-09-06T04:43:58+00:00">September 6, 2016</time>
                                                </a></span>
                                        </div>
                                    </header>
                                    <div class="entry-desc">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam efficitur egestas risus. Sed eros augue, tempor et faucibus eu, cursus ac lacus. Ut sodales semper ante, at malesuada neque vestibulum </p>
                                    </div>
                                </div>
                            </article>
                            <article class="type-post">
                                <div class="img_post">
                                    <a href="single.html"><img width="370" height="260" src="{{URL::asset('images/blog/176H.jpg')}}" alt=""></a>
                                </div>
                                <div class="entry-content content-thumbnail">
                                    <header class="entry-header">
                                        <h2 class="entry-title">
                                            <a href="single.html" rel="bookmark">A rare opportunity to try Foundry coffee</a>
                                        </h2>
                                        <div class="entry-meta">
											<span class="posted-on">Posted on <a href="single.html" rel="bookmark">
                                                    <time class="entry-date published" datetime="2016-09-06T04:42:39+00:00">September 6, 2016</time>
                                                </a></span>
                                        </div>
                                    </header>
                                    <div class="entry-desc">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam efficitur egestas risus. Sed eros augue, tempor et faucibus eu, cursus ac lacus. Ut sodales semper ante, at malesuada neque vestibulum </p>
                                    </div>
                                </div>
                            </article>
                            <article class="type-post">
                                <div class="img_post">
                                    <a href="single.html"><img width="370" height="260" src="{{URL::asset('images/blog/176H.jpg')}}" alt=""></a>
                                </div>
                                <div class="entry-content content-thumbnail">
                                    <header class="entry-header">
                                        <h2 class="entry-title">
                                            <a href="single.html" rel="bookmark">7 Things You Tell People</a>
                                        </h2>
                                        <div class="entry-meta">
											<span class="posted-on">Posted on <a href="single.html" rel="bookmark">
                                                    <time class="entry-date published" datetime="2016-09-06T02:44:51+00:00">September 6, 2016</time>
                                                </a></span>
                                        </div>
                                    </header>
                                    <div class="entry-desc">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam efficitur egestas risus. Sed eros augue, tempor et faucibus eu, cursus ac lacus. Ut sodales semper ante, at malesuada neque vestibulum </p>
                                    </div>
                                </div>
                            </article>
                            <article class="type-post">
                                <div class="img_post">
                                    <a href="single.html"><img width="370" height="260" src="{{URL::asset('images/blog/176H.jpg')}}" alt=""></a>
                                </div>
                                <div class="entry-content content-thumbnail">
                                    <header class="entry-header">
                                        <h2 class="entry-title">
                                            <a href="single.html" rel="bookmark">The Sun Is Underappreciated</a>
                                        </h2>
                                        <div class="entry-meta">
											<span class="posted-on">Posted on <a href="single.html" rel="bookmark">
                                                    <time class="entry-date published" datetime="2016-09-06T02:41:10+00:00">September 6, 2016</time>
                                                </a></span>
                                        </div>
                                    </header>
                                    <div class="entry-desc">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam efficitur egestas risus. Sed eros augue, tempor et faucibus eu, cursus ac lacus. Ut sodales semper ante, at malesuada neque vestibulum </p>
                                    </div>
                                </div>
                            </article>

                            <article class="type-post">
                                <div class="img_post">
                                    <a href="single.html"><img width="370" height="260" src="{{URL::asset('images/blog/176H.jpg')}}" alt=""></a>
                                </div>
                                <div class="entry-content content-thumbnail">
                                    <header class="entry-header">
                                        <h2 class="entry-title">
                                            <a href="single.html" rel="bookmark">the Santa Barbara Wildfire</a>
                                        </h2>
                                        <div class="entry-meta">
											<span class="posted-on">Posted on <a href="single.html" rel="bookmark">
                                                    <time class="entry-date published" datetime="2016-09-06T02:34:51+00:00">September 6, 2016</time>
                                                </a></span>
                                        </div>
                                    </header>
                                    <div class="entry-desc">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam efficitur egestas risus. Sed eros augue, tempor et faucibus eu, cursus ac lacus. Ut sodales semper ante, at malesuada neque vestibulum </p>
                                    </div>
                                </div>
                            </article>
                            <article class="type-post">
                                <div class="img_post">
                                    <a href="single.html"><img width="370" height="260" src="{{URL::asset('images/blog/176H.jpg')}}" alt=""></a>
                                </div>
                                <div class="entry-content content-thumbnail">
                                    <header class="entry-header">
                                        <h2 class="entry-title">
                                            <a href="single.html" rel="bookmark">A Perfect Day in the Nature</a>
                                        </h2>
                                        <div class="entry-meta">
											<span class="posted-on">Posted on <a href="single.html" rel="bookmark">
                                                    <time class="entry-date published" datetime="2016-09-06T02:32:44+00:00">September 6, 2016</time>
                                                </a></span>
                                        </div>
                                    </header>
                                    <div class="entry-desc">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam efficitur egestas risus. Sed eros augue, tempor et faucibus eu, cursus ac lacus. Ut sodales semper ante, at malesuada neque vestibulum </p>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="navigation paging-navigation" role="navigation">
                            <ul class="page-numbers">
                                <li><span class="page-numbers current">1</span></li>
                                <li><a class="page-numbers" href="index.htm#">2</a></li>
                                <li><a class="next page-numbers" href="index.htm#"><i class="fa fa-long-arrow-right"></i></a>
                                </li>
                            </ul>
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