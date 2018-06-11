$(document).ready(function() {
    //var estado = false;
    $('.io').click(function() {
        id = $(this).attr('data-toggle');
        txt = $(this).text();
        if (txt == 'Ocultar') {
            $(this).text('Ver más');
        } else {
            $(this).text('Ocultar');
        }
        $("#" + id).slideToggle(900);
    })
});