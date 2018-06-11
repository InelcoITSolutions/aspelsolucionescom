var slideshow = false;
$(document).ready(function() {
    $("#tour-slides").slidesjs({
        play: {
            active: false,
            effect: "slide",
            interval: 6000,
            auto: true,
            swap: false,
            pauseOnHover: false,
            restartDelay: 2500
        },
        navigation: {
            active: false
        },
        pagination: {
            active: true,
            effect: "slide"
        },
        callback: {
            complete: function(num) {
                slide_caption(num);
            }
        },
        width: 459,
        height: 260
    });
    home_resize();
    $(window).resize(function() {
        home_resize();
    });
});

function slide_caption(slide) {
    var alt = $('#tour-slides #' + slide).attr('alt');
    var desc = alt.split("|");
    var title = desc[0];
    var body = desc[1];
    $('.tour-caption > .title').html(title);
    $('.tour-caption > p').html(body);
}

function home_resize() {
    var tourimgheight = $('#tour-slides img:first-of-type').height() + 10;
    $('.ac_home-tour').height(tourimgheight);
    $('#tour-slides img:first-of-type').load(function() {
        tourimgheight = $('#tour-slides img:first-of-type').height() + 10;
        $('.ac_home-tour').height(tourimgheight);
    });
    if (winWidth <= 980) {} else if (slideshow == true) {}
};