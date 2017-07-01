<style>

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
    <div class="col-sm-12" id ="tabbed-widget">
        <div class="tabs-wrap">
            <ul>
                <li>
                    <div class="post-thumbnail tie-appear">
                        <a href="{{route('frontend.visa.asia')}}" rel="bookmark">
                            <img src="{{URL::asset('images/custom/chau-a.jpg')}}"  class="img-responsive"  width="278" height="173">
                        </a>
                    </div><!-- post-thumbnail /-->
                    <h3><a href="{{route('frontend.visa.asia')}}">{{__('nhatnga_menu.visa_asia')}}</a></h3>
                </li>
                <li>
                    <div class="post-thumbnail tie-appear">
                        <a href="{{route('frontend.visa.europe')}}" rel="bookmark">
                            <img src="{{URL::asset('images/custom/chau-au.jpg')}}" class="img-responsive"  width="278" height="173" >
                        </a>
                    </div><!-- post-thumbnail /-->
                    <h3><a href="{{route('frontend.visa.europe')}}">{{__('nhatnga_menu.visa_europe')}}</a></h3>
                </li>
                <li>
                    <div class="post-thumbnail tie-appear">
                        <a href="{{route('frontend.visa.america')}}" rel="bookmark">
                            <img src="{{URL::asset('images/custom/chau-my.jpg')}}" class="img-responsive"  width="278" height="173">
                        </a>
                    </div><!-- post-thumbnail /-->
                    <h3><a href="{{route('frontend.visa.america')}}">{{__('nhatnga_menu.visa_america')}}</a></h3>
                </li>

                <li>
                    <div class="post-thumbnail tie-appear">
                        <a href="{{route('frontend.visa.australia')}}" rel="bookmark">
                            <img src="{{URL::asset('images/custom/chau-uc.jpg')}}" class="img-responsive"  width="278" height="173" >
                        </a>
                    </div><!-- post-thumbnail /-->
                    <h3><a href="{{route('frontend.visa.australia')}}">{{__('nhatnga_menu.visa_australia')}}</a></h3>
                </li>
                <li>
                    <div class="post-thumbnail tie-appear">
                        <a href="{{route('frontend.visa.africa')}}" rel="bookmark">
                            <img src="{{URL::asset('images/custom/chau-phi.jpg')}}"  class="img-responsive"  width="278" height="173">
                        </a>
                    </div><!-- post-thumbnail /-->
                    <h3><a href="{{route('frontend.visa.africa')}}">{{__('nhatnga_menu.visa_africa')}}</a></h3>
                </li>



            </ul>
        </div>
    </div>
</aside>
