function menu_scroll() {
    var menu = $('#main-nav');
    var origOffsetY = menu.offset().top;

    function scroll() {
        if ($(window).scrollTop() >= origOffsetY) {
            $('#main-nav').addClass('navbar-fixed-top');
            $('.content').addClass('menu-padding');
        } else {
            $('#main-nav').removeClass('navbar-fixed-top');
            $('.content').removeClass('menu-padding');
        }
    }

    document.onscroll = scroll;


    function autoHeight() {
        $(document.body).css("height", "");
        if( document.body.offsetHeight < $(window).height() ) {
            $(document.body).css("height", "100%");
        }
    }

    autoHeight()
    $(window).resize(function() {
        autoHeight()
    });

    window.onmousewheel = autoHeight;



    // $('ul.nav li.dropdown').hover(function() {
    //   $(this).find('.dropdown-menu').stop(true, true).delay(0).fadeIn(300);
    // }, function() {
    //   $(this).find('.dropdown-menu').stop(true, true).delay(0).fadeOut(300);
    // });
}


// $(document).ready(function () {

//     var menu = $('#main-nav');
//     var origOffsetY = menu.offset().top;

//     function scroll() {
//         if ($(window).scrollTop() >= origOffsetY) {
//             $('#main-nav').addClass('navbar-fixed-top');
//             $('.content').addClass('menu-padding');
//         } else {
//             $('#main-nav').removeClass('navbar-fixed-top');
//             $('.content').removeClass('menu-padding');
//         }
//     }

//     document.onscroll = scroll;

// });