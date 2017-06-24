/**
 * Created by MenNguyen on 6/5/2017.
 */
function show_spinner(){

        $("body").nimbleLoader("show", {
            position             : "fixed",
            loaderClass          : "loading_bar_body",
            debug                : true,
            speed                : 700,
            hasBackground        : true,
            zIndex               : 999999,
            backgroundColor      : "transparent",
            backgroundOpacity    : 0.5
        });
           
}
function hide_spinner(){
    $("body").nimbleLoader("hide");
}
function validateEmail(email) {
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
}