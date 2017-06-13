@extends('layouts.frontend')
@section('pageTitle',__('nhatnga_menu.contact'))
@section('content')
    <link rel="stylesheet" href="{{ URL::asset('assets/sweetalert/sweetalert.css') }}" type="text/css" media="all">
    <script type='text/javascript' src=' {{ URL::asset('assets/sweetalert/sweetalert.min.js') }}'></script>
    <div class="top_site_main" style="background-image:url({{ URL::asset('images/banner/top-heading.jpg') }} );">
        <div class="banner-wrapper container article_heading">
            <div class="breadcrumbs-wrapper">
                <ul class="phys-breadcrumb">
                    <li><a href="{{route('frontend.home.index')}}" class="home">Home</a></li>
                    <li>{{__('nhatnga_menu.contact')}}</li>
                </ul>
            </div>
            <h1 class="heading_primary">{{__('nhatnga_menu.contact')}}</h1></div>
    </div>
    <section class="content-area">
        <div class="container">
            <div class="row">
                <div class="site-main col-sm-9 alignleft">
                    <div class="video-container">
                        <div id="map_canvas"></div>
                    </div>
                    <div class="pages_content padding-top-4x">
                        <h4>{{__('nhatnga.company_name')}}</h4>
                        <div class="contact_infor">
                            <ul>
                                <li><label><i class="fa fa-map-marker"></i>{{__('contact.address')}}</label>
                                    <div class="des">{{__('nhatnga.address')}}</div>
                                </li>
                                <li><label><i class="fa fa-phone"></i>{{__('contact.tel_no')}}</label>
                                    <div class="des">+84 8 62648240</div>
                                </li>
                                <li><label><i class="fa fa-print"></i>{{__('contact.hot_line')}}</label>
                                    <div class="des">0919.345.788</div>
                                </li>
                                <li><label><i class="fa fa-envelope"></i>{{__('contact.email')}}</label>
                                    <div class="des">info@nhatnga.com.vn</div>
                                </li>
                                <li>
                                    <label><i class="fa fa-clock-o"></i>{{__('contact.working_hour')}}</label>
                                    <div class="des">{{__('contact.monday')}} – {{__('contact.friday')}} 8:00 am – 5:30
                                        pm, {{__('contact.saturday')}} 8:00 am – 1:00 pm
                                        <br>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="wpb_wrapper pages_content">
                        <h4>Have a question?</h4>
                        <div role="form" class="wpcf7">
                            <div class="screen-reader-response"></div>
                            <form action="{{route('frontend.home.contact.submit_contact')}}"  id="contact-form" method="post"
                                  class="wpcf7-form" novalidate="novalidate">
                                <div class="form-contact">
                                    <div class="row-1x">
                                        <div class="col-sm-6">
													<span class="wpcf7-form-control-wrap your-name">
														<input type="text" name="name" id="name" value=""
                                                               size="40" class="wpcf7-form-control"
                                                               placeholder="{{__('contact.your_name')}}*">
													</span>
                                        </div>
                                        <div class="col-sm-6">
													<span class="wpcf7-form-control-wrap your-email">
														<input type="email" name="email" id="email" value="" size="40"
                                                               class="wpcf7-form-control" placeholder="Email*">
													</span>
                                        </div>
                                    </div>
                                    <div class="form-contact-fields">
												<span class="wpcf7-form-control-wrap your-subject">
													<input type="text" name="subject" id="subject" value="" size="40"
                                                           class="wpcf7-form-control"
                                                           placeholder="{{__('contact.subject')}}">
												</span>
                                    </div>
                                    <div class="form-contact-fields">
											<span class="wpcf7-form-control-wrap your-message">
												<textarea name="message" id="message" cols="40" rows="10"
                                                          class="wpcf7-form-control wpcf7-textarea"
                                                          placeholder="{{__('contact.message')}}"></textarea>
												 </span><br>
                                        <p style="color: red;font-weight: 600" id="show-error"></p>
                                        <br>

                                    </div>
                                    <div class="form-contact-fields">
                                        <input type="button" onclick="send_message()" value="{{__('contact.submit')}}"
                                               class="wpcf7-form-control wpcf7-submit">


                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="widget-area col-sm-3 align-left">
                    <aside class="widget widget_text">
                        <img src="{{ URL::asset('images/images-sidebar/sidebanner-ticketing.jpg') }}" alt="">
                    </aside>
                    <aside class="widget widget_text">
                        <img src="{{ URL::asset('images/images-sidebar/sidebanner-tour.png') }}" alt="">
                    </aside>
                    <aside class="widget widget_text">
                        <img src="{{ URL::asset('images/images-sidebar/hertz-sidebanner.jpg') }}" alt="">
                    </aside>
                </div>
            </div>
        </div>
    </section>

    <script>


        function send_message() {
            var token = '{{ csrf_token() }}';
            var name = $('#name').val();
            var email = $('#email').val();
            var subject = $('#subject').val();
            var message = $('#message').val();

            var obj = {_token: token, name: name, email: email, subject: subject, message: message};
            if (validateEmail(email) && name.trim().length > 0) {
                show_spinner();
                $('#show-error').html('');
                $.post('{{route('frontend.home.contact.submit_contact')}}', obj)
                        .done(function (data) {
                            hide_spinner();
                            $('#contact-form')[0].reset();
                            if (data.success == true) {
                                setTimeout(function(){
                                    swal({
                                        title: "",
                                        text: data.message,
                                        timer: 4000,
                                        type: "success",
                                        showConfirmButton: false
                                    });
                                }, 1000);


                            } else {
                                swal({
                                    title: "",
                                    text: data.message,
                                    timer: 3000,
                                    showConfirmButton: false,
                                    type: "error",

                                });
                                hide_spinner();
                            }
                        })
                        .fail(function () {
                            hide_spinner();
                        });

            } else {
                $('#show-error').html('{{__('contact.error_contact')}}')
            }

        }
        var url = '{{route('frontend.home.contact.submit_contact')}}';

        var maplication = '10.7809113, 106.6110463';
        function initMap() {
            var map = new google.maps.Map(document.getElementById('map_canvas'), {
                zoom: 18,
                center: {lat: 10.753188, lng: 106.666549}
            });

            setMarkers(map);
        }
        var beaches = [
            ['Bondi Beach', 10.753188, 106.666549, 1],
        ];

        function setMarkers(map) {
            var image = {
                url: '{{URL::asset('images/pin.png')}}',
                // This marker is 20 pixels wide by 32 pixels high.
                size: new google.maps.Size(195, 100),
                // The origin for this image is (0, 0).
                origin: new google.maps.Point(0, 0),
                // The anchor for this image is the base of the flagpole at (0, 32).
                anchor: new google.maps.Point(0, 32)
            };

            var shape = {
                coords: [1, 1, 1, 20, 18, 20, 18, 1],
                type: 'poly'
            };
            for (var i = 0; i < beaches.length; i++) {
                var beach = beaches[i];
                var marker = new google.maps.Marker({
                    position: {lat: beach[1], lng: beach[2]},
                    map: map,
                    icon: image,
                    shape: shape,
                    title: beach[0],
                    zIndex: beach[3]
                });
            }
        }
    </script>
    <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBuxOD_zlHu2D4aaa3fNycKgVUf-S1eAGQ&callback=initMap">
    </script>

@stop
