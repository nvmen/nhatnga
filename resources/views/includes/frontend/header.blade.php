<header id="masthead" class="site-header sticky_header affix-top">
    <div class="header_top_bar">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <aside id="text-15" class="widget_text">
                        <!--
                        <div class="textwidget">
                            <ul class="top_bar_info clearfix">
                                <li><i class="fa fa-clock-o"></i> Mon - Sat 8.00 - 18.00. Sunday CLOSED</li>

                            </ul>
                        </div>
                        -->
                    </aside>
                </div>
                <div class="col-sm-8 topbar-right">
                    <aside id="text-7" class="widget widget_text">
                        <div class="textwidget">
                            <ul class="top_bar_info clearfix">
                                <li><i class="fa fa-phone"></i>  +84 650 6544 999</li>
                                <li class="hidden-info">
                                    <i class="fa fa-map-marker"></i> 1010 Moon ave, New York, NY US
                                </li>
                            </ul>
                        </div>
                    </aside>
                    <aside id="travel_login_register_from-2" class="widget widget_login_form">
                        <span class="show_from login"><i class="fa fa-user"></i>Login</span>

                        <div class="form_popup from_login" tabindex="-1">
                            <div class="inner-form">
                                <div class="closeicon"></div>
                                <h3>Login</h3>
                                <form name="loginform" id="loginform" action="index.htm#" method="post">
                                    <p class="login-username">
                                        <label for="user_login">Username or Email Address</label>
                                        <input type="text" name="log" id="user_login" class="input" value=""
                                               size="20">
                                    </p>
                                    <p class="login-password">
                                        <label for="user_pass">Password</label>
                                        <input type="password" name="pwd" id="user_pass" class="input" value=""
                                               size="20">
                                    </p>
                                    <p class="login-remember">
                                        <label><input name="rememberme" type="checkbox" id="rememberme"
                                                      value="forever"> Remember Me</label>
                                    </p>
                                    <p class="login-submit">
                                        <input type="submit" name="wp-submit" id="wp-submit"
                                               class="button button-primary" value="Log In">
                                        <input type="hidden" name="redirect_to" value="">
                                    </p>
                                </form>
                                <a href="index.htm#" title="Lost your password?" class="lost-pass">Lost your
                                    password?</a>
                            </div>
                        </div>
                        <span class="register_btn">Register</span>
                        <div class="form_popup from_register" tabindex="-1">
                            <div class="inner-form">
                                <div class="closeicon"></div>
                                <h3>Register</h3>
                                <form method="post" class="register">
                                    <p class="form-row">
                                        <label for="reg_username">Username <span class="required">*</span></label>
                                        <input type="text" class="input" name="username" id="reg_username" value=""
                                               autocomplete="off">
                                    </p>
                                    <p class="form-row">
                                        <label for="reg_email">Email address <span class="required">*</span></label>
                                        <input type="email" class="input" name="email" id="reg_email" value="">
                                    </p>
                                    <p class="form-row">
                                        <label for="reg_password">Password <span class="required">*</span></label>
                                        <input type="password" class="input" name="password" id="reg_password">
                                    </p>
                                    <div style="left: -999em; position: absolute;">
                                        <label for="trap">Anti-spam</label><input type="text" name="email_2"
                                                                                  id="trap" tabindex="-1"
                                                                                  autocomplete="off">
                                    </div>
                                    <p class="form-row">
                                        <input type="submit" class="button" name="register" value="Register">
                                    </p>
                                </form>
                            </div>
                        </div>
                        <div class="background-overlay"></div>
                    </aside>
                </div>
            </div>
        </div>
    </div>
    <div class="navigation-menu">
        <div class="container">
            <div class="menu-mobile-effect navbar-toggle button-collapse" data-activates="mobile-demo">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </div>
            <div class="width-logo sm-logo">
                <a href="index.htm" title="Travel" rel="home">
                    <img src="{{ URL::asset('images/logo_sticky.png') }}" alt="Logo" width="474" height="130"
                         class="logo_transparent_static">
                    <img src="{{ URL::asset('images/logo_sticky.png') }}" alt="Sticky logo" width="474" height="130"
                         class="logo_sticky">
                </a>
            </div>
            <nav class="width-navigation">
                <ul class="nav navbar-nav menu-main-menu side-nav" id="mobile-demo">
                    <li class="current-menu-ancestor current-menu-parent">
                        <a href="index.html">{{@__('nhatnga_menu.home')}}</a>
                    </li>
                    <li><a href="destinations.html">{{__('nhatnga_menu.about')}}</a></li>
                    <li class="menu-item-has-children">
                        <a href="tours.html">Tours</a>
                        <ul class="sub-menu">
                            <li><a href="single-tour.html">{{__('nhatnga_menu.international_tour')}}</a></li>
                            <li><a href="single-tour.html">{{__('nhatnga_menu.domestic_tour')}}</a>
                                <ul class="sub-menu">
                                    <li><a href="#">{{__('nhatnga_menu.long_travel')}}</a></li>
                                    <li><a href="#">{{__('nhatnga_menu.short_travel')}}</a></li>
                                    <li><a href="#">{{__('nhatnga_menu.food_travel')}}</a></li>

                                </ul>
                            </li>

                        </ul>
                    </li>

                    <li class="menu-item-has-children">
                        <a href="index.htm#">{{__('nhatnga_menu.services')}}</a>
                        <ul class="sub-menu">
                            <li><a href="#">VISA</a>
                                <ul class="sub-menu">
                                    <li><a href="#">VISA Chau A</a></li>
                                    <li><a href="#">VISA Chau Au</a></li>
                                    <li><a href="#">VISA Chau My</a></li>
                                    <li><a href="#">VISA Chau Uc</a></li>
                                    <li><a href="#">VISA Chau Phi</a></li>
                                </ul>
                            </li>
                            <li><a href="#">VISA Viet Nam</a></li>
                            <li><a href="#">Dich Thuat</a></li>
                            <li><a href="#">Thẻ doanh nhân APEC (ABTC)</a></li>
                            <li><a href="#">Giấy phép lao động, thẻ tạm trú</a></li>
                            <li><a href="#">Vé máy bay</a></li>
                            <li><a href="#">Các dịch vụ khác</a></li>
                        </ul>
                    </li>
                    <li><a href="#">{{@__('nhatnga_menu.contact')}}</a></li>
                    <li class="menu-right">
                        <ul>
                            <li id="travel_social_widget-2" class="widget travel_search">
                                <div class="search-toggler-unit">
                                    <div class="search-toggler">
                                        <i class="fa fa-search"></i>
                                    </div>
                                </div>
                                <div class="search-menu search-overlay search-hidden">
                                    <div class="closeicon"></div>
                                    <form method="get" class="search-form" action="tours.html">
                                        <input type="search" class="search-field" placeholder="Search ..." value=""
                                               name="s" title="Search for:">
                                        <input type="submit" class="search-submit font-awesome" value="&#xf002;">
                                    </form>
                                    <div class="background-overlay"></div>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</header>
    