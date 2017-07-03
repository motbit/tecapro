$(document).ready(function () {
    var nav = function () {
        $('.gw-nav > li > a').click(function () {
            var gw_nav = $('.gw-nav');
            gw_nav.find('li').removeClass('active');
            $('.gw-nav > li > ul > li').removeClass('active');

            var checkElement = $(this).parent();
            var ulDom = checkElement.find('.sub-menu')[0];

            if (ulDom == undefined) {
                checkElement.addClass('active');
                $('.gw-nav').find('li').find('ul:visible').slideUp();
                return;
            }
            if (ulDom.style.display != 'block') {
                gw_nav.find('li').find('ul:visible').slideUp();
                gw_nav.find('li.init-arrow-up').removeClass('init-arrow-up').addClass('arrow-down');
                gw_nav.find('li.arrow-up').removeClass('arrow-up').addClass('arrow-down');
                checkElement.removeClass('category');
                checkElement.removeClass('arrow-down');
                checkElement.addClass('arrow-up');
                checkElement.addClass('active');

                checkElement.find('ul').slideDown(300);
            } else {
                checkElement.removeClass('init-arrow-up');
                checkElement.removeClass('arrow-up');
                checkElement.removeClass('active');
                checkElement.addClass('arrow-down');
                checkElement.find('ul').slideUp(300);

            }
        });
        $('.gw-nav > li > ul > li > a').click(function () {
            $(this).parent().parent().parent().addClass('active');
            $('.gw-nav > li > ul > li').removeClass('active');
            $(this).parent().addClass('active')
        });
    };
    nav();

    var path = location.pathname;
    $(function () {
        $(".category").each(function () {
            var $this = $(this).find(".sub-menu li a");

            $($this).each(function () {
                var activeMenu = $(this).attr('href');
                if (activeMenu == path) {
                    console.log(activeMenu);
                    $(this).parent().parent().show();
                    console.log($(this).parent().parent().attr("style"));
                    $(this).parent().addClass("active");
                    $(this).parent().parent().parent().addClass("arrow-up").addClass("active").parent().parent().addClass("an");
                } else {

                }
            });

        });
    });
    $(function () {
        $(".category a").each(function () {

            var activeMenu = $(this).attr('href');
            if (activeMenu == path) {
                console.log(activeMenu);
                $(this).parent().parent().show();
                console.log($(this).parent().parent().attr("style"));
                $(this).parent().addClass("active").parent().parent().addClass("an");

            } else {

            }


        });
    });

   
});

