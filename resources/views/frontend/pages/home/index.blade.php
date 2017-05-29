<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Travel</title>
    <link rel="stylesheet" href="{{ URL::asset('css/googleapis.css') }}">
    <link rel="stylesheet" href=" {{ URL::asset('assets/css/bootstrap.min.css') }}" type="text/css" media="all">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"
          type="text/css" media="all">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/flaticon.css') }}" type="text/css" media="all">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/font-linearicons.css') }}" type="text/css" media="all">
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}" type="text/css" media="all">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/travel-setting.css') }}" type="text/css" media="all">
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
</head>
<body>
<div class="wrapper-container">
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
                        <img src="images/logo_sticky.png" alt="Logo" width="474" height="130"
                             class="logo_transparent_static">
                        <img src="images/logo_sticky.png" alt="Sticky logo" width="474" height="130"
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
    <div class="site wrapper-content">
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
                            <h3 class="title_primary"> POPULAR SERVICES</h3><span class="line_after_title"></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="wpb_column col-sm-3">
                        <div class="widget-icon-box widget-icon-box-base iconbox-center">
                            <div class="boxes-icon circle"
                                 style="font-size:30px;width:80px; height:80px;line-height:80px">
                                <span class="inner-icon"><i
                                            class="vc_icon_element-icon flaticon-transport-6"></i></span>
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
                    <div class="wpb_column col-sm-3">
                        <div class="widget-icon-box widget-icon-box-base iconbox-center">
                            <div class="boxes-icon " style="font-size:30px;width:80px; height:80px;line-height:80px">
                                <span class="inner-icon"><i class="vc_icon_element-icon flaticon-sand"></i></span>
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
                    <div class="wpb_column col-sm-3">
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
                    <div class="wpb_column col-sm-3">
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
                </div>
                <div class="row">
                    <div class="wpb_column col-sm-3">
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
                    <div class="wpb_column col-sm-3">
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
                    <div class="wpb_column col-sm-3">
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
                    <div class="wpb_column col-sm-3">
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
                </div>
            </div>

            <div class="padding-top-6x padding-bottom-6x section-background"
                 style="background-image:url(images/home/bg-popular.jpg)">
                <div class="container">
                    <div class="shortcode_title text-white title-center title-decoration-bottom-center">
                        <div class="title_subtitle">Take a Look at Our</div>
                        <h3 class="title_primary">MOST POPULAR TOURS</h3>
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
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="stats_counter text-center text-white">
                                <div class="wrapper-icon">
                                    <i class="flaticon-translation"></i>
                                </div>
                                <div class="stats_counter_number">900</div>
                                <div class="stats_counter_title">Hồ sơ dịch thuật hàng tháng</div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="stats_counter text-center text-white">
                                <div class="wrapper-icon">
                                    <i class="flaticon-globe"></i>
                                </div>
                                <div class="stats_counter_number">3150</div>
                                <div class="stats_counter_title">VISA đã được cấp</div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="stats_counter text-center text-white">
                                <div class="wrapper-icon">
                                    <i class="flaticon-airplane"></i>
                                </div>
                                <div class="stats_counter_number">1000</div>
                                <div class="stats_counter_title">Vé máy bay bán ra mỗi năm</div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="stats_counter text-center text-white">
                                <div class="wrapper-icon">
                                    <i class="flaticon-people"></i>
                                </div>
                                <div class="stats_counter_number">200</div>
                                <div class="stats_counter_title">Thẻ APEC đã được phát hành</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="section-white padding-top-6x padding-bottom-6x">
                <div class="container">
                    <div class="shortcode_title title-center title-decoration-bottom-center">
                        <h3 class="title_primary">DEALS AND DISCOUNTS</h3><span class="line_after_title"></span>
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

            <div class="bg__shadow padding-top-6x padding-bottom-6x section-background"
                 style="background-image:url(images/home/bg-pallarax.jpg)">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-2"></div>
                        <div class="col-sm-8">
                            <div class="discounts-tour">
                                <h3 style="color:#ffffff" class="discounts-title"> Special Tour in April, Discover
                                    Australia for 100 customers with
                                    <span> discount 50%</span></h3>
                                <span class="line" style="color:#ffffff"></span>
                                <p style="color:#ffffff">It’s limited seating! Hurry up</p>
                                <div class="row centered text-center" id="myCounter"></div>
                                <div class="col-sm-12 text-center padding-top-2x">
                                    <a href="index.htm#" class="icon-btn"><i class="flaticon-airplane-4"></i> Get tour
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-2"></div>
                    </div>
                </div>
            </div>

            <div class="section-white padding-top-6x padding-bottom-6x">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="shortcode_title title-center title-decoration-bottom-center">
                                <h2 class="title_primary">Tours Reviews</h2>
                                <span class="line_after_title"></span>
                            </div>
                            <div class="shortcode-tour-reviews wrapper-tours-slider">
                                <div class="tours-type-slider" data-autoplay="true" data-dots="true" data-nav="false"
                                     data-responsive='{"0":{"items":1}, "480":{"items":1}, "768":{"items":1}, "992":{"items":1}, "1200":{"items":1}}'>
                                    <div class="tour-reviews-item">
                                        <div class="reviews-item-info">
                                            <img alt="" src="images/avata.jpeg" class="avatar avatar-95 photo"
                                                 height="90" width="90">
                                            <div class="reviews-item-info-name">Jessica</div>
                                            <div class="reviews-item-rating">
                                                <i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                        class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                        class="fa fa-star"></i>
                                            </div>
                                        </div>
                                        <div class="reviews-item-content">
                                            <h3 class="reviews-item-title">
                                                <a href="index.htm#">Canadian Rockies</a>
                                            </h3>
                                            <div class="reviews-item-description">The sightseeing and activities were
                                                better than we even thought! I still can’t believe we did so much in
                                                such a short time
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tour-reviews-item">
                                        <div class="reviews-item-info">
                                            <img alt="" src="images/avata.jpeg" class="avatar avatar-95 photo"
                                                 height="90" width="90">
                                            <div class="reviews-item-info-name">Jessica</div>
                                            <div class="reviews-item-rating">
                                                <i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                        class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                        class="fa fa-star"></i>
                                            </div>
                                        </div>
                                        <div class="reviews-item-content">
                                            <h3 class="reviews-item-title">
                                                <a href="index.htm#">Canadian Rockies</a>
                                            </h3>
                                            <div class="reviews-item-description">The sightseeing and activities were
                                                better than we even thought! I still can’t believe we did so much in
                                                such a short time
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tour-reviews-item">
                                        <div class="reviews-item-info">
                                            <img alt="" src="images/avata.jpeg" class="avatar avatar-95 photo"
                                                 height="90" width="90">
                                            <div class="reviews-item-info-name">Jessica</div>
                                            <div class="reviews-item-rating">
                                                <i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                        class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                        class="fa fa-star"></i>
                                            </div>
                                        </div>
                                        <div class="reviews-item-content">
                                            <h3 class="reviews-item-title">
                                                <a href="index.htm#">Canadian Rockies</a>
                                            </h3>
                                            <div class="reviews-item-description">The sightseeing and activities were
                                                better than we even thought! I still can’t believe we did so much in
                                                such a short time.
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
    </div>
    <div class="wrapper-footer wrapper-footer-newsletter">
        <div class="main-top-footer">
            <div class="container">
                <div class="row">
                    <aside class="col-sm-3 widget_text"><h3 class="widget-title">CONTACT</h3>
                        <div class="textwidget">
                            <div class="footer-info">
                                <p>Lorem ipsum dolor sit amet, cons ectetueradipiscing elit, sed diam nonu my nibh euis
                                    motincidunt ut laoreetd
                                </p>
                                <ul class="contact-info">
                                    <li><i class="fa fa-map-marker fa-fw"></i> 1945 Washington, San Francisco</li>
                                    <li><i class="fa fa-phone fa-fw"></i> +1 234 456 7890</li>
                                    <li>
                                        <i class="fa fa-envelope fa-fw"></i><a href="mailto:hello@siteinfo.com">
                                            hello@siteinfo.com</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </aside>
                    <aside class="col-sm-3 widget_text"><h3 class="widget-title">INFORMATION</h3>
                        <div class="textwidget">
                            <ul class="menu list-arrow">
                                <li><a href="index.htm#">Press Centre</a></li>
                                <li><a href="index.htm#">Travel News</a></li>
                                <li><a href="index.htm#">About Us</a></li>
                                <li><a href="index.htm#">Privacy Policy</a></li>
                                <li><a href="index.htm#">Contact Us</a></li>
                            </ul>
                        </div>
                    </aside>
                    <aside class="col-sm-3 widget_text"><h3 class="widget-title">Our Menu</h3>
                        <div class="textwidget">
                            <ul class="menu list-arrow">
                                <li><a href="index.htm#">About us</a></li>
                                <li><a href="index.htm#">Career</a></li>
                                <li><a href="index.htm#">Terms</a></li>
                                <li><a href="index.htm#">Privacy Policy</a></li>
                                <li><a href="index.htm#">Contact</a></li>
                            </ul>
                        </div>
                    </aside>
                    <aside class="col-sm-3 custom-instagram widget_text">
                        <h3 class="widget-title">Instagram</h3>
                        <div class="textwidget">
                            <ul>
                                <li><img src="images/instagram/1.jpg" alt="instagram"></li>
                                <li><img src="images/instagram/2.jpg" alt="instagram"></li>
                                <li><img src="images/instagram/3.jpg" alt="instagram"></li>
                                <li><img src="images/instagram/4.jpg" alt="instagram"></li>
                                <li><img src="images/instagram/5.jpg" alt="instagram"></li>
                                <li><img src="images/instagram/6.jpg" alt="instagram"></li>
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
                                <li><a href="index.htm#">Terms of Use</a></li>
                                <li>|</li>
                                <li><a href="index.htm#">Privacy Policy</a></li>
                                <li>|</li>
                                <li>
                                    <a href="javascript:if(confirm('https://twitter.com/physcode\n\nThis file was not retrieved because it was filtered out by your project settings.\n\nWould you like to open it from the server?'))window.location='https://twitter.com/physcode'"><i
                                                class="fa fa-twitter"></i></a></li>
                                <li>
                                    <a href="javascript:if(confirm('https://www.facebook.com/physcode/\n\nThis file was not retrieved because it was filtered out by your project settings.\n\nWould you like to open it from the server?'))window.location='https://www.facebook.com/physcode/'"><i
                                                class="fa fa-facebook"></i></a></li>
                                <li>
                                    <a href="javascript:if(confirm('https://www.instagram.com/physcode/\n\nThis file was not retrieved because it was filtered out by your project settings.\n\nWould you like to open it from the server?'))window.location='https://www.instagram.com/physcode/'"><i
                                                class="fa fa-instagram"></i></a>
                                </li>
                            </ul>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </div>
    <div class="wrapper-subscribe" style="background-image: url(images/home/bg_newletter.jpg)">
        <div class="subscribe_shadow"></div>
        <div class="form-subscribe parallax-section stick-to-bottom form-subscribe-full-width">
            <div class="shortcode_title text-white title-center title-decoration-bottom-center margin-bottom-3x">
                <div class="title_subtitle">To receive our best monthly deals</div>
                <h3 class="title_primary">JOIN THE NEWSLETTER</h3>
                <span class="line_after_title"></span>
            </div>
            <div class="form-subscribe-form-wrap">
                <aside class="mailchimp-container">
                    <form class="epm-sign-up-form" name="epm-sign-up-form" action="index.htm#" method="post">
                        <div class="epm-form-field">
                            <label for="epm-email">Email Address</label>
                            <input type="email" placeholder="Email Address" name="epm-email" tabindex="8" class="email"
                                   id="epm-email" value="">
                        </div>


                        <input type="submit" name="epm-submit-chimp" value="Sign Up Now" data-wait-text="Please wait..."
                               tabindex="10" class="button btn epm-sign-up-button epm-submit-chimp">
                    </form>
                </aside>
            </div>
        </div>
    </div>
</div>

<script type='text/javascript' src=' {{ URL::asset('assets/js/jquery-3.2.1.min.js') }}'></script>

<script type='text/javascript' src=' {{ URL::asset('assets/js/bootstrap.min.js') }}'></script>
<script type='text/javascript' src=' {{ URL::asset('assets/js/vendors.js') }}'></script>
<script type='text/javascript' src=' {{ URL::asset('assets/js/owl.carousel.min.js') }}'></script>
<script type="text/javascript" src=" {{ URL::asset('assets/js/jquery.mb-comingsoon.min.js') }}"></script>
<script type="text/javascript" src=" {{ URL::asset('assets/js/waypoints.min.js') }}"></script>
<script type="text/javascript" src=" {{ URL::asset('assets/js/jquery.counterup.min.js') }}"></script>
<script type='text/javascript' src=' {{ URL::asset('assets/js/theme.js') }}'></script>

</body>
</html>