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
                        <h3 class="title_primary"> {{__('nhatnga.popular_services')}}</h3><span class="line_after_title"></span>
                    </div>
                </div>
            </div>
            <div class="row padding-menu">
                <div class="wpb_column col-sm-4">
                    <div class="widget-icon-box widget-icon-box-base iconbox-center">
                        <div class="boxes-icon circle"
                             style="font-size:30px;width:80px; height:80px;line-height:80px">
                                <span class="inner-icon"><i
                                            class="fa fa-plane"></i></span>
                        </div>
                        <div class="content-inner">
                            <div class="sc-heading article_heading">
                                <h4 class="heading__primary">Tours</h4></div>
                            <div class="desc-icon-box">
                                <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wpb_column col-sm-4">
                    <div class="widget-icon-box widget-icon-box-base iconbox-center">
                        <div class="boxes-icon " style="font-size:30px;width:80px; height:80px;line-height:80px">
                            <span class="inner-icon"><i class="fa fa-id-card-o"></i></span>
                        </div>
                        <div class="content-inner">
                            <div class="sc-heading article_heading">
                                <h4 class="heading__primary">VISA</h4></div>
                            <div class="desc-icon-box">
                                <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</div>
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
                                <h4 class="heading__primary">Dịch thuật - Công chứng</h4></div>
                            <div class="desc-icon-box">
                                <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</div>
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
                            <span class="inner-icon"><i class="vc_icon_element-icon flaticon-travelling"></i></span>
                        </div>
                        <div class="content-inner">
                            <div class="sc-heading article_heading">
                                <h4 class="heading__primary">GP lao động - Thẻ tạm trú </h4></div>
                            <div class="desc-icon-box">
                                <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wpb_column col-sm-4">
                    <div class="widget-icon-box widget-icon-box-base iconbox-center">
                        <div class="boxes-icon circle"
                             style="font-size:30px;width:80px; height:80px;line-height:80px">
                                <span class="inner-icon"><i
                                            class="vc_icon_element-icon flaticon-transport-6"></i></span>
                        </div>
                        <div class="content-inner">
                            <div class="sc-heading article_heading">
                                <h4 class="heading__primary">Thẻ doanh nhân APEC</h4></div>
                            <div class="desc-icon-box">
                                <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wpb_column col-sm-4">
                    <div class="widget-icon-box widget-icon-box-base iconbox-center">
                        <div class="boxes-icon " style="font-size:30px;width:80px; height:80px;line-height:80px">
                            <span class="inner-icon"><i class="vc_icon_element-icon flaticon-sand"></i></span>
                        </div>
                        <div class="content-inner">
                            <div class="sc-heading article_heading">
                                <h4 class="heading__primary">Dịch thuật - Công chứng</h4></div>
                            <div class="desc-icon-box">
                                <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="wpb_column col-sm-4">
                    <div class="widget-icon-box widget-icon-box-base iconbox-center">
                        <div class="boxes-icon " style="font-size:30px;width:80px; height:80px;line-height:80px">
                            <span class="inner-icon"><i class="vc_icon_element-icon flaticon-travel-2"></i></span>
                        </div>
                        <div class="content-inner">
                            <div class="sc-heading article_heading">
                                <h4 class="heading__primary">Bán vé máy bay</h4></div>
                            <div class="desc-icon-box">
                                <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wpb_column col-sm-4">
                    <div class="widget-icon-box widget-icon-box-base iconbox-center">
                        <div class="boxes-icon circle"
                             style="font-size:30px;width:80px; height:80px;line-height:80px">
                            <span class="inner-icon"><i class="vc_icon_element-icon flaticon-travelling"></i></span>
                        </div>
                        <div class="content-inner">
                            <div class="sc-heading article_heading">
                                <h4 class="heading__primary">Các dịch vụ khác </h4></div>
                            <div class="desc-icon-box">
                                <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wpb_column col-sm-4">
                    <div class="widget-icon-box widget-icon-box-base iconbox-center">
                        <div class="boxes-icon circle"
                             style="font-size:30px;width:80px; height:80px;line-height:80px">
                                <span class="inner-icon"><i
                                            class="vc_icon_element-icon flaticon-transport-6"></i></span>
                        </div>
                        <div class="content-inner">
                            <div class="sc-heading article_heading">
                                <h4 class="heading__primary">Thẻ doanh nhân APEC</h4></div>
                            <div class="desc-icon-box">
                                <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</div>
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
                         data-responsive='{"0":{"items":1}, "480":{"items":2}, "768":{"items":2}, "992":{"items":3}, "1200":{"items":4}}'>
                        <div class="item-tour">
                            <div class="item_border">
                                <div class="item_content">
                                    <div class="post_images">
                                        <a href="single-tour.html" class="travel_tour-LoopProduct-link">
											<span class="price"><del>
                                                    <span class="travel_tour-Price-amount amount">$87.00</span></del>
												<ins><span class="travel_tour-Price-amount amount">$82.00</span></ins>
											</span>
                                            <span class="onsale">Sale!</span>
                                            <img src="images/tour/430x305/tour-1.jpg" alt="" title="">
                                        </a>
                                        <div class="group-icon">
                                            <a href="index.htm#" data-toggle="tooltip" data-placement="top" title=""
                                               class="frist" data-original-title="River Cruise"><i
                                                        class="flaticon-transport-2"></i></a>
                                            <a href="index.htm#" data-toggle="tooltip" data-placement="top" title=""
                                               data-original-title="Wildlife"><i class="flaticon-island"></i></a>
                                        </div>
                                    </div>
                                    <div class="wrapper_content">
                                        <div class="post_title"><h4>
                                                <a href="single-tour.html" rel="bookmark">Kiwiana Panorama</a>
                                            </h4></div>
                                        <span class="post_date">5 DAYS 4 NIGHTS</span>
                                        <p>Aliquam lacus nisl, viverra convallis sit amet&nbsp;penatibus nunc&nbsp;luctus</p>
                                    </div>
                                </div>
                                <div class="read_more">
                                    <div class="item_rating">
                                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                class="fa fa-star"></i>
                                    </div>
                                    <a href="single-tour.html" class="read_more_button">VIEW MORE
                                        <i class="fa fa-long-arrow-right"></i></a>
                                    <div class="clear"></div>
                                </div>
                            </div>
                        </div>
                        <div class="item-tour">
                            <div class="item_border">
                                <div class="item_content">
                                    <div class="post_images">
                                        <a href="single-tour.html" class="travel_tour-LoopProduct-link">
											<span class="price">
												<span class="travel_tour-Price-amount amount">$82.00</span>
											</span>
                                            <img src="images/tour/430x305/tour-2.jpg" alt="" title="">
                                        </a>
                                        <div class="group-icon">
                                            <a href="index.htm#" data-toggle="tooltip" data-placement="top" title=""
                                               class="frist" data-original-title="River Cruise"><i
                                                        class="flaticon-transport-2"></i></a>
                                            <a href="index.htm#" data-toggle="tooltip" data-placement="top" title=""
                                               data-original-title="Wildlife"><i class="flaticon-island"></i></a>
                                        </div>
                                    </div>
                                    <div class="wrapper_content">
                                        <div class="post_title"><h4>
                                                <a href="single-tour.html" rel="bookmark">Camping Americas West</a>
                                            </h4></div>
                                        <span class="post_date">5 DAYS 4 NIGHTS</span>
                                        <p>Aliquam lacus nisl, viverra convallis sit amet&nbsp;penatibus nunc&nbsp;luctus</p>
                                    </div>
                                </div>
                                <div class="read_more">
                                    <div class="item_rating">
                                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                class="fa fa-star"></i>
                                    </div>
                                    <a href="single-tour.html" class="read_more_button">VIEW MORE
                                        <i class="fa fa-long-arrow-right"></i></a>
                                    <div class="clear"></div>
                                </div>
                            </div>
                        </div>
                        <div class="item-tour">
                            <div class="item_border">
                                <div class="item_content">
                                    <div class="post_images">
                                        <a href="single-tour.html" class="travel_tour-LoopProduct-link">
											<span class="price">
												<span class="travel_tour-Price-amount amount">$89.00</span>
											</span>
                                            <img src="images/tour/430x305/tour-3.jpg" alt="" title="">
                                        </a>
                                        <div class="group-icon">
                                            <a href="index.htm#" data-toggle="tooltip" data-placement="top" title=""
                                               class="frist" data-original-title="River Cruise"><i
                                                        class="flaticon-transport-2"></i></a>
                                            <a href="index.htm#" data-toggle="tooltip" data-placement="top" title=""
                                               data-original-title="Wildlife"><i class="flaticon-island"></i></a>
                                        </div>
                                    </div>
                                    <div class="wrapper_content">
                                        <div class="post_title"><h4>
                                                <a href="single-tour.html" rel="bookmark">Anchorage to Santiago</a>
                                            </h4></div>
                                        <span class="post_date">5 DAYS 4 NIGHTS</span>
                                        <p>Aliquam lacus nisl, viverra convallis sit amet&nbsp;penatibus nunc&nbsp;luctus</p>
                                    </div>
                                </div>
                                <div class="read_more">
                                    <div class="item_rating">
                                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                class="fa fa-star"></i>
                                    </div>
                                    <a href="single-tour.html" class="read_more_button">VIEW MORE
                                        <i class="fa fa-long-arrow-right"></i></a>
                                    <div class="clear"></div>
                                </div>
                            </div>
                        </div>
                        <div class="item-tour">
                            <div class="item_border">
                                <div class="item_content">
                                    <div class="post_images">
                                        <a href="single-tour.html" class="travel_tour-LoopProduct-link">
											<span class="price">
												<span class="travel_tour-Price-amount amount">90.00</span>
 											</span>
                                            <img src="images/tour/430x305/tour-4.jpg" alt="" title="">
                                        </a>
                                        <div class="group-icon">
                                            <a href="index.htm#" data-toggle="tooltip" data-placement="top" title=""
                                               class="frist" data-original-title="River Cruise"><i
                                                        class="flaticon-transport-2"></i></a>
                                            <a href="index.htm#" data-toggle="tooltip" data-placement="top" title=""
                                               data-original-title="Wildlife"><i class="flaticon-island"></i></a>
                                        </div>
                                    </div>
                                    <div class="wrapper_content">
                                        <div class="post_title"><h4>
                                                <a href="single-tour.html" rel="bookmark">Anchorage to Ushuaia</a>
                                            </h4></div>
                                        <span class="post_date">5 DAYS 4 NIGHTS</span>
                                        <p>Aliquam lacus nisl, viverra convallis sit amet&nbsp;penatibus nunc&nbsp;luctus</p>
                                    </div>
                                </div>
                                <div class="read_more">
                                    <div class="item_rating">
                                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                class="fa fa-star"></i>
                                    </div>
                                    <a href="single-tour.html" class="read_more_button">VIEW MORE
                                        <i class="fa fa-long-arrow-right"></i></a>
                                    <div class="clear"></div>
                                </div>
                            </div>
                        </div>
                        <div class="item-tour">
                            <div class="item_border">
                                <div class="item_content">
                                    <div class="post_images">
                                        <a href="single-tour.html" class="travel_tour-LoopProduct-link">
											<span class="price">
												<span class="travel_tour-Price-amount amount">$94.00</span>
											</span>
                                            <img src="images/tour/430x305/tour-5.jpg" alt="" title="">
                                        </a>
                                        <div class="group-icon">
                                            <a href="index.htm#" data-toggle="tooltip" data-placement="top" title=""
                                               class="frist" data-original-title="River Cruise"><i
                                                        class="flaticon-transport-2"></i></a>
                                            <a href="index.htm#" data-toggle="tooltip" data-placement="top" title=""
                                               data-original-title="Wildlife"><i class="flaticon-island"></i></a>
                                        </div>
                                    </div>
                                    <div class="wrapper_content">
                                        <div class="post_title"><h4>
                                                <a href="single-tour.html" rel="bookmark">Discover Brazil</a>
                                            </h4></div>
                                        <span class="post_date">5 DAYS 4 NIGHTS</span>
                                        <p>Aliquam lacus nisl, viverra convallis sit amet&nbsp;penatibus nunc&nbsp;luctus</p>
                                    </div>
                                </div>
                                <div class="read_more">
                                    <div class="item_rating">
                                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                class="fa fa-star"></i>
                                    </div>
                                    <a href="single-tour.html" class="read_more_button">VIEW MORE
                                        <i class="fa fa-long-arrow-right"></i></a>
                                    <div class="clear"></div>
                                </div>
                            </div>
                        </div>
                        <div class="item-tour">
                            <div class="item_border">
                                <div class="item_content">
                                    <div class="post_images">
                                        <a href="single-tour.html" class="travel_tour-LoopProduct-link">
											<span class="price">
												<span class="travel_tour-Price-amount amount">$91.00</span>
											</span>
                                            <img src="images/tour/430x305/tour-6.jpg" alt="" title="">
                                        </a>
                                        <div class="group-icon">
                                            <a href="index.htm#" data-toggle="tooltip" data-placement="top" title=""
                                               class="frist" data-original-title="River Cruise"><i
                                                        class="flaticon-transport-2"></i></a>
                                            <a href="index.htm#" data-toggle="tooltip" data-placement="top" title=""
                                               data-original-title="Wildlife"><i class="flaticon-island"></i></a>
                                        </div>
                                    </div>
                                    <div class="wrapper_content">
                                        <div class="post_title"><h4>
                                                <a href="single-tour.html" rel="bookmark">Cuzco to Anchorage</a>
                                            </h4></div>
                                        <span class="post_date">5 DAYS 4 NIGHTS</span>
                                        <p>Aliquam lacus nisl, viverra convallis sit amet&nbsp;penatibus nunc&nbsp;luctus</p>
                                    </div>
                                </div>
                                <div class="read_more">
                                    <div class="item_rating">
                                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                class="fa fa-star"></i>
                                    </div>
                                    <a href="single-tour.html" class="read_more_button">VIEW MORE
                                        <i class="fa fa-long-arrow-right"></i></a>
                                    <div class="clear"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container two-column-respon mg-top-6x mg-bt-6x">
            <div class="row">
                <div class="col-sm-12 mg-btn-6x">
                    <div class="shortcode_title title-center title-decoration-bottom-center">
                        <h3 class="title_primary">WHY CHOOSE US?</h3><span class="line_after_title"></span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="wpb_column col-sm-4">
                    <div class="widget-icon-box widget-icon-box-base iconbox-center">
                        <div class="box-icon icon-image circle">
                            <img src="images/home/Map-Marker.png" alt="">
                        </div>
                        <div class="content-inner">
                            <div class="sc-heading article_heading">
                                <h3 style="color:#000000" class="heading__primary">Handpicked Hotels</h3>
                            </div>
                            <div class="desc-icon-box">
                                <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wpb_column col-sm-4">
                    <div class="widget-icon-box widget-icon-box-base iconbox-center">
                        <div class="box-icon icon-image ">
                            <img src="images/home/Worldwide-Location.png" alt="">
                        </div>
                        <div class="content-inner">
                            <div class="sc-heading article_heading">
                                <h3 style="color:#000000" class="heading__primary">World Class Service</h3>
                            </div>
                            <div class="desc-icon-box">
                                <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wpb_column col-sm-4">
                    <div class="widget-icon-box widget-icon-box-base iconbox-center">
                        <div class="box-icon icon-image ">
                            <img src="images/home/Hot-Air-Balloon.png" alt="">
                        </div>
                        <div class="content-inner">
                            <div class="sc-heading article_heading">
                                <h3 style="color:#000000" class="heading__primary">Best Price Guarantee</h3>
                            </div>
                            <div class="desc-icon-box">
                                <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</div>
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
                    <div class="title_subtitle">Some statistics about  Nhat Nga Company</div>
                    <h3 class="title_primary">CENTER ACHIEVEMENTS</h3>
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

        <div class="section-white padding-top-6x padding-bottom-6x">
            <div class="container">
                <div class="shortcode_title title-center title-decoration-bottom-center">
                    <h3 class="title_primary">{{__('nhatnga.deals_and_discounts')}}</h3><span class="line_after_title"></span>
                </div>
                <div class="row wrapper-tours-slider">
                    <div class="tours-type-slider list_content" data-dots="true" data-nav="true"
                         data-responsive='{"0":{"items":1}, "480":{"items":2}, "768":{"items":3}, "992":{"items":3}, "1200":{"items":3}}'>
                        <div class="item-tour">
                            <div class="item_border">
                                <div class="item_content">
                                    <div class="post_images">
                                        <a href="single-tour.html" class="travel_tour-LoopProduct-link">
											<span class="price">
												<span class="travel_tour-Price-amount amount">$89.00</span>
											</span>
                                            <img src="images/tour/430x305/tour-3.jpg" alt="" title="">
                                        </a>
                                        <div class="group-icon">
                                            <a href="index.htm#" data-toggle="tooltip" data-placement="top" title=""
                                               class="frist" data-original-title="River Cruise"><i
                                                        class="flaticon-transport-2"></i></a>
                                            <a href="index.htm#" data-toggle="tooltip" data-placement="top" title=""
                                               data-original-title="Wildlife"><i class="flaticon-island"></i></a>
                                        </div>
                                    </div>
                                    <div class="wrapper_content">
                                        <div class="post_title"><h4>
                                                <a href="single-tour.html" rel="bookmark">Anchorage to Santiago</a>
                                            </h4></div>
                                        <span class="post_date">5 DAYS 4 NIGHTS</span>
                                        <p>Aliquam lacus nisl, viverra convallis sit amet&nbsp;penatibus nunc&nbsp;luctus</p>
                                    </div>
                                </div>
                                <div class="read_more">
                                    <div class="item_rating">
                                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                class="fa fa-star"></i>
                                    </div>
                                    <a href="single-tour.html" class="read_more_button">VIEW MORE
                                        <i class="fa fa-long-arrow-right"></i></a>
                                    <div class="clear"></div>
                                </div>
                            </div>
                        </div>
                        <div class="item-tour">
                            <div class="item_border">
                                <div class="item_content">
                                    <div class="post_images">
                                        <a href="single-tour.html" class="travel_tour-LoopProduct-link">
											<span class="price">
												<span class="travel_tour-Price-amount amount">90.00</span>
 											</span>
                                            <img src="images/tour/430x305/tour-4.jpg" alt="" title="">
                                        </a>
                                        <div class="group-icon">
                                            <a href="index.htm#" data-toggle="tooltip" data-placement="top" title=""
                                               class="frist" data-original-title="River Cruise"><i
                                                        class="flaticon-transport-2"></i></a>
                                            <a href="index.htm#" data-toggle="tooltip" data-placement="top" title=""
                                               data-original-title="Wildlife"><i class="flaticon-island"></i></a>
                                        </div>
                                    </div>
                                    <div class="wrapper_content">
                                        <div class="post_title"><h4>
                                                <a href="single-tour.html" rel="bookmark">Anchorage to Ushuaia</a>
                                            </h4></div>
                                        <span class="post_date">5 DAYS 4 NIGHTS</span>
                                        <p>Aliquam lacus nisl, viverra convallis sit amet&nbsp;penatibus nunc&nbsp;luctus</p>
                                    </div>
                                </div>
                                <div class="read_more">
                                    <div class="item_rating">
                                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                class="fa fa-star"></i>
                                    </div>
                                    <a href="single-tour.html" class="read_more_button">VIEW MORE
                                        <i class="fa fa-long-arrow-right"></i></a>
                                    <div class="clear"></div>
                                </div>
                            </div>
                        </div>
                        <div class="item-tour">
                            <div class="item_border">
                                <div class="item_content">
                                    <div class="post_images">
                                        <a href="single-tour.html" class="travel_tour-LoopProduct-link">
											<span class="price">
												<span class="travel_tour-Price-amount amount">$94.00</span>
											</span>
                                            <img src="images/tour/430x305/tour-5.jpg" alt="" title="">
                                        </a>
                                        <div class="group-icon">
                                            <a href="index.htm#" data-toggle="tooltip" data-placement="top" title=""
                                               class="frist" data-original-title="River Cruise"><i
                                                        class="flaticon-transport-2"></i></a>
                                            <a href="index.htm#" data-toggle="tooltip" data-placement="top" title=""
                                               data-original-title="Wildlife"><i class="flaticon-island"></i></a>
                                        </div>
                                    </div>
                                    <div class="wrapper_content">
                                        <div class="post_title"><h4>
                                                <a href="single-tour.html" rel="bookmark">Discover Brazil</a>
                                            </h4></div>
                                        <span class="post_date">5 DAYS 4 NIGHTS</span>
                                        <p>Aliquam lacus nisl, viverra convallis sit amet&nbsp;penatibus nunc&nbsp;luctus</p>
                                    </div>
                                </div>
                                <div class="read_more">
                                    <div class="item_rating">
                                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                class="fa fa-star"></i>
                                    </div>
                                    <a href="single-tour.html" class="read_more_button">VIEW MORE
                                        <i class="fa fa-long-arrow-right"></i></a>
                                    <div class="clear"></div>
                                </div>
                            </div>
                        </div>
                        <div class="item-tour">
                            <div class="item_border">
                                <div class="item_content">
                                    <div class="post_images">
                                        <a href="single-tour.html" class="travel_tour-LoopProduct-link">
											<span class="price"><del>
                                                    <span class="travel_tour-Price-amount amount">$87.00</span></del>
												<ins><span class="travel_tour-Price-amount amount">$82.00</span></ins>
											</span>
                                            <span class="onsale">Sale!</span>
                                            <img src="images/tour/430x305/tour-1.jpg" alt="" title="">
                                        </a>
                                        <div class="group-icon">
                                            <a href="index.htm#" data-toggle="tooltip" data-placement="top" title=""
                                               class="frist" data-original-title="River Cruise"><i
                                                        class="flaticon-transport-2"></i></a>
                                            <a href="index.htm#" data-toggle="tooltip" data-placement="top" title=""
                                               data-original-title="Wildlife"><i class="flaticon-island"></i></a>
                                        </div>
                                    </div>
                                    <div class="wrapper_content">
                                        <div class="post_title"><h4>
                                                <a href="single-tour.html" rel="bookmark">Kiwiana Panorama</a>
                                            </h4></div>
                                        <span class="post_date">5 DAYS 4 NIGHTS</span>
                                        <p>Aliquam lacus nisl, viverra convallis sit amet&nbsp;penatibus nunc&nbsp;luctus</p>
                                    </div>
                                </div>
                                <div class="read_more">
                                    <div class="item_rating">
                                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                class="fa fa-star"></i>
                                    </div>
                                    <a href="single-tour.html" class="read_more_button">VIEW MORE
                                        <i class="fa fa-long-arrow-right"></i></a>
                                    <div class="clear"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



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
                                        <img alt="" src="images/avata/avartar2.png" class="avatar avatar-95 photo"
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
                                        <img alt="" src="images/avata/avartar3.png" class="avatar avatar-95 photo"
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
                                        <img alt="" src="images/avata/avartar4.png" class="avatar avatar-95 photo"
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
                                            <a href="index.htm#">{{__('customer.cus_hai_name')}}</a>
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
                            <h2 class="title_primary">Latest Post</h2>
                            <span class="line_after_title"></span>
                        </div>
                        <div class="row">
                            <div class="post_list_content_unit col-sm-6">
                                <div class="feature-image">
                                    <a href="index.htm#" class="entry-thumbnail">
                                        <img width="370" height="260" src="images/blog/201H.jpg" alt="">
                                    </a>
                                </div>
                                <div class="post-list-content">
                                    <div class="post_list_inner_content_unit">
                                        <h3 class="post_list_title">
                                            <a href="single.html" rel="bookmark">Love advice from experts</a>
                                        </h3>
                                        <div class="wrapper-meta">
                                            <div class="date-time">September 6, 2016</div>
                                            <div class="post_list_cats">
                                                <a href="index.htm#" rel="category tag">Technology</a>
                                            </div>
                                        </div>
                                        <div class="post_list_item_excerpt">Lorem ipsum dolor sit amet, consectetur
                                            adipiscing elit. Nam efficitur
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="post_list_content_unit col-sm-6">
                                <div class="feature-image">
                                    <a href="index.htm#" class="entry-thumbnail">
                                        <img width="370" height="260" src="images/blog/86H.jpg" alt="">
                                    </a>
                                </div>
                                <div class="post-list-content">
                                    <div class="post_list_inner_content_unit">
                                        <h3 class="post_list_title">
                                            <a href="single.html" rel="bookmark">The perfect summer body</a>
                                        </h3>
                                        <div class="wrapper-meta">
                                            <div class="date-time">September 6, 2016</div>
                                            <div class="post_list_cats">
                                                <a href="index.htm#" rel="category tag">Technology</a>
                                            </div>
                                        </div>
                                        <div class="post_list_item_excerpt">Lorem ipsum dolor sit amet, consectetur
                                            adipiscing elit. Nam efficitur
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop