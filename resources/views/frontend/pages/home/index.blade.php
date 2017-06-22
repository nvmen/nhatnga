@extends('layouts.frontend')
@section('pageTitle', 'Home')
@section('content')
    <div class="home-content" role="main">
        <div class="top_site_main">

        </div>
        <div id="home-page-slider-image" class="carousel slide" data-ride="carousel">
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="images/home/slider.jpg" alt="Home Slider 1">
                    <div class="carousel-caption content-slider">
                        <div class="container">
                            <h2>WONDERFUL BLUE BEACH </h2>
                            <p>Template based on deep research on the most popular travel booking websites such as
                                booking, tripadvisor, yahoo travel </p>
                            <p><a href="tours.html" class="btn btn-slider">VIEW TOURS </a></p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img src="images/home/slider-2.jpg" alt="Home Slider 2">
                    <div class="carousel-caption content-slider">
                        <div class="container">
                            <h2>WONDERFUL BLUE BEACH </h2>
                            <p>Template based on deep research on the most popular travel booking websites such as
                                booking, tripadvisor, yahoo travel </p>
                            <p><a href="tours.html" class="btn btn-slider">VIEW TOURS </a></p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Controls -->
            <a class="carousel-control-left" href="index.htm#home-page-slider-image" data-slide="prev">
                <i class="lnr lnr-chevron-left"></i>
            </a>
            <a class="carousel-control-right" href="index.htm#home-page-slider-image" data-slide="next">
                <i class="lnr lnr-chevron-right"></i>
            </a>
        </div>
        <div class="container two-column-respon mg-top-6x mg-bt-6x">
            <div class="row">
                <div class="col-sm-12 mg-btn-6x">
                    <div class="shortcode_title title-center title-decoration-bottom-center">
                        <h3 class="title_primary"> {{__('nhatnga.popular_services')}}</h3><span
                                class="line_after_title"></span>
                    </div>
                </div>
            </div>
            <div class="row padding-menu">
                <div class="wpb_column col-sm-4">
                    <div class="widget-icon-box widget-icon-box-base iconbox-center">
                        <div class="boxes-icon circle"
                             style="font-size:30px;width:80px; height:80px;line-height:80px">
                                <span class="inner-icon"><i
                                            class="vc_icon_element-icon flaticon-travelling"></i></span>
                        </div>
                        <div class="content-inner">
                            <div class="sc-heading article_heading">
                                <h4 class="heading__primary">Tours</h4></div>
                            <div class="desc-icon-box">
                                <div>{{__('home.tour_description')}}</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wpb_column col-sm-4">
                    <div class="widget-icon-box widget-icon-box-base iconbox-center">
                        <div class="boxes-icon " style="font-size:30px;width:80px; height:80px;line-height:80px">
                            <span class="inner-icon"><i class="fa fa-cc-visa"></i></span>
                        </div>
                        <div class="content-inner">
                            <div class="sc-heading article_heading">
                                <h4 class="heading__primary">{{__('home.visa')}}</h4></div>
                            <div class="desc-icon-box">
                                <div>{{__('home.visa_description')}}</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wpb_column col-sm-4">
                    <div class="widget-icon-box widget-icon-box-base iconbox-center">
                        <div class="boxes-icon " style="font-size:30px;width:80px; height:80px;line-height:80px">
                            <span class="inner-icon"><i class="vc_icon_element-icon flaticon-travel-2"></i></span>
                        </div>
                        <div class="content-inner">
                            <div class="sc-heading article_heading">
                                <h4 class="heading__primary">{{__('home.translation_notarization')}}</h4></div>
                            <div class="desc-icon-box">
                                <div>{{__('home.translation_notarization_description')}}</div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row padding-menu">
                <div class="wpb_column col-sm-4">
                    <div class="widget-icon-box widget-icon-box-base iconbox-center">
                        <div class="boxes-icon circle"
                             style="font-size:30px;width:80px; height:80px;line-height:80px">
                            <span class="inner-icon"><i class="fa fa-id-card-o"></i></span>
                        </div>
                        <div class="content-inner">
                            <div class="sc-heading article_heading">
                                <h4 class="heading__primary">{{__('home.work_permit')}}</h4></div>
                            <div class="desc-icon-box">
                                <div>{{__('home.work_permit_description')}}</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wpb_column col-sm-4">
                    <div class="widget-icon-box widget-icon-box-base iconbox-center">
                        <div class="boxes-icon circle"
                             style="font-size:30px;width:80px; height:80px;line-height:80px">
                                <span class="inner-icon"><i
                                            class="fa fa-home"></i></span>
                        </div>
                        <div class="content-inner">
                            <div class="sc-heading article_heading">
                                <h4 class="heading__primary">{{__('home.temporary_resident_card')}}</h4></div>
                            <div class="desc-icon-box">
                                <div>{{__('home.temporary_resident_card_description')}}</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wpb_column col-sm-4">
                    <div class="widget-icon-box widget-icon-box-base iconbox-center">
                        <div class="boxes-icon " style="font-size:30px;width:80px; height:80px;line-height:80px">
                            <span class="inner-icon"><i class="fa fa-plane"></i></span>
                        </div>
                        <div class="content-inner">
                            <div class="sc-heading article_heading">
                                <h4 class="heading__primary">{{__('home.air_ticket')}}</h4></div>
                            <div class="desc-icon-box">
                                <div>{{__('home.air_ticket_description')}}</div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="wpb_column col-sm-4">
                    <div class="widget-icon-box widget-icon-box-base iconbox-center">
                        <div class="boxes-icon " style="font-size:30px;width:80px; height:80px;line-height:80px">
                            <span class="inner-icon"><i class="fa fa-address-card"></i></span>
                        </div>
                        <div class="content-inner">
                            <div class="sc-heading article_heading">
                                <h4 class="heading__primary">{{__('home.APEC_card')}}</h4></div>
                            <div class="desc-icon-box">
                                <div>{{__('home.APEC_card_description')}}.</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wpb_column col-sm-4">
                    <div class="widget-icon-box widget-icon-box-base iconbox-center">
                        <div class="boxes-icon circle"
                             style="font-size:30px;width:80px; height:80px;line-height:80px">
                            <span class="inner-icon"><i class="fa fa-address-book-o"></i></span>
                        </div>
                        <div class="content-inner">
                            <div class="sc-heading article_heading">
                                <h4 class="heading__primary">{{__('home.vietnamese_visa')}} </h4></div>
                            <div class="desc-icon-box">
                                <div>{{__('home.vietnamese_visa_description')}}</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wpb_column col-sm-4">
                    <div class="widget-icon-box widget-icon-box-base iconbox-center">
                        <div class="boxes-icon circle"
                             style="font-size:30px;width:80px; height:80px;line-height:80px">
                                <span class="inner-icon"><i
                                            class="fa fa-car"></i></span>
                        </div>
                        <div class="content-inner">
                            <div class="sc-heading article_heading">
                                <h4 class="heading__primary">{{__('home.other_services')}}</h4></div>
                            <div class="desc-icon-box">
                                <div>{{__('home.other_services_description')}}</div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="padding-top-6x padding-bottom-6x section-background"
             style="background-image:url(images/home/bg-popular.jpg)">
            <div class="container">
                <div class="shortcode_title text-white title-center title-decoration-bottom-center">
                    <div class="title_subtitle">{{__('nhatnga.take_a_look_at_our')}}</div>
                    <h3 class="title_primary">{{__('nhatnga.most_popular_tours')}}</h3>
                    <span class="line_after_title" style="color:#ffffff"></span>
                </div>
                <div class="row wrapper-tours-slider">
                    <div class="tours-type-slider list_content" data-dots="true" data-nav="true"
                         data-responsive='{"0":{"items":1}, "480":{"items":2}, "768":{"items":2}, "992":{"items":3}, "1200":{"items":3}}'>
                        @foreach($tour_popular as $tour)
                            <div class="item-tour">


                                <div class="item_border">
                                    <div class="item_content">
                                        <div class="post_images">
                                            <a href="{{route('frontend.tour.detail',['slug'=>$tour->slug_url])}}"
                                               class="travel_tour-LoopProduct-link">
											<span class="price">
                                                  @if($tour->is_sale)
                                                    <del>
                                                        <span class="travel_tour-Price-amount amount">
                                                            {{App\Helper::get_format_money($tour->translation()->first()->adult_price,0)}}
                                                        </span>
                                                    </del>
                                                    <ins>
                                                        <span class="travel_tour-Price-amount amount">
                                                            &nbsp;{{App\Helper::get_format_money($tour->translation()->first()->adult_price*(1-$tour->discount_percent/100),0)}}
                                                        </span>
                                                    </ins>
                                                @else
                                                    <span class="travel_tour-Price-amount amount">
                                                        {{App\Helper::get_format_money($tour->translation()->first()->adult_price,0)}}</span>
                                                @endif
											</span>
                                                @if($tour->is_sale)
                                                    <span class="onsale">Sale!</span>
                                                @endif
                                                @php
                                                $media_id =$tour->get_first_media_id($tour->media_ids);
                                                @endphp
                                                <img src="{!! route('media.get', ['id'=>$media_id,'resize'=>'430x305'])  !!}"
                                                     alt="" title="">
                                            </a>
                                        </div>
                                        <div class="wrapper_content">
                                            <div class="post_title"><h4>
                                                    <a href="{{route('frontend.tour.detail',['slug'=>$tour->slug_url])}}"
                                                       rel="bookmark">{{$tour->translation()->first()->name}}</a>
                                                </h4></div>
                                            <span class="post_date">{{$tour->duration_day}} {{__('tour.days')}} {{$tour->duration_night}} {{__('tour.nights')}}</span>
                                            <p>
                                                {{App\Helper::get_words($tour->translation()->first()->short_description,20)}}
                                            </p>
                                        </div>
                                    </div>
                                    <div class="read_more">
                                        <div class="item_rating">
                                            @for ($i = 0; $i < $tour->rating; $i++)
                                                <i class="fa fa-star"></i>
                                            @endfor
                                            @for ($i = 0; $i < 5-$tour->rating; $i++)
                                                <i class="fa fa-star-o"></i>
                                            @endfor
                                        </div>
                                        <a href="single-tour.html"
                                           class="read_more_button">{{__('nhatnga_menu.view_more')}}
                                            <i class="fa fa-long-arrow-right"></i></a>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                            </div>
                        @endforeach


                    </div>
                </div>
            </div>
        </div>

        <div class="container two-column-respon mg-top-6x mg-bt-6x">
            <div class="row">
                <div class="col-sm-12 mg-btn-6x">
                    <div class="shortcode_title title-center title-decoration-bottom-center">
                        <h3 class="title_primary">{{__('home.nhatnga_reason')}}</h3><span
                                class="line_after_title"></span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="wpb_column col-sm-4">
                    <div class="widget-icon-box widget-icon-box-base iconbox-center">
                        <div class="box-icon icon-image circle">
                            <img src="{{URL::asset('images/price.png')}}" width="160" height="160" alt="">
                        </div>
                        <div class="content-inner">
                            <div class="sc-heading article_heading">
                                <h3 style="color:#000000"
                                    class="heading__primary">{{__('nhatnga.reasonable_price')}}</h3>
                            </div>
                            <div class="desc-icon-box">
                                <div>{{__('nhatnga.reasonable_price_text')}}</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wpb_column col-sm-4">
                    <div class="widget-icon-box widget-icon-box-base iconbox-center">
                        <div class="box-icon icon-image ">
                            <img src="{{URL::asset('images/fast_delivery.jpg')}}" width="160" height="160" alt="">
                        </div>
                        <div class="content-inner">
                            <div class="sc-heading article_heading">
                                <h3 style="color:#000000" class="heading__primary">{{__('nhatnga.prompt_service')}}</h3>
                            </div>
                            <div class="desc-icon-box">
                                <div> {{__('nhatnga.prompt_service_text')}}</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wpb_column col-sm-4">
                    <div class="widget-icon-box widget-icon-box-base iconbox-center">
                        <div class="box-icon icon-image ">
                            <img src="{{URL::asset('images/security.png')}}" width="160" height="160 alt="">
                        </div>
                        <div class="content-inner">
                            <div class="sc-heading article_heading">
                                <h3 style="color:#000000"
                                    class="heading__primary">{{__('nhatnga.prestige_guatrantee')}}</h3>
                            </div>
                            <div class="desc-icon-box">
                                <div>  {{__('nhatnga.prestige_guatrantee_text')}}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="padding-top-6x padding-bottom-6x bg__shadow section-background"
             style="background-image:url(images/home/bg-pallarax.jpg)">
            <div class="container">
                <div class="shortcode_title text-white title-center title-decoration-bottom-center">
                    <div class="title_subtitle">{{__('home.nhatnga_statistics')}}</div>
                    <h3 class="title_primary">{{__('home.nhatnga_achievements')}}</h3>
                    <span class="line_after_title" style="color:#ffffff"></span>
                </div>
                <div class="row  nhatnga-achievement">

                    <div class="col-md-15 col-sm-3">
                        <div class="stats_counter text-center text-white">
                            <div class="wrapper-icon">
                                <i class="fa fa-language"></i>
                            </div>
                            <div class="stats_counter_number">900</div>
                            <div class="stats_counter_title">{{__('nhatnga.translated_documents_every_month')}}</div>
                        </div>
                    </div>
                    <div class="col-md-15 col-sm-3 ">
                        <div class="stats_counter text-center text-white">
                            <div class="wrapper-icon">
                                <i class="fa fa-id-card"></i>
                            </div>
                            <div class="stats_counter_number">3150</div>
                            <div class="stats_counter_title">{{__('nhatnga.complete_visas')}}</div>
                        </div>
                    </div>
                    <div class="col-md-15 col-sm-3 ">
                        <div class="stats_counter text-center text-white">
                            <div class="wrapper-icon">
                                <i class="flaticon-airplane"></i>
                            </div>
                            <div class="stats_counter_number">1000</div>
                            <div class="stats_counter_title">{{__('nhatnga.air_tickets_every_year')}}</div>
                        </div>
                    </div>
                    <div class="col-md-15 col-sm-3 ">
                        <div class="stats_counter text-center text-white">
                            <div class="wrapper-icon">
                                <i class="fa fa-address-card"></i>
                            </div>
                            <div class="stats_counter_number">200</div>
                            <div class="stats_counter_title">{{__('nhatnga.complete_ABTC_CARD')}}</div>
                        </div>
                    </div>
                    <div class="col-md-15 col-sm-3 ">
                        <div class="stats_counter text-center text-white">
                            <div class="wrapper-icon">
                                <i class="flaticon-people"></i>
                            </div>
                            <div class="stats_counter_number">400</div>
                            <div class="stats_counter_title">{{__('nhatnga.complete_WORK_PERMITS')}}</div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        @if($tour_discount->count()>0)
            <div class="section-white padding-top-6x padding-bottom-6x">
                <div class="container">
                    <div class="shortcode_title title-center title-decoration-bottom-center">
                        <h3 class="title_primary">{{__('nhatnga.deals_and_discounts')}} </h3><span
                                class="line_after_title"></span>
                    </div>
                    <div class="row wrapper-tours-slider">
                        <div class="tours-type-slider list_content" data-dots="true" data-nav="true"
                             data-responsive='{"0":{"items":1}, "480":{"items":2}, "768":{"items":3}, "992":{"items":3}, "1200":{"items":3}}'>

                            @foreach($tour_discount as $tour)
                                <div class="item-tour">
                                    <div class="item_border">
                                        <div class="item_content">
                                            <div class="post_images">
                                                <a href="{{route('frontend.tour.detail',['slug'=>$tour->slug_url])}}"
                                                   class="travel_tour-LoopProduct-link">
											<span class="price">
												 @if($tour->is_sale)
                                                    <del>
                                                        <span class="travel_tour-Price-amount amount">{{App\Helper::get_format_money($tour->translation()->first()->adult_price,0)}}</span>
                                                    </del>
                                                    <ins>
                                                        <span class="travel_tour-Price-amount amount">
                                                            &nbsp; {{App\Helper::get_format_money($tour->translation()->first()->adult_price*(1-$tour->discount_percent/100),0)}}
                                                        </span>
                                                    </ins>
                                                @else
                                                    <span class="travel_tour-Price-amount amount">
                                                        {{App\Helper::get_format_money($tour->translation()->first()->adult_price,0)}}</span>
                                                @endif
											</span>
                                                    @php
                                                    $media_id =$tour->get_first_media_id($tour->media_ids);
                                                    @endphp
                                                    <img src="{!! route('media.get', ['id'=>$media_id,'resize'=>'430x305'])  !!}"
                                                         alt="" title="">
                                                </a>
                                            </div>
                                            <div class="wrapper_content">
                                                <div class="post_title"><h4>
                                                        <a href="{{route('frontend.tour.detail',['slug'=>$tour->slug_url])}}"
                                                           rel="bookmark">{{$tour->translation()->first()->name}}</a>
                                                    </h4></div>
                                                <span class="post_date">{{$tour->duration_day}} {{__('tour.days')}} {{$tour->duration_night}} {{__('tour.nights')}}</span>
                                                <p>
                                                    {{App\Helper::get_words($tour->translation()->first()->short_description,20)}}
                                                </p>
                                            </div>
                                        </div>
                                        <div class="read_more">
                                            <div class="item_rating">
                                                @for ($i = 0; $i < $tour->rating; $i++)
                                                    <i class="fa fa-star"></i>
                                                @endfor
                                                @for ($i = 0; $i < 5-$tour->rating; $i++)
                                                    <i class="fa fa-star-o"></i>
                                                @endfor
                                            </div>
                                            <a href="{{route('frontend.tour.detail',['slug'=>$tour->slug_url])}}"
                                               class="read_more_button">{{__('nhatnga_menu.view_more')}}
                                                <i class="fa fa-long-arrow-right"></i></a>
                                            <div class="clear"></div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        @endif


        <div class="section-white padding-top-6x padding-bottom-6x">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="shortcode_title title-center title-decoration-bottom-center">
                            <h2 class="title_primary">{{__('customer.customer_reivew')}}</h2>
                            <span class="line_after_title"></span>
                        </div>
                        <div class="shortcode-tour-reviews wrapper-tours-slider">
                            <div class="tours-type-slider" data-autoplay="true" data-dots="true" data-nav="false"
                                 data-responsive='{"0":{"items":1}, "480":{"items":1}, "768":{"items":1}, "992":{"items":1}, "1200":{"items":1}}'>

                                <div class="tour-reviews-item">
                                    <div class="reviews-item-info">
                                        <img alt="" src="{{URL::asset('images/avata/avartar2.png')}}"
                                             class="avatar avatar-95 photo"
                                             height="90" width="90">
                                        <div class="reviews-item-info-name">{{__('customer.cus_tuan_title')}}</div>
                                        <div class="reviews-item-rating">
                                            <i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                    class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                    class="fa fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="reviews-item-content">
                                        <h3 class="reviews-item-title">
                                            <a href="#">{{__('customer.cus_tuan_name')}}</a>
                                        </h3>
                                        <div class="reviews-item-description">
                                            {{__('customer.cus_tuan_note')}}
                                        </div>
                                    </div>
                                </div>


                                <div class="tour-reviews-item">
                                    <div class="reviews-item-info">
                                        <img alt="" src="{{URL::asset('images/avata/avartar3.png')}}"
                                             class="avatar avatar-95 photo"
                                             height="90" width="90">
                                        <div class="reviews-item-info-name">{{__('customer.cus_dao_title')}}</div>
                                        <div class="reviews-item-rating">
                                            <i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                    class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                    class="fa fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="reviews-item-content">
                                        <h3 class="reviews-item-title">
                                            <a href="#">{{__('customer.cus_dao_name')}}</a>
                                        </h3>
                                        <div class="reviews-item-description">
                                            {{__('customer.cus_dao_note')}}
                                        </div>
                                    </div>
                                </div>


                                <div class="tour-reviews-item">
                                    <div class="reviews-item-info">
                                        <img alt="" src="{{URL::asset('images/avata/avartar4.png')}}"
                                             class="avatar avatar-95 photo"
                                             height="90" width="90">
                                        <div class="reviews-item-info-name">{{__('customer.cus_hai_title')}}</div>
                                        <div class="reviews-item-rating">
                                            <i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                    class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                    class="fa fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="reviews-item-content">
                                        <h3 class="reviews-item-title">
                                            <a href="#">{{__('customer.cus_hai_name')}}</a>
                                        </h3>
                                        <div class="reviews-item-description">
                                            {{__('customer.cus_hai_note')}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="shortcode_title title-center title-decoration-bottom-center">
                            <h2 class="title_primary">{{__('home.latest_posts')}}</h2>
                            <span class="line_after_title"></span>
                        </div>
                        <div class="row">
                            @foreach($latest_news as $news)
                                <div class="post_list_content_unit col-sm-6">
                                    <div class="feature-image">
                                        <a href="{{route('frontend.news.detail',['slug'=>$news->slug_url])}}"
                                           class="entry-thumbnail">
                                            <img width="370" height="260"
                                                 src="{!! route('media.get', ['id'=>$news->media_ids,'resize'=>'370x260'])  !!}"
                                                 alt="">
                                        </a>
                                    </div>
                                    <div class="post-list-content">
                                        <div class="post_list_inner_content_unit">
                                            <h3 class="post_list_title">
                                                <a href="{{route('frontend.news.detail',['slug'=>$news->slug_url])}}"
                                                   rel="bookmark">{{App\Helper::get_words($news->translation()->first()->name)}}</a>
                                            </h3>
                                            <div class="wrapper-meta">
                                                <div class="date-time">{{$news->updated_at->format('d/m/Y')}}</div>
                                            </div>
                                            <div class="post_list_item_excerpt">{{App\Helper::get_words($news->translation()->first()->short_description)}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function () {
            jQuery(".wrapper-tours-slider").each(function () {

                var $this = jQuery(this),
                        owl = $this.find('.tours-type-slider');
                var config = owl.data();
                config.slidespeed = 1000;
                config.margin = 0;
                config.loop = true;
                config.navText = ['<i class="lnr lnr-chevron-left"></i>', '<i class="lnr lnr-chevron-right"></i>'];
                owl.owlCarousel(config);


            })
        });
    </script>
@stop