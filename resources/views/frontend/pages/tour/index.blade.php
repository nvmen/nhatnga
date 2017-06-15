@extends('layouts.error')
@section('pageTitle', 'Services')
@section('content')
   <div class="row">
      <div class="col-lg-12">
         <h1 class="page-header">
            Tour Management
         </h1>
         <div class="row" style="padding-bottom: 17px;">
            <div class="col-md-2">
               <button type="button" class="btn btn-info" data-toggle="modal" data-target="#add">New
               </button>
            </div>
            <div class="col-md-6">
               <form method="get" action="{{route('backend.location.index')}}">
                  <div class="form-group input-group">
                     <input type="text" id='search' name='search' class="form-control" value="{{$search}}">
                            <span class="input-group-btn">
                                <button class="btn btn-default" onclick="submit()" type="button"><i
                                           class="fa fa-search"></i></button>
                            </span>
                  </div>
               </form>
            </div>
         </div>

      </div>
   </div>
@stop