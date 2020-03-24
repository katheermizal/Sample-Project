require(['jquery'], function () {
    jQuery(document).ready(function () {
    if (jQuery(".scrollup").length > 0) {
        // scroll-to-top button show and hide
        jQuery(document).ready(function () {
            jQuery(window).scroll(function () {
                if (jQuery(this).scrollTop() > 100) {
                    jQuery('.scrollup').fadeIn();
                } else {
                    jQuery('.scrollup').fadeOut();
                }
            });
            // scroll-to-top animate
            jQuery('.scrollup').click(function () {
                jQuery("html, body").animate({scrollTop: 0}, 600);
                return false;
            });
        });
    }
});
});