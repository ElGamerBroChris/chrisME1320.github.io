(function ($) {
    $(document);
}(jQuery));


/*
$(function () {
    // modified
    $('#header').load('/pages/header.html', function () {
        $('ul.nav a').click(function () {
            $('ul.nav a.active').removeClass('active');
            $(this).addClass('active');
        });
    });
});
*/

$(function () {
    // modified
    $('#header').load('../pages/header.html', function () {
        var path = window.location.pathname.split("/").pop();
        
        var target = $('.nav a[href ="' + path + '"]');

        target.addClass('active-nav');

    });
});

