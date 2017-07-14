
<script type='text/javascript' src=' {{ URL::asset('assets/js/bootstrap.min.js') }}'></script>
<script type='text/javascript' src=' {{ URL::asset('assets/js/vendors.js') }}'></script>
<script type='text/javascript' src='{{URL::asset('assets/js/jquery.swipebox.min.js')}}'></script>
<script type='text/javascript' src=' {{ URL::asset('assets/js/vendors.js') }}'></script>
<script type='text/javascript' src=' {{ URL::asset('assets/js/owl.carousel.min.js') }}'></script>
<script type="text/javascript" src=" {{ URL::asset('assets/js/jquery.mb-comingsoon.min.js') }}"></script>
<script type="text/javascript" src=" {{ URL::asset('assets/js/waypoints.min.js') }}"></script>
<script type="text/javascript" src=" {{ URL::asset('assets/js/jquery.counterup.min.js') }}"></script>
<script type='text/javascript' src=' {{ URL::asset('assets/js/theme.js') }}'></script>
<script src=" {{URL::asset('js/libs/jquery.nimble.loader.js')}}"></script>

<script src=" {{URL::asset('js/common.js')}}"></script>
<script>
    var current_code = '{{Config::get('app.locale')}}';
    var base_url = '{{route('frontend.home.index')}}';
	var base_url_without_lang = base_url.substring(0, base_url.length-2);
    var current_url = '{{Request::url()}}';
    function change_lang(code) {		
        var temp = base_url_without_lang + current_code;
        var temp2 = base_url_without_lang +  code;
        var res = base_url.replace(temp, temp2);
        var result = current_url.replace(temp, temp2);
        window.location = result;
    }
</script>