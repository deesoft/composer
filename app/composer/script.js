$(function () {
    function install(form) {
        $.post(window.location.href, $(form).serialize(), function (r) {
            $('#result').append('\n' + r);
        }).fail(function (j,msg) {
            $('#result').append('\n' + msg);
            install(form);
        });
    }
    $('#form').submit(function () {
        $('#result').html($('#command :selected').text() + '...');
        install(this);
        return false;
    });
});