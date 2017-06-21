<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.html">Nhat Nga</a>
    </div>
    <!-- Top Menu Items -->
    <
    <ul class="nav navbar-right top-nav">
        <!--
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> <b class="caret"></b></a>

            <ul class="dropdown-menu message-dropdown">
                <li class="message-preview">
                    <a href="#">
                        <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                            <div class="media-body">
                                <h5 class="media-heading"><strong>John Smith</strong>
                                </h5>
                                <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                <p>Lorem ipsum dolor sit amet, consectetur...</p>
                            </div>
                        </div>
                    </a>
                </li>
                <li class="message-preview">
                    <a href="#">
                        <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                            <div class="media-body">
                                <h5 class="media-heading"><strong>John Smith</strong>
                                </h5>
                                <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                <p>Lorem ipsum dolor sit amet, consectetur...</p>
                            </div>
                        </div>
                    </a>
                </li>

                <li class="message-preview">
                    <a href="#">
                        <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                            <div class="media-body">
                                <h5 class="media-heading"><strong>John Smith</strong>
                                </h5>
                                <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                <p>Lorem ipsum dolor sit amet, consectetur...</p>
                            </div>
                        </div>
                    </a>
                </li>
                <li class="message-footer">
                    <a href="#">Read All New Messages</a>
                </li>
            </ul>

        </li>
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> <b class="caret"></b></a>
            <ul class="dropdown-menu alert-dropdown">
                <li>
                    <a href="#">Alert Name <span class="label label-default">Alert Badge</span></a>
                </li>
                <li>
                    <a href="#">Alert Name <span class="label label-primary">Alert Badge</span></a>
                </li>
                <li>
                    <a href="#">Alert Name <span class="label label-success">Alert Badge</span></a>
                </li>
                <li>
                    <a href="#">Alert Name <span class="label label-info">Alert Badge</span></a>
                </li>
                <li>
                    <a href="#">Alert Name <span class="label label-warning">Alert Badge</span></a>
                </li>
                <li>
                    <a href="#">Alert Name <span class="label label-danger">Alert Badge</span></a>
                </li>
                <li class="divider"></li>
                <li>
                    <a href="#">View All</a>
                </li>
            </ul>
        </li>

        -->
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> {{Auth::User()->full_name}} <b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li>
                    <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                </li>

                <li class="divider"></li>
                <li>
                    <a href="{{route('user.logout')}}"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                </li>
            </ul>
        </li>
    </ul>

    <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav side-nav">
            <li class="active">
                <a href="{{route('backend.banner.index')}}"><i class="fa fa-fw fa-dashboard"></i> Banner</a>
            </li>
            <li>

                <a href="javascript:;" data-toggle="collapse" data-target="#menu_services"><i class="fa fa-fw fa-arrows-v"></i> Services <i class="fa fa-fw fa-caret-down"></i></a>

                <ul id ="menu_services" class="collapse">
                    <li> <a href="{{route('backend.services.get',['id'=>1])}}"> Translation</a></li>
                    <li> <a href="{{route('backend.services.get',['id'=>2])}}"> APEC Card</a></li>
                    <li> <a href="{{route('backend.services.get',['id'=>3])}}"> Work Permit</a></li>
                    <li> <a href="{{route('backend.services.get',['id'=>4])}}"> Airline ticket</a></li>
                    <li> <a href="{{route('backend.services.get',['id'=>5])}}"> VISA Vietnam</a></li>
                    <li> <a href="{{route('backend.services.get',['id'=>6])}}"> Others</a></li>
                    <li> <a href="{{route('backend.services.get',['id'=>7])}}"> VISA</a></li>
                    <li> <a href="{{route('backend.services.get',['id'=>8])}}"> Tours</a></li>
                </ul>
            </li>
            <li>
                <a href="{{route('backend.visa.index')}}"><i class="fa fa-fw fa-table"></i> VISA</a>
            </li>
            <li>
                <a href="{{route('backend.tours.index')}}"><i class="fa fa-fw fa-table"></i> Tours</a>
            </li>
            <li>
                <a href="{{route('backend.news.index')}}"><i class="fa fa-fw fa-table"></i> News</a>
            </li>
            <li>
                <a href="{{route('backend.booking.index')}}"><i class="fa fa-fw fa-table"></i> Booking</a>
            </li>

            <li>
                <a href="{{route('backend.location.index')}}"><i class="fa fa-fw fa-edit"></i>Locations </a>
            </li>
        </ul>
    </div>
    <!-- /.navbar-collapse -->
</nav>