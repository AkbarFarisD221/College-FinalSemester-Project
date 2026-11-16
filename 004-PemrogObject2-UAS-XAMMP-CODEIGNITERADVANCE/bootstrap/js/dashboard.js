/**
 * author: guanheng88
 * version: 1.0.0
 */
$(function() {
    var menu = $(".menubar");
    var menuItem = menu.find(".nav-item");

    menuItem.find(".nav-link-parent").click(function() {
        var parentItem = $(this).parent();
        var isOpen = parentItem.hasClass("open");



        if (isOpen) {
            parentItem.removeClass("open");
        }
        else {
            parentItem.addClass("open");
        }
    });
});