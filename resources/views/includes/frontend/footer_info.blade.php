<div class="wrapper-footer wrapper-footer-newsletter">
    <div class="main-top-footer">
        <div class="container">
            <div class="row">
                <aside class="col-sm-3 widget_text">
                    <div class="textwidget">
                        <div class="footer-info">
						 <img src="{{ URL::asset('images/logo_nhatnga.png') }}" class="img-responsive" alt="foot-logo" title="foot-logo">
                            <p></p>
                            <ul class="contact-info">
                                <li><i class="fa fa-map-marker fa-fw"></i> {{__('nhatnga.address')}}</li>
                                <li><i class="fa fa-phone fa-fw"></i> +84 8 62793318 - +84 8 66817653</li>
                                <li>
                                    <i class="fa fa-envelope fa-fw"></i><a href="mailto: info@nhatnga.com.vn">  info@nhatnga.com.vn</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </aside>
                <aside class="col-sm-3 widget_text"><h3 class="widget-title">INFORMATION</h3>
                    <div class="textwidget">
                        <ul class="menu list-arrow">
                            <li><a href="index.htm#">{{__('nhatnga_menu.domestic_tour')}}</a></li>
                            <li><a href="index.htm#">{{__('nhatnga_menu.international_tour')}}</a></li>
                            <li><a href="index.htm#">{{__('nhatnga_menu.long_travel')}}</a></li>
                            <li><a href="index.htm#">{{__('nhatnga_menu.short_travel')}}</a></li>
                            <li><a href="index.htm#">{{__('nhatnga_menu.food_travel')}}</a></li>
                        </ul>
                    </div>
                </aside>
                <aside class="col-sm-3 widget_text"><h3 class="widget-title">{{__('nhatnga_menu.our_menu')}}</h3>
                    <div class="textwidget">
                        <ul class="menu list-arrow">
                            <li><a href="{{route('frontend.home.index')}}">{{__('nhatnga_menu.home')}}</a></li>
                            <li><a href="{{route('frontend.services.apeccard')}}">{{__('nhatnga_menu.services_apeccard')}}</a></li>
                            <li><a href="{{route('frontend.services.workpermit')}}">{{__('nhatnga_menu.services_workpermit')}}</a></li>
                            <li><a href="{{route('frontend.services.translation')}}">{{__('nhatnga_menu.services_translation')}}</a></li>
                            <li><a href="{{route('frontend.home.contact')}}">{{__('nhatnga_menu.contact')}}</a></li>
                        </ul>
                    </div>
                </aside>
                <aside class="col-sm-3 custom-instagram widget_text">
                    <h3 class="widget-title">Instagram</h3>
                    <div class="textwidget">
                        <ul>
                            <li><img src="{{ URL::asset('images/instagram/1.jpg') }}" alt="instagram"></li>
                            <li><img src="{{ URL::asset('images/instagram/2.jpg') }}" alt="instagram"></li>
                            <li><img src="{{ URL::asset('images/instagram/3.jpg') }}" alt="instagram"></li>
                            <li><img src="{{ URL::asset('images/instagram/4.jpg') }}" alt="instagram"></li>
                            <li><img src="{{ URL::asset('images/instagram/5.jpg') }}" alt="instagram"></li>
                            <li><img src="{{ URL::asset('images/instagram/6.jpg') }}" alt="instagram"></li>
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