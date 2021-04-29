/*FAQ Accardion scripts*/

    $('.accordion').accordion({
        heightStyle: 'content'
    });

/*Accardion Content rotate*/
    $(".faq-rotate").click(function () {
    $(this).toggleClass("down");
})
