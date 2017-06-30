<!DOCTYPE html>
<html lang="en-US">
<head>
    @include('includes.frontend.head')

</head>
<body >
<div class="wrapper-container">
    @include('includes.frontend.header')
    <div class="site wrapper-content">
        @yield('content')
    </div>
    @include('includes.frontend.footer')

</div>

@include('includes.frontend.foot')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js"></script>
<div class="gototop js-top active">
    <a href="#" class="js-gotop"><i class="fa fa-arrow-up"></i></a>
</div>

<script>
    var goToTop = function() {
        $('.js-gotop').on('click', function(event){

            event.preventDefault();

            $('html, body').animate({
                scrollTop: $('html').offset().top
            }, 500, 'easeInOutExpo');

            return false;
        });

        $(window).scroll(function(){

            var $win = $(window);
            if ($win.scrollTop() > 200) {
                $('.js-top').addClass('active');
            } else {
                $('.js-top').removeClass('active');
            }

        });

    };

    $(function(){
        goToTop();
    });
</script>
</body>
</html>