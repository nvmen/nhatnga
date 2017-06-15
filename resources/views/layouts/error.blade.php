<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Site Title-->
    <title>404</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport"
          content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <!-- Stylesheets-->
    <link rel="stylesheet" href="{{URL::asset('css/custom.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,600,900" rel="stylesheet">
    <style>

        body {
            font-family: 'Roboto', sans-serif;
            margin: 0; }

    </style>
</head>
<body>
<div class="page text-center">
    <div class="bg-image-03 context-dark page-wide">
        <!-- Page Header-->
        <header>
            <a class="reveal-inline-block brand-name" href="{{route('frontend.home.index')}}">
                <img class="img-responsive center-block" src="{{URL::asset('images/logo_nhatnga.png')}}" width="245"  alt=""></a>
        </header>
        <!-- Page Content-->
        <main class="page-content page-content-100">
            <div class="page-content-inner">
                <div class="shell">
                    <h1 class="text-ubold"><span class="big">404</span></h1>
                    <h3 class="offset-top-20 text-ubold">{{__('messages.sorry_message')}}</h3>
                    <p class="offset-top-30 big" style="opacity: .5;">
                        {{__('messages.sorry_detail')}}
                    </p>
                    <a class="offset-top-60 btn btn-primary btn-naira btn-naira-up" href="{{route('frontend.home.index')}}">
                        <span class="icon mdi mdi-arrow-left-bold"></span>
                        <span>{{__('messages.sorry_back_home')}}</span>
                    </a>
                </div>
            </div>
        </main>
        <!-- Page Footer-->
        <footer style="opacity: .5;">
            <div class="shell">
                <p>&#169; <span id="copyright-year"></span> Copyright © 2017 Travel. All Rights Reserved.
                </p>
            </div>
        </footer>
    </div>
</div>
</body>
</html>