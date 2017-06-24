@php
$tour_list = App\Helper::get_random_tours();

@endphp

<div class="wrapper-special-tours">
    @foreach($tour_list as $tour)
    <div class="inner-special-tours">
        <a href="{{route('frontend.tour.detail',['slug'=>$tour->slug_url])}}">
            @if($tour->is_sale)
                <span class="onsale">Sale!</span>
            @endif
            <img src="{!! route('media.get', ['id'=>$tour->get_first_media_id($tour->media_ids),'resize'=>'430x305'])  !!}"
                 alt="{{$tour->translation()->first()->name}}" title="{{$tour->translation()->first()->name}}">
        </a>
        <div class="item_rating">
            @for ($i = 0; $i < $tour->rating; $i++)
                <i class="fa fa-star"></i>
            @endfor
            @for ($i = 0; $i < 5-$tour->rating; $i++)
                <i class="fa fa-star-o"></i>
            @endfor
        </div>
        <div class="post_title"><h3>
                <a href="{{route('frontend.tour.detail',['slug'=>$tour->slug_url])}}" rel="bookmark">
                    {{$tour->translation()->first()->name}}
                </a>
            </h3></div>
        <div class="item_price">
            <span class="price">  @if($tour->is_sale)
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
        </div>
    </div>

    @endforeach

</div>