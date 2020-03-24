require(['jquery'], function () {
    jQuery(document).ready(function () {
        jQuery(".admin__menu #menu-megatronic-cpanel-view .submenu .item-addimage, .admin__menu #menu-megatronic-cpanel-view .submenu .item-addimage-two").find('a').remove();
        
        var eImage = jQuery(".admin__menu #menu-megatronic-cpanel-view .submenu .item-addimage").parent().html();
        var obj = '<a href="#" target="_blank">';
        obj += eImage;
        obj += '</a>';
    	jQuery(".admin__menu #menu-megatronic-cpanel-view .submenu .item-addimage").replaceWith(obj);

    	var eImageTwo = jQuery(".admin__menu #menu-megatronic-cpanel-view .submenu .item-addimage-two").parent().html();
        var obj = '<a href="#" target="_blank">';
        obj += eImageTwo;
        obj += '</a>';
    	jQuery(".admin__menu #menu-megatronic-cpanel-view .submenu .item-addimage-two").replaceWith(obj);
	});
});