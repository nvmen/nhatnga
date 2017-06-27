@extends('layouts.backend')
@section('pageTitle', 'Services')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Dashboard
                    <small>Statistics Overview</small>
                </h1>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-comments fa-5x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <div class="huge">{{$tour_count}}</div>
                                <div>Tours</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="panel panel-green">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-tasks fa-5x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <div class="huge">{{$visa_count}}</div>
                                <div>VISA</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="panel panel-yellow">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-shopping-cart fa-5x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <div class="huge">{{$book->count()}}</div>
                                <div>Booking</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="panel panel-red">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-support fa-5x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <div class="huge">{{$news_count}}</div>
                                <div>News</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><i class="fa fa-clock-o fa-fw"></i> Tour Details</h3>
                    </div>
                    <div class="panel-body">
                        <div class="list-group">
                            <a href="#" class="list-group-item">
                                <span class="badge">{{$tours->where('is_outbound',1)->count()}}</span>
                                <i class="fa fa-plane"></i> International
                            </a>
                            <a href="#" class="list-group-item">
                                <span class="badge">{{$tours->where('is_outbound','!=',1)->count()}}</span>
                                <i class="fa fa-flag"></i> Domestic
                            </a>
                            <a href="#" class="list-group-item">
                                <span class="badge">{{$tours->where('is_outbound','!=',1)->where('tour_type',1)->count()}} </span>
                                <i class="fa fa-fw fa-truck"></i> Long tour
                            </a>
                            <a href="#" class="list-group-item">
                                <span class="badge">{{$tours->where('is_outbound','!=',1)->where('tour_type',2)->count()}}</span>
                                <i class="fa fa-car"></i> Short tour
                            </a>
                            <a href="#" class="list-group-item">
                                <span class="badge">{{$tours->where('is_outbound','!=',1)->where('tour_type',3)->count()}} </span>
                                <i class="fa fa-bell-o"></i> Food tour
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><i class="fa fa-clock-o fa-fw"></i> VISA Details</h3>
                    </div>
                    <div class="panel-body">
                        <div class="list-group">
                            <a href="#" class="list-group-item">
                                <span class="badge">{{$visa->where('visa_cate_id',3)->count()}}</span>
                                <i class="fa fa-fw fa-user"></i> Asia
                            </a>
                            <a href="#" class="list-group-item">
                                <span class="badge">{{$visa->where('visa_cate_id',5)->count()}}</span>
                                <i class="fa fa-fw fa-user"></i> Europe
                            </a>
                            <a href="#" class="list-group-item">
                                <span class="badge">{{$visa->where('visa_cate_id',2)->count()}} </span>
                                <i class="fa fa-fw fa-user"></i> America
                            </a>
                            <a href="#" class="list-group-item">
                                <span class="badge">{{$visa->where('visa_cate_id',4)->count()}}</span>
                                <i class="fa fa-fw fa-user"></i> Australia
                            </a>
                            <a href="#" class="list-group-item">
                                <span class="badge">{{$visa->where('visa_cate_id',1)->count()}} </span>
                                <i class="fa fa-fw fa-user"></i> Africa
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><i class="fa fa-clock-o fa-fw"></i> Booking Details</h3>
                    </div>
                    <div class="panel-body">
                        <div class="list-group">
                            <a href="#" class="list-group-item">
                                <span class="badge">{{$today_book}}</span>
                                <i class="fa fa-fw fa-calendar"></i> Today
                            </a>
                            <a href="#" class="list-group-item">
                                <span class="badge">{{$thisweek_book}}</span>
                                <i class="fa fa-book"></i> This Week
                            </a>
                            <a href="#" class="list-group-item">
                                <span class="badge">{{$thismonth_book}} </span>
                                <i class="fa fa-book"></i> This Month
                            </a>
                            <a href="#" class="list-group-item">
                                <span class="badge">{{$book->count()}} </span>
                                <i class="fa fa-book"></i> Total
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><i class="fa fa-money fa-fw"></i> Latest Tours</h3>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                <tr>
                                    <th>Tour Name #</th>
                                    <th>Adults Price</th>
                                    <th>Child Price</th>
                                    <th>Discount (%)</th>
                                </tr>
                                </thead>
                                <tbody>
                                @php
                                $top10Tour =$tours->take(10);
                                @endphp
                                @foreach($top10Tour as $tour)
                                    <tr>
                                        <td>{{$tour->translation('vi')->first()->name}}</td>
                                        <td>
                                            {{number_format($tour->translation('vi')->first()->adult_price,0)}}đ <br/>
                                            ${{number_format($tour->translation('en')->first()->adult_price,0)}}
                                        </td>
                                        <td>
                                            {{number_format($tour->translation('vi')->first()->children_price,0)}}đ <br/>
                                            ${{number_format($tour->translation('en')->first()->children_price,0)}}

                                        </td>
                                        <td>{{$tour->discount_percent}} %</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
@stop

