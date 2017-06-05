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
            zIndex               : 999,
            backgroundColor      : "#34383e",
            backgroundOpacity    : 1
        });
           
}
function hide_spinner(){
    $("body").nimbleLoader("hide");
}
