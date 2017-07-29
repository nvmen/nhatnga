<style>
    .service-list li {
        border-bottom: 1px solid #dedede;
        padding: 8px 0px 8px 0px;
        padding-left: 10px;
    }
    .service-list li a {
        padding-left: 10px;
        color:#000;
        font-weight: 500;
    }
    .service-list li a:hover,.service-list li a.active  {
        color:#34ccff;
    }
    .title-service{
        text-transform: uppercase;
        padding-bottom: 12px;
    }
</style>
@php
$active_service ='';
if(isset($active)){
$active_service = $active;
}
@endphp
<div class="">
    <aside class="services">
        <div class="row">
            <div class="col-sm-12">
                <h3 class="title_primary title-service">{{__('nhatnga_menu.services_left')}}</h3>
            </div>
            <div >
                <ul class="service-list">
                    <li><a href="{{route('frontend.services.studyincanada')}}">{{__('home.study_in_canada')}}</a></li>
                    <li><a href="{{route('frontend.services.workandliveincanada')}}">{{__('home.work_and_live_in_canada')}}</a></li>
                    <li><a href="{{route('frontend.services.visa')}}">{{__('nhatnga_menu.services_visa')}}</a></li>
                    <li><a href="{{route('frontend.services.visavietnam')}}" class="@if($active_service=="visavietnam") active @endif">{{__('nhatnga_menu.visa_vietnam')}}</a></li>
                    <li>  <a href="{{route('frontend.tour.index')}}">Tours</a></li>
                    <li><a href="{{route('frontend.services.translation')}}" class="@if($active_service=="translation") active @endif">{{__('nhatnga_menu.services_translation')}}</a></li>
                    <li><a href="{{route('frontend.services.apeccard')}}" class="@if($active_service=="apeccard") active @endif">{{__('nhatnga_menu.services_apeccard')}}</a></li>
                    <li><a href="{{route('frontend.services.workpermit')}}" class="@if($active_service=="workpermit") active @endif">{{__('nhatnga_menu.services_workpermit')}}</a>
                    </li>
                    <li><a href="{{route('frontend.services.airlineticket')}}" class="@if($active_service=="airlineticket") active @endif">{{__('nhatnga_menu.services_airlineticket')}}</a></li>
                    <li><a href="{{route('frontend.services.domesticandinternationaltravelinsurance')}}">{{__('home.travel_insurance')}}</a></li>
                    <li><a href="{{route('frontend.services.others')}}" class="@if($active_service=="others") active @endif">{{__('nhatnga_menu.services_others')}}</a></li>


                </ul>
            </div>
        </div>
    </aside>

    <style>
        .widget_text img {
            margin-bottom: 10px;
            margin-top: 10px;
        }

        .widget_text .call-phone {
            color: #34ccff;
            font-weight: 600;

        }

        .widget_text .title {
            color: #34ccff;
            font-weight: 600;
            font-size: 16px;
            padding-bottom: 5px;
            border-bottom: 1px solid #dedede;
        }
    </style>
    <aside class="widget widget_text">
        <div class="row">
            <div class="col-sm-12">
                <span class="title">{{__('nhatnga_menu.you_have_question')}}</span>
            </div>
            <div class="col-sm-12">
                <img src="{{ URL::asset('images/contactus.jpg') }}" alt="">
            </div>
            <div class="col-sm-12">
                <a href="tel:0919345788"><span class="call-phone">{{__('nhatnga_menu.call_us')}}: 0919 345 788</span></a>
            </div>


        </div>

    </aside>
</div>
