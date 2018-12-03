/**
 * Created by deglo on 08.06.2017.
 */
// Set last page opened on the menu
$('#menu2 a[href]').on('click', function() {
    sessionStorage.setItem('menu2', $(this).attr('href'));
});

if (!sessionStorage.getItem('menu2')) {
    $('#menu2 #dashboard').addClass('active');
} else {
    // Sets active and open to selected page in the left column menu.
    $('#menu2 a[href=\'' + sessionStorage.getItem('menu2') + '\']').parents('li').addClass('active open');
}

if (localStorage.getItem('column-left') == 'active') {
    $('#button-menu i').replaceWith('<i class="fa fa-dedent fa-lg"></i>');

    $('#column-left').addClass('active');

    // Slide Down Menu
    $('#menu2 li.active').has('ul').children('ul').addClass('collapse in');
    $('#menu2 li').not('.active').has('ul').children('ul').addClass('collapse');
} else {
    $('#button-menu i').replaceWith('<i class="fa fa-indent fa-lg"></i>');

    $('#menu2 li li.active').has('ul').children('ul').addClass('collapse in');
    $('#menu2 li li').not('.active').has('ul').children('ul').addClass('collapse');
}


$('#button-menu').on('click', function() {
    // Checks if the left column is active or not.
    if ($('#column-left').hasClass('active')) {
        // localStorage.setItem('column-left', '');

        //   $('#button-menu i').replaceWith('<i class="fa fa-indent fa-lg"></i>');

        //   $('#column-left').removeClass('active');

        $('#menu2 > li > ul').removeClass('in collapse');
        $('#menu2 > li > ul').removeAttr('style');
    } else {
        //  localStorage.setItem('column-left', 'active');

        //   $('#button-menu i').replaceWith('<i class="fa fa-dedent fa-lg"></i>');

        //  $('#column-left').addClass('active');

        // Add the slide down to open menu items
        $('#menu2 li.open').has('ul').children('ul').addClass('collapse in');
        $('#menu2 li').not('.open').has('ul').children('ul').addClass('collapse');
    }
});
// Menu
$('#menu2').find('li').has('ul').children('a').on('click', function() {
    if ($('#column-left').hasClass('active')) {
        $(this).parent('li').toggleClass('open').children('ul').collapse('toggle');
        $(this).parent('li').siblings().removeClass('open').children('ul.in').collapse('hide');
    } else if (!$(this).parent().parent().is('#menu')) {
        $(this).parent('li').toggleClass('open').children('ul').collapse('toggle');
        $(this).parent('li').siblings().removeClass('open').children('ul.in').collapse('hide');
    }
});


