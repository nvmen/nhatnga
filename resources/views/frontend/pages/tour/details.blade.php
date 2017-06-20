@extends('layouts.frontend')
@section('pageTitle', 'Services')
@section('content')
    <div class="single-product travel_tour-page travel_tour">
        <div class="top_site_main" style="background-image:url({{ URL::asset('images/banner/top-heading.jpg') }});">
            <div class="banner-wrapper container article_heading">
                <div class="breadcrumbs-wrapper">
                    <ul class="phys-breadcrumb">
                        <li><a href="index.html" class="home">Home</a></li>
                        <li><a href="blog.html">Tour</a></li>
                        <li>{{$tour->translation()->first()->name}}</li>
                    </ul>
                </div>
                <h2 class="heading_primary">{{$tour->translation()->first()->name}}</h2></div>
        </div>
        <section class="content-area single-woo-tour">
            <div class="container">
                <div class="tb_single_tour product">
                    <div class="top_content_single row">
                        <div class="images images_single_left">
                            <div class="title-single">
                                <div class="title">
                                    <h1>{{$tour->translation()->first()->name}}l</h1>
                                </div>
                                <div class="tour_code">
                                    <strong>Code: </strong>{{strtoupper ($tour->first()->code)}}
                                </div>
                            </div>
                            <div class="tour_after_title">
                                <div class="meta_date">
                                    <span>{{$tour->duration_day}} {{__('tour.days')}}
                                        @if($tour->duration_night>0)
                                            {{$tour->duration_night}} {{__('tour.nights')}}
                                        @endif
                                    </span>
                                </div>
                                <!--
                                <div class="meta_values">

                                    <span>Category:</span>
                                    <div class="value">
                                        <a href="tours.html" rel="tag">Escorted Tour</a>,
                                        <a href="tours.html" rel="tag">Rail Tour</a>
                                    </div>

                                </div>

                                <div class="tour-share">
                                    <ul class="share-social">
                                        <li>
                                            <a target="_blank" class="facebook" href="#"><i
                                                        class="fa fa-facebook"></i></a>
                                        </li>

                                        <li>
                                            <a target="_blank" class="googleplus" href="#"><i
                                                        class="fa fa-google"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                  -->
                            </div>
                            <div id="slider" class="flexslider">
                                <ul class="slides">
                                    <li>
                                        <a href="#" class="swipebox" title="">
                                            <img width="950" height="700"
                                                 src=" {{ URL::asset('images/tour/tour-1.jpg') }}"

                                                 class="attachment-shop_single size-shop_single wp-post-image" alt=""
                                                 title="" draggable="false"></a>
                                    </li>
                                    <li>
                                        <a href="#" class="swipebox" title="">
                                            <img width="950" height="700"
                                                 src=" {{ URL::asset('images/tour/tour-2.jpg') }}"
                                                 class="attachment-shop_single size-shop_single wp-post-image" alt=""
                                                 title="" draggable="false"></a>
                                    </li>
                                    <li>
                                        <a href="#" class="swipebox" title="">
                                            <img width="950" height="700"
                                                 src=" {{ URL::asset('images/tour/tour-3.jpg') }}"
                                                 class="attachment-shop_single size-shop_single wp-post-image" alt=""
                                                 title="" draggable="false"></a>
                                    </li>
                                    <li>
                                        <a href="images/tour/tour-4.jpg" class="swipebox" title="">
                                            <img width="950" height="700"
                                                 src=" {{ URL::asset('images/tour/tour-4.jpg') }}"
                                                 class="attachment-shop_single size-shop_single wp-post-image" alt=""
                                                 title="" draggable="false"></a>
                                    </li>
                                    <li>
                                        <a href="images/tour/tour-5.jpg" class="swipebox" title="">
                                            <img width="950" height="700"
                                                 src=" {{ URL::asset('images/tour/tour-5.jpg') }}"
                                                 class="attachment-shop_single size-shop_single wp-post-image" alt=""
                                                 title="" draggable="false"></a>
                                    </li>
                                    <li>
                                        <a href="images/tour/tour-6.jpg" class="swipebox" title="">
                                            <img width="950" height="700"
                                                 src=" {{ URL::asset('images/tour/tour-6.jpg') }}"
                                                 class="attachment-shop_single size-shop_single wp-post-image" alt=""
                                                 title="" draggable="false"></a>
                                    </li>
                                </ul>
                            </div>
                            <div id="carousel" class="flexslider thumbnail_product">
                                <ul class="slides">
                                    <li>
                                        <img width="150" height="100"
                                             src=" {{ URL::asset('images/tour/tour-1.jpg') }}"
                                             class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt=""
                                             title="" draggable="false">
                                    </li>
                                    <li>
                                        <img width="150" height="100"
                                             src=" {{ URL::asset('images/tour/tour-2.jpg') }}"
                                             class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt=""
                                             title="" draggable="false">
                                    </li>
                                    <li>
                                        <img width="150" height="100"
                                             src=" {{ URL::asset('images/tour/tour-3.jpg') }}"
                                             class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt=""
                                             title="" draggable="false">
                                    </li>
                                    <li>
                                        <img width="150" height="100"
                                             src=" {{ URL::asset('images/tour/tour-4.jpg') }}"
                                             class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt=""
                                             title="" draggable="false">
                                    </li>
                                    <li>
                                        <img width="150" height="100"
                                             src=" {{ URL::asset('images/tour/tour-5.jpg') }}"
                                             class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt=""
                                             title="" draggable="false">
                                    </li>
                                    <li>
                                        <img width="150" height="100"
                                             src=" {{ URL::asset('images/tour/tour-6.jpg') }}"
                                             class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt=""
                                             title="" draggable="false">
                                    </li>
                                </ul>
                            </div>
                            <div class="clear"></div>
                            <div class="single-tour-tabs wc-tabs-wrapper">
                                <ul class="tabs wc-tabs" role="tablist">
                                    <li class="description_tab active" role="presentation">
                                        <a href="index.htm#tab-description" role="tab" data-toggle="tab">Description</a>
                                    </li>
                                    <li class="itinerary_tab_tab" role="presentation">
                                        <a href="index.htm#tab-itinerary_tab" role="tab" data-toggle="tab">Itinerary</a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div role="tabpanel"
                                         class="tab-pane single-tour-tabs-panel single-tour-tabs-panel--description panel entry-content wc-tab active"
                                         id="tab-description">
                                        {!!$tour->translation()->first()->description  !!}
                                    </div>
                                    <div role="tabpanel"
                                         class="tab-pane single-tour-tabs-panel single-tour-tabs-panel--itinerary_tab panel entry-content wc-tab"
                                         id="tab-itinerary_tab">
                                        {!!$tour->translation()->first()->itinerary  !!}
                                    </div>
                                </div>
                            </div>
                            <div class="related tours">
                                <h2>Related Tours</h2>
                                <ul class="tours products wrapper-tours-slider">
                                    <li class="item-tour col-md-4 col-sm-6 product">
                                        <div class="item_border item-product">
                                            <div class="post_images">
                                                <a href="single-tour.html">
                                                    <span class="price">$93.00</span>
                                                    <img width="430" height="305"
                                                         src="{{URL::asset('images/tour/430x305/tour-1.jpg')}}"
                                                         alt="Discover Brazil" title="Discover Brazil">
                                                </a>
                                                <div class="group-icon">
                                                    <a href="tours.html" data-toggle="tooltip" data-placement="top"
                                                       title="" class="frist" data-original-title="Escorted Tour"><i
                                                                class="flaticon-airplane-4"></i></a>
                                                    <a href="tours.html" data-toggle="tooltip" data-placement="top"
                                                       title="" data-original-title="Rail Tour"><i
                                                                class="flaticon-cart-1"></i></a>
                                                </div>
                                            </div>
                                            <div class="wrapper_content">
                                                <div class="post_title"><h4>
                                                        <a href="single-tour.html" rel="bookmark">Discover Brazil</a>
                                                    </h4></div>
                                                <span class="post_date">5 DAYS 4 NIGHTS</span>
                                                <div class="description">
                                                    <p>Aliquam lacus nisl, viverra convallis sit amet&nbsp;penatibus
                                                        nunc&nbsp;luctus</p>
                                                </div>
                                            </div>
                                            <div class="read_more">
                                                <div class="item_rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </div>
                                                <a rel="nofollow" href="single-tour.html"
                                                   class="button product_type_tour_phys add_to_cart_button">Read
                                                    more</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="item-tour col-md-4 col-sm-6 product">
                                        <div class="item_border item-product">
                                            <div class="post_images">
                                                <a href="single-tour.html">
											<span class="price"><del>$87.00</del>
												<ins>$82.00</ins>
											</span>
                                                    <span class="onsale">Sale!</span>
                                                    <img width="430" height="305"
                                                         src="{{URL::asset('images/tour/430x305/tour-2.jpg')}}"
                                                         alt="Discover Brazil" title="Discover Brazil">
                                                </a>
                                                <div class="group-icon">
                                                    <a href="tours.html" data-toggle="tooltip" data-placement="top"
                                                       title="" class="frist" data-original-title="River Cruise"><i
                                                                class="flaticon-transport-2"></i></a>
                                                    <a href="tours.html" data-toggle="tooltip" data-placement="top"
                                                       title="" data-original-title="Wildlife"><i
                                                                class="flaticon-island"></i></a>
                                                </div>
                                            </div>
                                            <div class="wrapper_content">
                                                <div class="post_title"><h4>
                                                        <a href="single-tour.html" rel="bookmark">Kiwiana Panorama</a>
                                                    </h4></div>
                                                <span class="post_date">5 DAYS 4 NIGHTS</span>
                                                <div class="description">
                                                    <p>Aliquam lacus nisl, viverra convallis sit amet&nbsp;penatibus
                                                        nunc&nbsp;luctus</p>
                                                </div>
                                            </div>
                                            <div class="read_more">
                                                <div class="item_rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </div>
                                                <a rel="nofollow" href="single-tour.html"
                                                   class="button product_type_tour_phys add_to_cart_button">Read
                                                    more</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="item-tour col-md-4 col-sm-6 product">
                                        <div class="item_border item-product">
                                            <div class="post_images">
                                                <a href="single-tour.html">
                                                    <span class="price">$64.00</span>
                                                    <img width="430" height="305"
                                                         src="{{URL::asset('images/tour/430x305/tour-3.jpg')}}"
                                                         alt="Discover Brazil" title="Discover Brazil">
                                                </a>
                                                <div class="group-icon">
                                                    <a href="tours.html" data-toggle="tooltip" data-placement="top"
                                                       title="" class="frist" data-original-title="Escorted Tour"><i
                                                                class="flaticon-airplane-4"></i></a>
                                                    <a href="tours.html" data-toggle="tooltip" data-placement="top"
                                                       title="" data-original-title="River Cruise"><i
                                                                class="flaticon-transport-2"></i></a>
                                                </div>
                                            </div>
                                            <div class="wrapper_content">
                                                <div class="post_title"><h4>
                                                        <a href="single-tour.html" rel="bookmark">Anchorage to Quito</a>
                                                    </h4></div>
                                                <span class="post_date">5 DAYS 4 NIGHTS</span>
                                                <div class="description">
                                                    <p>Aliquam lacus nisl, viverra convallis sit amet&nbsp;penatibus
                                                        nunc&nbsp;luctus</p>
                                                </div>
                                            </div>
                                            <div class="read_more">
                                                <div class="item_rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </div>
                                                <a rel="nofollow" href="single-tour.html"
                                                   class="button product_type_tour_phys add_to_cart_button">Read
                                                    more</a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="summary entry-summary description_single">
                            <div class="affix-sidebar">
                                <div class="entry-content-tour">
                                    <p class="price">
                                        <span class="text">{{__('tour.price')}}:</span><span class="travel_tour-Price-amount amount">$93.00</span>
                                    </p>
                                    <div class="clear"></div>
                                    <div class="booking">
                                        <div class="">
                                            <div class="form-block__title">
                                                <h4>{{__('tour.book_the_tour')}}</h4>
                                            </div>
                                            <form id="tourBookingForm" method="POST" action="index.htm#">
                                                <div class="">
                                                    <input name="first_name" value="" placeholder="{{__('tour.first_name')}}"
                                                           type="text">
                                                </div>
                                                <div class="">
                                                    <input name="last_name" value="" placeholder="{{__('tour.last_name')}}"
                                                           type="text">
                                                </div>
                                                <div class="">
                                                    <input name="email_tour" value="" placeholder="Email" type="text">
                                                </div>
                                                <div class="">
                                                    <input name="phone" value="" placeholder="{{__('tour.phone')}}" type="text">
                                                </div>
                                                <div class="">
                                                    <input type="text" name="date_book" value="" placeholder="{{__('tour.date_book')}}"
                                                           class="hasDatepicker">
                                                </div>
                                                <div class="from-group">
                                                    <div class="total_price_arrow">
                                                        <div class="st_adults_children">
                                                            <span class="label">{{__('tour.adults')}}</span>
                                                            <div class="input-number-ticket">
                                                                <input type="number" name="number_ticket" value="1"
                                                                       min="1" max="10"
                                                                       placeholder="Number ticket of Adults">
                                                            </div>
                                                            ×
                                                            $<span class="price_adults">93</span>
                                                            =
                                                            <span class="total_price_adults">$93</span>
                                                        </div>
                                                        <div class="st_adults_children">
                                                            <span class="label">{{__('tour.children')}}</span>
                                                            <div class="input-number-ticket">
                                                                <input type="number" name="number_children" value="0"
                                                                       min="0" max="10"
                                                                       placeholder="Number ticket of Children">
                                                                <input type="hidden" name="price_child" value="65.1">
                                                                <input type="hidden" name="price_child_set_on_tour"
                                                                       value="0">
                                                            </div>
                                                            ×
                                                            $<span class="price_children">65.1</span>
                                                            =
                                                            <span class="total_price_children">0</span>
                                                        </div>
                                                        <div>
                                                            {{__('tour.total')}} =
                                                            <span class="total_price_adults_children">$93</span>
                                                        </div>
                                                        <input type="hidden" name="price_children_percent" value="70">
                                                    </div>
                                                </div>
                                                <div class="spinner">
                                                    <div class="rect1"></div>
                                                    <div class="rect2"></div>
                                                    <div class="rect3"></div>
                                                    <div class="rect4"></div>
                                                    <div class="rect5"></div>
                                                </div>
                                                <input class="btn-booking btn" value="Booking now" type="submit">
                                            </form>
                                        </div>
                                    </div>
                                    <div class="form-block__title custom-form-title"><h4>Or</h4></div>
                                    <div class="custom_from">
                                        <div role="form" class="wpcf7" lang="en-US" dir="ltr">
                                            <div class="screen-reader-response"></div>
                                            <form action="index.htm#" method="post" class="wpcf7-form"
                                                  novalidate="novalidate">

                                                <p>Fill up the form below to tell us what you're looking for</p>
                                                <p>
													<span class="wpcf7-form-control-wrap your-name">
														<input type="text" name="your-name" value="" size="40"
                                                               class="wpcf7-form-control" aria-invalid="false"
                                                               placeholder="Your name*">
													</span>
                                                </p>
                                                <p>
													<span class="wpcf7-form-control-wrap your-email">
														<input type="email" name="your-email" value="" size="40"
                                                               class="wpcf7-form-control" aria-invalid="false"
                                                               placeholder="Email*">
													</span>
                                                </p>
                                                <p>
													<span class="wpcf7-form-control-wrap your-message">
														<textarea name="your-message" cols="40" rows="10"
                                                                  class="wpcf7-form-control" aria-invalid="false"
                                                                  placeholder="Message"></textarea>
													</span>
                                                </p>
                                                <p>
                                                    <input type="submit" value="Send Enquiry"
                                                           class="wpcf7-form-control wpcf7-submit"><span
                                                            class="ajax-loader"></span>
                                                </p>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-area align-left col-sm-3">
                                    <aside class="widget widget_travel_tour">
                                        <div class="wrapper-special-tours">
                                            <div class="inner-special-tours">
                                                <a href="single-tour.html">
                                                    <img width="430" height="305"
                                                         src="{{URL::asset('images/tour/430x305/tour-1.jpg')}}"
                                                         alt="Discover Brazil" title="Discover Brazil"></a>
                                                <div class="item_rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </div>
                                                <div class="post_title"><h3>
                                                        <a href="single-tour.html" rel="bookmark">Discover Brazil</a>
                                                    </h3></div>
                                                <div class="item_price">
                                                    <span class="price">$93.00</span>
                                                </div>
                                            </div>
                                            <div class="inner-special-tours">
                                                <a href="single-tour.html">
                                                    <span class="onsale">Sale!</span>
                                                    <img width="430" height="305"
                                                         src="{{URL::asset('images/tour/430x305/tour-2.jpg')}}"
                                                         alt="Discover Brazil" title="Discover Brazil"></a>
                                                <div class="item_rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </div>
                                                <div class="post_title"><h3>
                                                        <a href="single-tour.html" rel="bookmark">Kiwiana Panorama</a>
                                                    </h3></div>
                                                <div class="item_price">
										<span class="price"><del>$87.00</del>
										<ins>$82.00</ins></span>
                                                </div>
                                            </div>
                                            <div class="inner-special-tours">
                                                <a href="single-tour.html">
                                                    <img width="430" height="305"
                                                         src="{{URL::asset('images/tour/430x305/tour-3.jpg')}}"
                                                         alt="Discover Brazil" title="Discover Brazil">
                                                </a>
                                                <div class="item_rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </div>
                                                <div class="post_title"><h3>
                                                        <a href="single-tour.html" rel="bookmark">Anchorage to Quito</a>
                                                    </h3></div>
                                                <div class="item_price">
                                                    <span class="price">$64.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </aside>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>

@stop