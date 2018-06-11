$(document).ready(function() {
    $('.btn-update-item').on('click', function(e) {
        e.preventDefault();
        var id = $(this).data('id');
        var href = $(this).data('href');
        var cantidad_users = $("#producto_" + id).val();
        window.location.href = href + "/" + cantidad_users;
        if (cantidad_users > 5) {
            alert('Si quieres mas de 5 usuarios adicionales, por favor contactanos..')
        }
    });
});