$(function () {
    function install(form) {
        $.post(window.location.href, $(form).serialize(), function (r) {
            $('#result').html(r);
        }).fail(function () {
            install(form);
        });
    }
    $('#form').submit(function (){
        $('#result').html('Loading...');
        install(this);
        return false;
    });
});