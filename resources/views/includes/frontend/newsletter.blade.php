<div class="wrapper-subscribe" style="background-image: url( {{ URL::asset('images/home/bg_newletter.jpg') }})">
    <div class="subscribe_shadow"></div>
    <div class="form-subscribe parallax-section stick-to-bottom form-subscribe-full-width">
        <div class="shortcode_title text-white title-center title-decoration-bottom-center margin-bottom-3x">
            <div class="title_subtitle"> {{__('nhatnga_menu.monthly_deals')}}</div>
            <h3 class="title_primary"> {{__('nhatnga_menu.join_newsletter')}}</h3>
            <span class="line_after_title"></span>
        </div>
        <div class="form-subscribe-form-wrap">
            <aside class="mailchimp-container">
                <form class="epm-sign-up-form" name="epm-sign-up-form" action="" method="post">
                    <div class="epm-message epm-error message error" id="show-message"><p></p></div>
                    <div class="epm-form-field">
                        <label for="epm-email">Email</label>
                        <input type="email" placeholder="Email" name="epm-email" tabindex="8" class="email" id="epm-email" value="">
                    </div>


                    <input type="button" name="epm-submit-chimp" value="{{__('nhatnga_menu.sign_up_now')}}" data-wait-text="{{__('nhatnga_menu.please_wait')}}" tabindex="10" class="button btn epm-sign-up-button epm-submit-chimp">
                </form>
            </aside>
        </div>
    </div>
</div>
<script>
    var email_error ='{{__('contact.error_email_incorrect')}}';
    var email_thanks ='{{__('contact.thanks_newsletter')}}';
    $( document ).ready(function() {
        console.log( "ready!" );


        $(".epm-submit-chimp").click(function(){
            var epm_form = $(this);
            var token = '{{ csrf_token() }}';
            var submit_wait_text = jQuery(this).data('wait-text');
            var submit_orig_text = jQuery(this).val();
            $(this).val(submit_wait_text);
            var obj ={
                token:token,
                email:$('#epm-email').val(),
            }
            $.post('{{route('frontend.home.newsletter')}}', obj)
                    .done(function (data) {
                        if (data.success == true) {
                            $('#show-message').html(email_thanks);

                        } else {
                           $('#show-message').html(email_error);

                        }
                        $(epm_form).val(submit_orig_text); // restore submit button text
                    })
                    .fail(function() {
                        $('#show-message').html(email_error);
                        $(epm_form).val(submit_orig_text); // restore submit button text
                    });
        });

    });
</script>