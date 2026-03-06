$('.saqlash_button').click(function () {
    $('.ck-widget__selection-handle').remove();
    $('.ck-widget__type-around').remove();

    $('#editor1 .ck-widget__resizer').remove();
    $("#editor1 td").each(function () {
        $(this).attr('contenteditable', 'false');
        $(this).attr('class', '');
    });
    $("#editor1 tr").each(function () {
        $(this).attr('class', '');
        $(this).attr('style', '');
    });

    $('#editor2 .ck-widget__resizer').remove();
    $("#editor2 td").each(function () {
        $(this).attr('contenteditable', 'false');
        $(this).attr('class', '');
    });
    $("#editor2 tr").each(function () {
        $(this).attr('class', '');
        $(this).attr('style', '');
    });

    $('#editor3 .ck-widget__resizer').remove();
    $("#editor3 td").each(function () {
        $(this).attr('contenteditable', 'false');
        $(this).attr('class', '');
    });
    $("#editor3 tr").each(function () {
        $(this).attr('class', '');
        $(this).attr('style', '');
    });

    $('#editor4 .ck-widget__resizer').remove();
    $("#editor4 td").each(function () {
        $(this).attr('contenteditable', 'false');
        $(this).attr('class', '');
    });
    $("#editor4 tr").each(function () {
        $(this).attr('class', '');
        $(this).attr('style', '');
    });

    $('#editor5 .ck-widget__resizer').remove();
    $("#editor5 td").each(function () {
        $(this).attr('contenteditable', 'false');
        $(this).attr('class', '');
    });
    $("#editor5 tr").each(function () {
        $(this).attr('class', '');
        $(this).attr('style', '');
    });

    $('#editor6 .ck-widget__resizer').remove();
    $("#editor6 td").each(function () {
        $(this).attr('contenteditable', 'false');
        $(this).attr('class', '');
    });
    $("#editor6 tr").each(function () {
        $(this).attr('class', '');
        $(this).attr('style', '');
    });

    $('#editor7 .ck-widget__resizer').remove();
    $("#editor7 td").each(function () {
        $(this).attr('contenteditable', 'false');
        $(this).attr('class', '');
    });
    $("#editor7 tr").each(function () {
        $(this).attr('class', '');
        $(this).attr('style', '');
    });

    $('#editor8 .ck-widget__resizer').remove();
    $("#editor8 td").each(function () {
        $(this).attr('contenteditable', 'false');
        $(this).attr('class', '');
    });
    $("#editor8 tr").each(function () {
        $(this).attr('class', '');
        $(this).attr('style', '');
    });

    $('#editor9 .ck-widget__resizer').remove();
    $("#editor9 td").each(function () {
        $(this).attr('contenteditable', 'false');
        $(this).attr('class', '');
    });
    $("#editor9 tr").each(function () {
        $(this).attr('class', '');
        $(this).attr('style', '');
    });

    $('#editor10 .ck-widget__resizer').remove();
    $("#editor10 td").each(function () {
        $(this).attr('contenteditable', 'false');
        $(this).attr('class', '');
    });
    $("#editor10 tr").each(function () {
        $(this).attr('class', '');
        $(this).attr('style', '');
    });

    $('#editor11 .ck-widget__resizer').remove();
    $("#editor11 td").each(function () {
        $(this).attr('contenteditable', 'false');
        $(this).attr('class', '');
    });
    $("#editor11 tr").each(function () {
        $(this).attr('class', '');
        $(this).attr('style', '');
    });

    $('#editor12 .ck-widget__resizer').remove();
    $("#editor12 td").each(function () {
        $(this).attr('contenteditable', 'false');
        $(this).attr('class', '');
    });
    $("#editor12 tr").each(function () {
        $(this).attr('class', '');
        $(this).attr('style', '');
    });

    var data_text = $('#editor1').attr('data-text');
    var text = $('#editor1').html();
    $('#' + data_text).html(text);
    var data_text = $('#editor2').attr('data-text');
    var text = $('#editor2').html();
    $('#' + data_text).html(text);
    var data_text = $('#editor3').attr('data-text');
    var text = $('#editor3').html();
    $('#' + data_text).html(text);
    var data_text = $('#editor4').attr('data-text');
    var text = $('#editor4').html();
    $('#' + data_text).html(text);
    var data_text = $('#editor5').attr('data-text');
    var text = $('#editor5').html();
    $('#' + data_text).html(text);
    var data_text = $('#editor6').attr('data-text');
    var text = $('#editor6').html();
    $('#' + data_text).html(text);
    var data_text = $('#editor7').attr('data-text');
    var text = $('#editor7').html();
    $('#' + data_text).html(text);
    var data_text = $('#editor8').attr('data-text');
    var text = $('#editor8').html();
    $('#' + data_text).html(text);
    var data_text = $('#editor9').attr('data-text');
    var text = $('#editor9').html();
    $('#' + data_text).html(text);
    var data_text = $('#editor10').attr('data-text');
    var text = $('#editor10').html();
    $('#' + data_text).html(text);
    var data_text = $('#editor11').attr('data-text');
    var text = $('#editor11').html();
    $('#' + data_text).html(text);
    var data_text = $('#editor12').attr('data-text');
    var text = $('#editor12').html();
    $('#' + data_text).html(text);



    if (confirm('Saqlaysizmi? ')) {
        $('.form_news').submit();
    }
});
