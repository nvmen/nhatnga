@extends('layouts.frontend')
@section('pageTitle',  __('nhatnga_menu.food_travel'))
@section('content')

    <div class="archive travel_tour travel_tour-page">
        <div class="site wrapper-content">
            <div class="top_site_main"
                 style="background-image:url({{ URL::asset('images/banner/top-heading.jpg') }} );">
                <div class="banner-wrapper container article_heading">
                    <div class="breadcrumbs-wrapper">
                        <ul class="phys-breadcrumb">
                            <li><a href="{{route('frontend.home.index')}}" class="home">Home</a></li>
                            <li><a href="{{route('frontend.tour.index')}}" class="home">Tour</a></li>
                            <li><a href="javascript:void(0)">{{__('nhatnga_menu.food_travel')}}</a></li>

                        </ul>
                    </div>
                    <h1 class="heading_primary">{{__('nhatnga_menu.food_travel')}}</h1></div>
            </div>
            <section class="content-area">
                <div class="container">
                    <div class="row">
                        <div class="site-main col-sm-9 align-left" id="container-tour-items">
                            @include('partials.tour_item')
                        </div>
                        <div class="widget-area align-left col-sm-3">
                            <div class="search_tour">
                                <div class="form-block block-after-indent">
                                    <h3 class="form-block_title">{{__('tour.search_tour')}}</h3>
                                    <div class="form-block__description">{{__('tour.find_tour_today')}}</div>
                                    <form method="get" action="" id ='search-tour'>
                                        <input type="hidden" name="tour_search" value="1">
                                        <input type="text" placeholder="{{__('nhatnga_menu.search')}}" value="" id="name_tour" name="name_tour">
                                        <select name="food_location" id="food_location" class="form-control">
                                            <option value="4" selected>{{__('nhatnga_menu.all')}}</option>
                                            <option value="1" >{{__('nhatnga_menu.north_vietnam')}}</option>
                                            <option value="2">{{__('nhatnga_menu.middle_vietnam')}}</option>
                                            <option value="3">{{__('nhatnga_menu.south_vietnam')}}</option>

                                        </select>
                                        <select name="food_type" id="food_type" class="form-control">
                                            <option value="0">{{__('nhatnga_menu.all')}}</option>
                                            <option value="1">{{__('nhatnga_menu.eat_meat')}}</option>
                                            <option value="2">{{__('nhatnga_menu.vegetarian_meals')}}</option>

                                        </select>
                                        <button id="submit_from" type="submit">{{__('tour.find_tour')}}</button>
                                    </form>
                                </div>
                            </div>
                            <aside class="widget widget_travel_tour">
                                @include('partials.random_tour')
                            </aside>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

    <script>

        $(document).ready(function () {

            $("#search-tour").submit(function () {
                show_spinner();
                var tour_name =$('#name_tour').val();
                var food_type =$('#food_type').val();
                var food_location =$('#food_location').val();
                var url ='{{route('frontend.tour.ajax_search_domestic_foodtour')}}';
                var obj ={
                    _token:'{{ csrf_token() }}',
                    tour_name:tour_name,
                    food_type:food_type,
                    food_location:food_location,
                }
                $.get(url, obj)
                        .done(function (data) {
                            $('#container-tour-items').html(data);
                            hide_spinner();
                        })
                        .fail(function () {
                            hide_spinner();
                        });
                $('#search-tour').find(':button').focusout()
                return false;
            });
            $('#tour_type').change(function(){
                /*
                 let val =$(this).val();
                 var url ='{{route('frontend.tour.location')}}';

                 var obj ={
                 _token:'{{ csrf_token() }}',
                 tour_type:val,
                 }
                 $.get(url, obj)
                 .done(function (data) {

                 $('#destination')
                 .find('option')
                 .remove()
                 .end()
                 .append(data)
                 .val('whatever')
                 ;
                 $("#destination").val($("#destination option:first").val());
                 })
                 .fail(function () {
                 hide_spinner();
                 });
                 */
            });

        });
    </script>
@stop