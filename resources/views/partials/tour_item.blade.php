<ul class="tours products wrapper-tours-slider">
    @foreach($list_tour as $tour)
  <li class="item-tour col-md-4 col-sm-6 product">
        <div class="item_border item-product">
            <div class="post_images">
                <a href="{{route('frontend.tour.detail',['slug'=>$tour->slug_url])}}">
											<span class="price">
                                                @if($tour->is_sale)
                                                    <del>
                                                        <span class="travel_tour-Price-amount amount">
                                                            {{App\Helper::get_format_money($tour->translation()->first()->adult_price,0)}}
                                                        </span>
                                                    </del>
                                                    <ins>
                                                        <span class="travel_tour-Price-amount amount">
                                                            &nbsp;{{App\Helper::get_format_money($tour->translation()->first()->adult_price*(1-$tour->discount_percent/100),0)}}
                                                        </span>
                                                    </ins>
                                                @else
                                                    <span class="travel_tour-Price-amount amount">
                                                        {{App\Helper::get_format_money($tour->translation()->first()->adult_price,0)}}</span>
                                                @endif
											</span>
                    @if($tour->is_sale)
                        <span class="onsale">Sale!</span>
                    @endif
                    @php
                    $media_id =$tour->get_first_media_id($tour->media_ids);
                    @endphp
                    <img
                         src="{{\App\Helper::get_url_media($media_id,'430x305')}}"
                         onerror="this.src='{!! route('media.get', ['id'=>$media_id,'resize'=>'430x305'])  !!}';"
                         alt="" title="" width="430" height="305" class ="img-responsive">

                </a>
            </div>
            <div class="wrapper_content">
                <div class="post_title"><h4 class="title-tour">
                        <a href="{{route('frontend.tour.detail',['slug'=>$tour->slug_url])}}" rel="bookmark" title="{{$tour->translation()->first()->name}}">
                            {{$tour->translation()->first()->name}}
                        </a>
                    </h4></div>
                <span class="post_date">{{$tour->duration_day}} {{__('tour.days')}}
                    @if($tour->duration_night!=0)
                    {{$tour->duration_night}} {{__('tour.nights')}}
                    @endif
                </span>
                <div class="description content-des-tour-item">
                    <p>
                        {{App\Helper::get_words($tour->translation()->first()->short_description,15)}}
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
                   class="button product_type_tour_phys add_to_cart_button">{{__('nhatnga_menu.view_more')}}</a>
            </div>
        </div>
    </li>
   @endforeach
</ul>
<div class="navigation paging-navigation" role="navigation">

    {!! $list_tour->links() !!}

</div>