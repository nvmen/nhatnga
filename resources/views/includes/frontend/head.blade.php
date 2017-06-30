<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
@php
$content_seo = __('nhatnga_menu.seo_link');
if(isset($seo_data)){
$content_seo = $seo_data;
}
@endphp
<meta name="description" content="{{$content_seo}}">
<meta name="robots" content="INDEX,FOLLOW" />

<title>@yield('pageTitle') | {{__('nhatnga_menu.seo_link')}}</title>
<link rel="stylesheet" href="{{ URL::asset('css/googleapis.css') }}">
<link rel="stylesheet" href=" {{ URL::asset('assets/css/bootstrap.min.css') }}" type="text/css" media="all">
<link href="{{ URL::asset('assets/selectize/css/selectize.css') }} " rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"
      type="text/css" media="all">
<link rel="stylesheet" href="{{ URL::asset('assets/css/flaticon.css') }}" type="text/css" media="all">
<link rel="stylesheet" href="{{ URL::asset('assets/css/font-linearicons.css') }}" type="text/css" media="all">
<link rel="stylesheet" href="{{ URL::asset('css/style.css') }}" type="text/css" media="all">
<link rel="stylesheet" href="{{ URL::asset('css/custom-style.css') }}" type="text/css" media="all">
<link rel="stylesheet" href="{{ URL::asset('assets/css/travel-setting.css') }}" type="text/css" media="all">
<link rel="stylesheet" href="{{ URL::asset('assets/animate/css/animations.css') }}" type="text/css" media="all">

<link rel="stylesheet" href="{{ URL::asset('css/custom.css') }}" type="text/css" media="all">
<link rel="shortcut icon" href="{{URL::asset('images/favicon.png')}}" type="image/x-icon">
<link href="{{ URL::asset('js/libs/style/loader.css') }}" rel="stylesheet">
<script type='text/javascript' src=' {{ URL::asset('assets/js/jquery-3.2.1.min.js') }}'></script>
<script src=" {{URL::asset('js/libs/notify.min.js')}}"></script>
<script src=" {{URL::asset('js/libs/jquery.nimble.loader.js')}}"></script>




<script src=" {{URL::asset('assets/selectize/js/standalone/selectize.min.js')}}"></script>
