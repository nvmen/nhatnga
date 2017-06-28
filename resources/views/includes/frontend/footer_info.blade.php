<div class="wrapper-footer wrapper-footer-newsletter">
    <div class="main-top-footer">
        <div class="container">
            <div class="row">
                <aside class="col-sm-3 widget_text">
                    <div class="textwidget">
                        <div class="footer-info">
                            <img src="{{ URL::asset('images/logo_nhatnga.png') }}" class="img-responsive"
                                 alt="foot-logo" title="foot-logo">
                            <p></p>
                            <ul class="contact-info">
                                <li><i class="fa fa-map-marker fa-fw"></i> {{__('nhatnga.address')}}</li>
                                <li><i class="fa fa-phone fa-fw"></i> (+84) 28 6279 3318 - (+84) 28 66817653</li>
                                <li><i class="fa fa-map-marker fa-fw"></i>{{__('nhatnga.address_branch')}}</li>
                                <li><i class="fa fa-phone fa-fw"></i> +84 27 46544999</li>
                                <li>
                                    <i class="fa fa-envelope fa-fw"></i><a href="mailto: info@nhatnga.com.vn">
                                        info@nhatnga.com.vn</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </aside>
                <aside class="col-sm-3 widget_text"><h3
                            class="widget-title">{{__('nhatnga_menu.services_CONTACT')}}</h3>
                    <div class="textwidget">
                        <ul class="menu">
                            <li><a href="javascript:void(0)">
                                    <img  class="icon-app" src="{{URL::asset('images/avata/zalo-logo.png')}}"/>
                                    0919.345.788</a>
                            </li>
                            <li><a href="javascript:void(0)">
                                    <img class="icon-app" src="{{URL::asset('images/avata/viber-logo.png')}}"/>
                                    0919.345.788
                                </a>
                            </li>
                            <li><a href="javascript:void(0)">
                                    <img  class="icon-app" src="{{URL::asset('images/avata/whatsapp.png')}}"/>
                                    0919.345.788</a>
                            </li>
                            <li><a href="skype:nhatnga_company?chat">
                                    <img  class="icon-app" src="{{URL::asset('images/avata/skype-logo.png')}}"/>
                                    nhatnga_company
                                </a>
                            </li>

                        </ul>
                    </div>
                </aside>
                <aside class="col-sm-3 widget_text"><h3 class="widget-title">{{__('nhatnga_menu.footer_service')}}</h3>
                    <div class="textwidget">
                        <ul class="menu list-arrow">
                            <li><a href="{{route('frontend.services.visa')}}">{{__('nhatnga_menu.services_visa')}}</a>
                            </li>
                            <li>
                                <a href="{{route('frontend.services.apeccard')}}">{{__('nhatnga_menu.services_apeccard')}}</a>
                            </li>
                            <li>
                                <a href="{{route('frontend.services.workpermit')}}">{{__('nhatnga_menu.services_workpermit')}}</a>
                            </li>
                            <li>
                                <a href="{{route('frontend.services.translation')}}">{{__('nhatnga_menu.services_translation')}}</a>
                            </li>
                            <li>
                                <a href="{{route('frontend.services.airlineticket')}}">{{__('nhatnga_menu.services_airlineticket')}}</a>
                            </li>
                        </ul>
                    </div>
                </aside>

                <aside class="col-sm-3 widget_text"><h3 class="widget-title">{{__('nhatnga_menu.social_network')}}</h3>
                    <div class="textwidget">
                        <ul class="social-network social-circle">


                            <li><a href="#" title="Facebook">
                                    <span class="icoFacebook"><i class="fa fa-facebook"></i></span> Facebook
                                </a></li>
                            <li>
                                <a href="#" title="Youtube">
                                    <span class="icoYoutube"><i class="fa fa-youtube"></i></span> Youtube
                                </a>
                            </li>
                            <li>
                                <a href="#" title="Twitter">
                                    <span class="icoTwitter"><i class="fa fa-twitter"></i></span> Twitter
                                </a>
                            </li>


                        </ul>
                    </div>
                </aside>

            </div>
        </div>
    </div>
    <div class="container wrapper-copyright">
        <div class="row">
            <div class="col-sm-6">
                <div><p>Copyright © 2017 Travel. All Rights Reserved.</p></div>
            </div>
            <div class="col-sm-6">
                <aside id="text-5" class="widget_text">
                    <div class="textwidget">
                        <ul class="footer_menu">
                        </ul>
                    </div>
                </aside>
            </div>
        </div>
    </div>
</div>

<script>
    $(function(){
        $('.slide-out-div').tabSlideOut({
            tabHandle: '.handle',                     //class of the element that will become your tab
            pathToTabImage: 'images/contact_tab.gif', //path to the image for the tab //Optionally can be set using css
            imageHeight: '122px',                     //height of tab image           //Optionally can be set using css
            imageWidth: '40px',                       //width of tab image            //Optionally can be set using css
            tabLocation: 'left',                      //side of screen where tab lives, top, right, bottom, or left
            speed: 300,                               //speed of animation
            action: 'click',                          //options: 'click' or 'hover', action to trigger animation
            topPos: '200px',                          //position from the top/ use if tabLocation is left or right
            leftPos: '20px',                          //position from left/ use if tabLocation is bottom or top
            fixedPosition: false                      //options: true makes it stick(fixed position) on scroll
        });

    });

</script>