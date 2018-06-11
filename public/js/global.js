var winWidth = 0;
var winHeight = 0;
var mobile = false;
$(document).ready(function() {
    win_resize(false);
    $(window).resize(function() {
        win_resize(false);
    });
});

function win_resize(debug) {
    winWidth = $(document).width();
    winHeight = $(document).height();
    if (debug) console.log("Window size: " + winWidth + " x " + winHeight);
    if (winWidth <= 980) {
        mobile = true;
    } else {
        mobile = false;
    }
}