<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<meta name="csrf-token" content="{{ csrf_token() }}" />
<title>Nhat Nga - Management</title>
<!-- jQuery -->
<script src="{{ URL::asset('admin/js/jquery.js') }} "></script>
<script src="{{ URL::asset('plugins/upload/dropzone.js') }} "></script>

<!-- Bootstrap Core JavaScript -->
<script src="{{ URL::asset('admin/js/bootstrap.min.js') }}"></script>

<!-- Bootstrap Core CSS -->
<link href="{{ URL::asset('admin/css/bootstrap.min.css') }}" rel="stylesheet">

<!-- Custom CSS -->
<link href="{{ URL::asset('admin/css/sb-admin.css') }}" rel="stylesheet">

<!-- Morris Charts CSS -->
<link href="{{ URL::asset('admin/css/plugins/morris.css') }} " rel="stylesheet">
<link rel="stylesheet" href="https://rawgit.com/enyo/dropzone/master/dist/dropzone.css">
<!-- Custom Fonts -->
<link href="{{ URL::asset('admin/font-awesome/css/font-awesome.min.css') }} " rel="stylesheet" type="text/css">
<script src=" {{URL::asset('plugins/ckeditor/ckeditor.js')}}"></script>


<link href="{{ URL::asset('js/libs/style/loader.css') }}" rel="stylesheet">
<link href="{{ URL::asset('js/libs/style/style.css') }}" rel="stylesheet">
<script src=" {{URL::asset('js/libs/notify.min.js')}}"></script>
<script src=" {{URL::asset('js/libs/jquery.nimble.loader.js')}}"></script>
<script src=" {{URL::asset('js/libs/bootbox.min.js')}}"></script>
<script src=" {{URL::asset('js/common.js')}}"></script>
<link href="{{ URL::asset('assets/bootstrap-datepicker/css/bootstrap-datepicker.min.css') }} " rel="stylesheet" type="text/css">
<script src=" {{URL::asset('assets/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}"></script>
<link href="{{ URL::asset('assets/selectize/css/selectize.css') }} " rel="stylesheet" type="text/css">
<script src=" {{URL::asset('assets/selectize/js/standalone/selectize.min.js')}}"></script>
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->