@extends('layouts.frontend')
@section('pageTitle',  __('nhatnga_menu.about'))
@section('content')

    <div class="site wrapper-content">
        <div class="top_site_main"
             style="background-image:url({{  URL::asset('images/custom/breadcrumbs-01.jpg') }} );">
            <div class="banner-wrapper container article_heading">
                <div class="breadcrumbs-wrapper">
                    <ul class="phys-breadcrumb">
                        <li><a href="#" class="home">Home</a></li>
                        <li>{{__('nhatnga.nhatnga')}}</li>
                    </ul>
                </div>
                <h1 class="heading_primary">{{__('nhatnga.nhatnga')}}</h1></div>
        </div>
        <section class="content-area">

            <div class="row">
                <div class="site-main col-sm-12" id="main-content">

                    <section class="section-40 section-md-40 center">
                        <div class="shell shell-wide text-lg-left">
                            <div class="range">
                                <div class="cell-lg-preffix-1 cell-lg-6 cell-lg-push-1">
                                    <div>
                                        <div class="img-wrap">
                                            <figure>
                                                <img class="img-responsive center-block"
                                                     src="{{ URL::asset('images/custom/overview-01.jpg') }}" width="800"
                                                     height="450" alt="">
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                                <div class="cell-lg-5">
                                    <div class="inset-lg-left-80">
                                        <h2 class="offset-top-20 text-ubold">{{__('nhatnga.company_name')}}</h2>
                                        <hr class="divider divider-lg-left divider-gray-dark divider-80">
                                        <p class="offset-top-40 big text-base">
                                            {{__('nhatnga.company_short_des')}}
                                        </p>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="section-80 section-lg-120 bg-image-01 context-dark center">
                        <div class="shell shell-wide">
                            <div class="range">
                                <div class="cell-md-7 cell-xl-5 cell-md-preffix-4 cell-xl-preffix-5">
                                    <blockquote class="quote ">
                                        <p>
                                            <q>
                                                {{__('nhatnga.company_commit')}}

                                            </q>
                                        </p>
                                    </blockquote>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="section-80 section-md-120 center">
                        <div class="shell shell-wide">
                            <h2 class="offset-top-20 text-ubold advantage">{{__('nhatnga.nhatnga_strengths')}}</h2>
                            <hr class="divider divider-gray-dark divider-80 hr-line-center">
                            <div class="range offset-md-top-90 offset-top-50">
                                <div class="cell-md-3 icon-box"><span
                                            class="icon-xl icon icon-info icon-circle fa-briefcase"><span
                                                class="icon-inner"></span></span>
                                    <h5 class="text-bold offset-top-30">
                                        {{__('home.tour')}}
                                        <br class="veil reveal-md-block">

                                    </h5>
                                    <hr class="divider divider-info divider-50 hr-line-center">
                                    <p class="inset-md-left-20 inset-md-right-20">
                                        {{__('home.tour_description')}}
                                    </p>
                                </div>
                                <div class="cell-md-3 icon-box"><span
                                            class="icon-xl icon icon-info icon-circle fa-map-marker">
                                            <span class="icon-inner"></span>
                                        </span>
                                    <h5 class="text-bold offset-top-30">
                                        {{__('home.visa')}}
                                        <br class="veil reveal-md-block">
                                    </h5>
                                    <hr class="divider divider-info divider-50 hr-line-center">
                                    <p class="inset-md-left-20 inset-md-right-20">
                                        {{__('home.visa_description')}}
                                    </p>
                                </div>
                                <div class="cell-md-3 icon-box">
                                        <span class="icon-xl icon icon-info icon-circle fa-globe"><span
                                                    class="icon-inner"></span>
                                        </span>
                                    <h5 class="text-bold offset-top-30"> {{__('home.translation_notarization')}}
                                        <br class="veil reveal-md-block">
                                    </h5>
                                    <hr class="divider divider-info divider-50 hr-line-center">
                                    <p class="inset-md-left-20 inset-md-right-20">
                                        {{__('home.translation_notarization_description')}}
                                    </p>
                                </div>
                                <div class="cell-md-3 icon-box">
                                        <span class="icon-xl icon icon-info icon-circle fa-commenting">
                                            <span class="icon-inner"></span></span>
                                    <h5 class="text-bold offset-top-30">{{__('home.work_permit_temporary_resident_card')}}
                                        <br class="veil reveal-md-block"></h5>
                                    <hr class="divider divider-info divider-50 hr-line-center">
                                    <p class="inset-md-left-20 inset-md-right-20">
                                        We provide reliable ticket booking system, which is also perfect for first-time
                                        travellers.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </section>
                    <div class="section-40 section-md-40 center">
                        <div class="shell shell-wide">
                            <h2 class="offset-top-20 text-ubold advantage">{{__('nhatnga.company_criteria')}}</h2>
                            <hr class="divider divider-gray-dark divider-80 hr-line-center">
                            <div class="row  animatedParent" data-sequence='500'>
                                <div class="row item odd animated slowest">
                                    <div class="col-md-8  solution left">
                                        <div class="solution-content">
                                            <h2>{{__('nhatnga.enthusiastic_consultant')}}</h2>
                                            <div class="hr line"></div>
                                            <p>
                                                {{__('nhatnga.enthusiastic_consultant_text')}}
                                            </p>
                                        </div>

                                    </div>
                                    <div class="col-md-4 content-image fader">
                                        <img src="{{ URL::asset('images/reasons/1.jpg')}}"></div>
                                </div>
                                <div class="row item">
                                    <div class="col-md-4 content-image">
                                        <img src="{{ URL::asset('images/reasons/2.jpg')}}">
                                    </div>
                                    <div class="col-md-8  solution right">
                                        <div class="solution-content">
                                            <h2>{{__('nhatnga.prompt_service')}}</h2>
                                            <div class="hr line"></div>
                                            <p>
                                                {{__('nhatnga.prompt_service_text')}}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row item odd">
                                    <div class="col-md-8  solution left">
                                        <div class="solution-content">
                                            <h2>{{__('nhatnga.professional')}}</h2>
                                            <div class="hr line"></div>
                                            <p>
                                                {{__('nhatnga.professional_text')}}
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-md-4"><img src="{{ URL::asset('images/reasons/3.jpg')}}"></div>
                                </div>
                                <div class="row item">
                                    <div class="col-md-4 content-image">
                                        <img src="{{ URL::asset('images/reasons/4.jpg')}}">
                                    </div>
                                    <div class="col-md-8  solution right">
                                        <div class="solution-content">
                                            <h2>{{__('nhatnga.reasonable_price')}}</h2>
                                            <div class="hr line"></div>
                                            <p>
                                                {{__('nhatnga.reasonable_price_text')}}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row item odd">
                                    <div class="col-md-8  solution left">
                                        <div class="solution-content">
                                            <h2>{{__('nhatnga.information_confidentiality')}}</h2>
                                            <div class="hr line"></div>
                                            <p>
                                                {{__('nhatnga.information_confidentiality_text')}}
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-md-4 content-image"><img
                                                src="{{ URL::asset('images/reasons/5.jpg')}}"></div>
                                </div>
                                <div class="row item">
                                    <div class="col-md-4 content-image">
                                        <img src="{{ URL::asset('images/reasons/6.jpg')}}">
                                    </div>
                                    <div class="col-md-8  solution right">
                                        <div class="solution-content">
                                            <h2>{{__('nhatnga.prestige_guatrantee')}}</h2>
                                            <div class="hr line"></div>
                                            <p>
                                                {{__('nhatnga.prestige_guatrantee_text')}}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>


                </div>
            </div>

        </section>
    </div>

@stop