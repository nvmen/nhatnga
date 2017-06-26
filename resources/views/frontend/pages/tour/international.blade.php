@extends('layouts.frontend')
@section('pageTitle', __('nhatnga_menu.international_tour'))
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
                            <li><a href="javascript:void(0)">{{__('nhatnga_menu.international_tour')}}</a></li>

                        </ul>
                    </div>
                    <h1 class="heading_primary">{{__('nhatnga_menu.international_tour')}}</h1></div>
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
                                        <select name="tour_type" id="tour_type" class="form-control" style="display: none">
                                            <option value="all">{{__('nhatnga_menu.all')}}</option>
                                            <option value="domestic-tour">{{__('nhatnga_menu.domestic_tour')}}</option>
                                            <option value="international-tour" selected>{{__('nhatnga_menu.international_tour')}}</option>

                                        </select>
                                        <select name="destination" id="destination" class="form-control">
                                            <option value="0">{{__('tour.destination')}}</option>
                                            @foreach($locations as $location)
                                                <option value="{{$location->id}}">{{$location->translation()->first()->name}}</option>
                                            @endforeach

                                        </select>
                                        <button type="submit">{{__('tour.find_tour')}}</button>
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
                var tour_type =$('#tour_type').val();
                var destination =$('#destination').val();
                var url ='{{route('frontend.tour.ajax_search_international')}}';
                var obj ={
                    _token:'{{ csrf_token() }}',
                    tour_name:tour_name,
                    tour_type:tour_type,
                    destination:destination,
                }
                $.get(url, obj)
                        .done(function (data) {
                            $('#container-tour-items').html(data);
                            hide_spinner();
                        })
                        .fail(function () {
                            hide_spinner();
                        });
                return false;
            });
            $('#tour_type').change(function(){
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

            });
        });
    </script>
@stop