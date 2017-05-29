<!DOCTYPE html>
<html lang="en-US">
<head>
    @include('includes.frontend.head')
</head>
<body>
<div class="wrapper-container">
    @include('includes.frontend.header')
    <div class="site wrapper-content">
        @yield('content')
    </div>
    @include('includes.frontend.footer')

</div>

@include('includes.frontend.foot')

</body>
</html>