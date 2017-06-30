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
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js"></script>
<div class="gototop js-top active">
    <a href="#" class="js-gotop"><i class="fa fa-arrow-up"></i></a>
</div>

<div class="thesupport_hotline"
     style="width: 320px; background-color: rgb(255, 255, 255) !important; opacity: 1 !important; right: -290px;top:35%">
    <div class="bo" style="opacity: 1!important;">
        <div>
            <table cellspacing="0" style="width:290px;color:Black;opacity: 1!important; " cellpadding="5" border="0">
                <tbody style="background-color: #fff!important">

                <tr>
                    <td style="border-bottom:solid 1px #CCC">
                        <img border="0" src="{{URL::asset('images/custom/logo-new.png')}}">
                    </td>
                </tr>
                <tr>
                    <td style="border-bottom:solid 1px #CCC">
                        <b style="color:red; padding-left:5px">
                            Hotline: </b> <br>
                        <b style=" padding-left:5px">
                            <a href="tel:+48919345788" style="color:black">
                                0919.345.788
                            </a>
                            </b>
                    </td>
                </tr>

                <tr>
                    <td style="border-bottom:solid 1px #CCC">
                        <b style="color:red; padding-left:5px">Tour :</b>
                        Ms Nga -(+84) 28 6681 7653<br>
                        <strong style=" padding-left:5px"> Skype:</strong>
                        <a href="skype:nhatnga_company?chat">
                            <img border="0" src="{{URL::asset('images/custom/skype-logo.png')}}" title="Ms.Nga">
                        </a>
                        <br/>
                        <strong style=" padding-left:5px"> Email: </strong>
                        <a href="mailto:info@nhatnga.com.vn" style="color:blue;padding-left:5px">
                            info@nhatnga.com.vn

                        </a>
                        <br/><br/>
                    </td>
                </tr>



                </tbody>
            </table>
        </div>
    </div>
</div>

<script>
    jQuery(document).ready(function () {

        jQuery(".thesupport_hotline").hover(function () {
            jQuery(this).stop().animate({
                right: "0"
            }, "medium");
        }, function () {
            jQuery(this).stop().animate({
                right: "-290"
            }, "medium");
        }, 500);

    });
    var goToTop = function () {
        $('.js-gotop').on('click', function (event) {

            event.preventDefault();

            $('html, body').animate({
                scrollTop: $('html').offset().top
            }, 500, 'easeInOutExpo');

            return false;
        });

        $(window).scroll(function () {

            var $win = $(window);
            if ($win.scrollTop() > 200) {
                $('.js-top').addClass('active');
            } else {
                $('.js-top').removeClass('active');
            }

        });

    };

    $(function () {
        goToTop();
    });
</script>
</body>
</html>