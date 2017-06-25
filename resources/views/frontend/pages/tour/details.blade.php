@extends('layouts.frontend')
@section('pageTitle', $tour->translation()->first()->name)
@section('content')
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.0/css/bootstrap-datepicker3.min.css"
          type="text/css" media="all">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.0/js/bootstrap-datepicker.min.js"></script>
    <link rel="stylesheet" href="{{ URL::asset('assets/sweetalert/sweetalert.css') }}" type="text/css" media="all">
    <script type='text/javascript' src=' {{ URL::asset('assets/sweetalert/sweetalert.min.js') }}'></script>

    <div class="single-product travel_tour-page travel_tour">
        <div class="top_site_main" style="background-image:url({{ URL::asset('images/banner/top-heading.jpg') }});">
            <div class="banner-wrapper container article_heading">
                <div class="breadcrumbs-wrapper">
                    <ul class="phys-breadcrumb">
                        <li><a href="{{route('frontend.home.index')}}" class="home">Home</a></li>
                        <li><a href="{{route('frontend.tour.index')}}">Tour</a></li>
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
                                    <h1>{{$tour->translation()->first()->name}}</h1>
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
-->
                                <div class="tour-share ">
                                   <span class="price">
                                                  @if($tour->is_sale)
                                           <del>
                                                        <span class="travel_tour-Price-amount amount ">
                                                            {{App\Helper::get_format_money($tour->translation()->first()->adult_price,0)}}
                                                        </span>
                                           </del>
                                           <ins>
                                                        <span class="travel_tour-Price-amount amount detail-tour">
                                                            &nbsp;{{App\Helper::get_format_money($tour->translation()->first()->adult_price*(1-$tour->discount_percent/100),0)}}
                                                        </span>
                                           </ins>
                                       @else
                                           <span class="travel_tour-Price-amount amount detail-tour">
                                                        {{App\Helper::get_format_money($tour->translation()->first()->adult_price,0)}}</span>
                                       @endif
											</span>
                                </div>

                            </div>
                            <div id="slider" class="flexslider">

                                @php
                                $list_medias = App\Helper::get_list_media_info($tour->media_ids,'950x700');
                                @endphp
                                <ul class="slides">
                                    @foreach($list_medias as $media)
                                        <li>
                                            <a href="{{  $media['link']}}" class="swipebox" title="">
                                                <img width="950" height="700"
                                                     src=" {{ $media['link'] }}"

                                                     class="attachment-shop_single size-shop_single wp-post-image"
                                                     alt=""
                                                     title="" draggable="false"></a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                            <div id="carousel" class="flexslider thumbnail_product">
                                @php
                                $list_medias = App\Helper::get_list_media_info($tour->media_ids,'150x100');
                                @endphp
                                <ul class="slides">

                                    @foreach($list_medias as $media)

                                        <li>
                                            <img width="150" height="100"
                                                 src="{{ $media['link'] }}"
                                                 class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image"
                                                 alt=""
                                                 title="" draggable="false">
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="clear"></div>
                            <div class="single-tour-tabs wc-tabs-wrapper">
                                <ul class="tabs wc-tabs" role="tablist">
                                    <li class="description_tab active" role="presentation">
                                        <a href="index.htm#tab-description" role="tab"
                                           data-toggle="tab">{{__('tour.description')}}</a>
                                    </li>
                                    <li class="itinerary_tab_tab" role="presentation">
                                        <a href="index.htm#tab-itinerary_tab" role="tab"
                                           data-toggle="tab">{{__('tour.itinerary')}}</a>
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
                                <h2>{{__('tour.related_tours')}}</h2>
                                <ul class="tours products wrapper-tours-slider">

                                    @foreach($related_tours as $tour)
                                        <li class="item-tour col-md-4 col-sm-6 product">
                                            <div class="item_border item-product">
                                                <div class="post_images">
                                                    <a href="{{route('frontend.tour.detail',['slug'=>$tour->slug_url])}}">
                                                    <span class="price">
                                                        {{App\Helper::get_format_money($tour->translation()->first()->adult_price,0)}}
                                                    </span>
                                                        @php
                                                        $media_id =$tour->get_first_media_id($tour->media_ids);
                                                        @endphp
                                                        <img src="{!! route('media.get', ['id'=>$media_id,'resize'=>'430x305'])  !!}"
                                                             alt="" title="">
                                                    </a>

                                                </div>
                                                <div class="wrapper_content">
                                                    <div class="post_title"><h4 class="title-tour">
                                                            <a href="{{route('frontend.tour.detail',['slug'=>$tour->slug_url])}}"
                                                               rel="bookmark">
                                                                {{$tour->translation()->first()->name}}
                                                            </a>
                                                        </h4></div>
                                                    <span class="post_date">{{$tour->duration_day}} {{__('tour.days')}} {{$tour->duration_night}} {{__('tour.nights')}}</span>
                                                    <div class="description content-des-tour-item">
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
                                                    <a rel="nofollow" href="{{route('frontend.tour.detail',['slug'=>$tour->slug_url])}}"
                                                       class="button product_type_tour_phys add_to_cart_button">
                                                        {{__('nhatnga_menu.view_more')}}
                                                    </a>
                                                </div>
                                            </div>
                                        </li>

                                    @endforeach

                                </ul>
                            </div>
                        </div>
                        <div class="summary entry-summary description_single">
                            <div class="affix-sidebar">
                                <div class="entry-content-tour">
                                    <p class="price">
                                        <span class="text">{{__('tour.price')}}:</span><span
                                                class="travel_tour-Price-amount amount"> {{App\Helper::get_format_money($tour->translation()->first()->adult_price,0)}}</span>
                                    </p>
                                    <div class="clear"></div>
                                    <div class="booking">
                                        <div class="">
                                            <div class="form-block__title">
                                                <h4>{{__('tour.book_the_tour')}}</h4>
                                            </div>
                                            <form id="tourBookingForm" method="POST" action="">
                                                <div class="">
                                                    <input name="first_name" id="first_name" value=""
                                                           placeholder="{{__('tour.first_name')}}"
                                                           type="text">
                                                </div>
                                                <div class="">
                                                    <input name="last_name" id="last_name" value=""
                                                           placeholder="{{__('tour.last_name')}}"
                                                           type="text">
                                                </div>
                                                <div class="">
                                                    <input name="email_tour" id="email_tour" value=""
                                                           placeholder="Email" type="text">
                                                </div>
                                                <div class="">
                                                    <input name="phone" name="tour_phone" id="tour_phone" value=""
                                                           placeholder="{{__('tour.phone')}}"
                                                           type="text">
                                                </div>
                                                <div class="">
                                                    <input type="text" name="date_book" id="date_book" value=""
                                                           placeholder="{{__('tour.date_book')}}"
                                                           class="hasDatepicker">
                                                </div>
                                                <div class="from-group">
                                                    <div class="total_price_arrow">
                                                        <div class="st_adults_children" style="margin-bottom: 5px">
                                                            <span class="label"
                                                                  style="min-width: 71px;">{{__('tour.adults')}}</span>
                                                            <div class="input-number-ticket">
                                                                <input type="number" id="number_ticket_adults"
                                                                       name="number_ticket_adults" value="1"
                                                                       min="1" max="20">
                                                            </div>
                                                            ×
                                                            <span class="price_adults">
                                                                {{App\Helper::get_format_money(($tour->translation()->first()->adult_price)*(1-$tour->discount_percent/100),0)}}</span>

                                                        </div>
                                                        <div class="st_adults_children">
                                                            <span class="label"
                                                                  style="min-width: 71px;">{{__('tour.children')}}</span>
                                                            <div class="input-number-ticket">
                                                                <input type="number" name="number_children"
                                                                       id="number_children" value="0"
                                                                       min="0" max="20">
                                                                <input type="hidden" name="price_child"
                                                                       value="{{($tour->translation()->first()->children_price)*(1-$tour->discount_percent/100)}}">
                                                                <input type="hidden" name="price_adult"
                                                                       value="{{($tour->translation()->first()->adult_price)*(1-$tour->discount_percent/100)}}">
                                                            </div>
                                                            ×
                                                            <span class="price_children"> {{App\Helper::get_format_money(($tour->translation()->first()->children_price)*(1-$tour->discount_percent/100),0)}}</span>

                                                        </div>
                                                        <div>
                                                            {{__('tour.total')}} =
                                                            <span class="total_price_adults_children">

                                                            </span>
                                                        </div>
                                                        <input type="hidden" name="price_children_percent" value="70">
                                                    </div>
                                                </div>
                                                <div class="spinner" id="spinner-book">
                                                    <div class="rect1"></div>
                                                    <div class="rect2"></div>
                                                    <div class="rect3"></div>
                                                    <div class="rect4"></div>
                                                    <div class="rect5"></div>
                                                </div>
                                                <input class="btn-booking btn" value="{{__('tour.booking_now')}}"
                                                       type="submit">
                                            </form>
                                        </div>
                                    </div>
                                    <div class="form-block__title custom-form-title"><h4>{{__('tour.or')}}</h4></div>
                                    <div class="custom_from">
                                        <div role="form" class="wpcf7" lang="en-US" dir="ltr">
                                            <div class="screen-reader-response"></div>
                                            <form action="" method="post" class="wpcf7-form" id="contact-form"
                                                  novalidate="novalidate">

                                                <p>{{__('tour.send_message_reason')}}</p>
                                                <p>
													<span class="wpcf7-form-control-wrap your-name">
														<input type="text" name="your-name" id="your-name" value=""
                                                               size="40"
                                                               class="wpcf7-form-control" aria-invalid="false"
                                                               placeholder="{{__('tour.your_name')}}">
													</span>
                                                </p>
                                                <p>
													<span class="wpcf7-form-control-wrap your-email">
														<input type="email" name="your-email" id="your-email" value=""
                                                               size="40"
                                                               class="wpcf7-form-control" aria-invalid="false"
                                                               placeholder="Email*">
													</span>
                                                </p>
                                                <p>
													<span class="wpcf7-form-control-wrap your-phone">
														<input type="text" name="your-phone" id="your-phone" value=""
                                                               size="40"
                                                               class="wpcf7-form-control" aria-invalid="false"
                                                               placeholder="Phone">
													</span>
                                                </p>
                                                <p>
													<span class="wpcf7-form-control-wrap your-message">
														<textarea name="your-message" id="your-message" cols="40"
                                                                  rows="10"
                                                                  class="wpcf7-form-control" aria-invalid="false"
                                                                  placeholder="{{__('tour.message')}}"></textarea>
													</span>
                                                </p>
                                                <p>
                                                    <input type="button" onclick="send_enquiry()"
                                                           value="{{__('tour.send_enquiry')}}"
                                                           class="wpcf7-form-control wpcf7-submit" style="width: 100%;"><span
                                                            class="ajax-loader"></span>
                                                </p>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-area align-left col-sm-3">
                                    <aside class="widget widget_travel_tour">
                                        <div class="wrapper-special-tours">
                                            @include('includes.frontend.right_random_tour')
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
    <script>
        function validateEmail(email) {
            var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            return re.test(email);
        }
        function send_enquiry() {

            var your_name = $('#your-name').val();
            if (your_name.trim() == '') {
                $('#your-name').addClass("error");
                return;
            }
            var your_email = $('#your-email').val();
            if (your_email.trim() == '') {
                $('#your-email').addClass("error");
                return;
            }
            if (!validateEmail(your_email)) {
                $('#your-email').val('');
                $('#your-email').addClass("error");
                return;
            }
            var your_phone = $('#your-phone').val();
            var your_message = $('#your-message').val();
            var token = '{{ csrf_token() }}';
            var obj = {
                _token: token,
                name: your_name,
                email: your_email,
                phone: your_phone,
                message: your_message

            }
            show_spinner();
            $.post('{{route('frontend.tour.enquiry')}}', obj)
                    .done(function (data) {
                        hide_spinner();
                        if (data.success == true) {
                            //  $.notify("Delete successful", "success");
                            hide_spinner();
                            $.notify(data.message, "success");
                            $('#contact-form')[0].reset();
                        } else {
                            $.notify(data.message, "error")

                            hide_spinner();
                        }
                    })
                    .fail(function () {
                        hide_spinner();
                    });

        }
        var total_money = 0;
        var number_adults = 0;
        var number_children = 0;
        var price_adult = parseFloat({{($tour->translation()->first()->adult_price)*(1-$tour->discount_percent/100)}});
        var price_child = parseFloat({{($tour->translation()->first()->children_price)*(1-$tour->discount_percent/100)}});
        function numberWithCommas(x) {
            return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        }
        function caculate_total() {

            let currency = '{{($tour->translation()->first()->currency_unit)}}';
            var number_ticket_adults = parseInt($('#number_ticket_adults').val());
            var children = parseInt($('#number_children').val());
            number_adults = number_ticket_adults;
            number_children = children;

            let total = price_adult * number_ticket_adults + price_child * children;
            total_money = Math.round(total);
            let dis = numberWithCommas(total_money);
            if ('$' == currency) {
                $('.total_price_adults_children').html('$' + dis);
            } else {
                $('.total_price_adults_children').html(dis + currency);
            }
        }
        $('#date_book').datepicker().on('changeDate', function (ev) {
            $(this).datepicker('hide');
        });
        $(document).ready(function () {

            caculate_total();
            $("#number_ticket_adults").change(function () {
                caculate_total();
            });
            $("#number_children").change(function () {
                caculate_total();
            });
            $("#tourBookingForm").submit(function () {

                var val = $("input[type=submit][clicked=true]").val();

                var first_name = $("#first_name").val();
                var last_name = $("#last_name").val();
                var email_tour = $("#email_tour").val();
                var tour_phone = $("#tour_phone").val();
                var date_book = $("#date_book").val();
                $('#product_view').modal({backdrop: 'static', keyboard: false})
                if (first_name.trim().length == 0) {
                    $('#first_name').val('');
                    $('#first_name').addClass("error");
                    return false;
                }
                if (last_name.trim().length == 0) {
                    $('#last_name').val('');
                    $('#last_name').addClass("error");
                    return false;
                }
                if (!validateEmail(email_tour)) {
                    $('#email_tour').val('');
                    $('#email_tour').addClass("error");
                    return false;
                }


                $('#spinner-book').css("display", "block");

                var token = '{{ csrf_token() }}';
                var tour_code = '{{$tour->code}}';
                var tour_id = '{{$tour->id}}';
                var obj = {
                    tour_code: tour_code,
                    id:tour_id,
                    _token: token,
                    first_name: first_name,
                    last_name: last_name,
                    email_tour: email_tour,
                    tour_phone: tour_phone,
                    date_book: date_book,
                    total_money: total_money,
                    number_adults: number_adults,
                    number_children: number_children
                }
                $.post('{{route('frontend.tour.booking')}}', obj)
                        .done(function (data) {
                            hide_spinner();
                            if (data.success == true) {
                                $('#spinner-book').css("display", "none");
                                 swal("{{__('messages.thanks')}}" , "{{__('messages.thanks_message')}}", "success")
                            } else {
                                $('#spinner-book').css("display", "none");
                            }
                        })
                        .fail(function () {
                            $('#spinner-book').css("display", "none");
                            swal("{{__('messages.error')}}" , "{{__('messages.error_message')}}", "error")
                        });
                    //frontend.tour.booking
                return false;


            });
            $("form input[type=submit]").click(function () {
                $("input[type=submit]", $(this).parents("form")).removeAttr("clicked");
                $(this).attr("clicked", "true");
            });
        });
    </script>
@stop