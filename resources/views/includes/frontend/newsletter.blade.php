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
                <form class="epm-sign-up-form" name="epm-sign-up-form" action="index.htm#" method="post">
                    <div class="epm-form-field">
                        <label for="epm-email">Email</label>
                        <input type="email" placeholder="Email" name="epm-email" tabindex="8" class="email" id="epm-email" value="">
                    </div>


                    <input type="submit" name="epm-submit-chimp" value="{{__('nhatnga_menu.sign_up_now')}}" data-wait-text="Please wait..." tabindex="10" class="button btn epm-sign-up-button epm-submit-chimp">
                </form>
            </aside>
        </div>
    </div>
</div>