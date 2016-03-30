$(function () {
    function install() {
        $.post(window.location.href, $('#form').serialize(), function (r) {
            $('#result').html(r);
        }).fail(function () {
            install();
        });
    }
    $('#btn').click(function () {
        $('#result').html('Loading...');
        install();
    });
});