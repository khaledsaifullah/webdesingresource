$(document).ready(function ($) {
    'use strict';
    console.log("length "+$(".notification-drop-panel").length);
    if ($(".notification-drop-panel").length > 0) {
        $(".notification-drop-panel").on('click', function () {
            $(this).toggleClass('active');
            $("#drop-panel").slideToggle();
            return false;
        } );
        $(document).on('click', function () {
            if($(".notification-drop-panel").hasClass('active')){
                $(".notification-drop-panel").removeClass('active');
                $("#drop-panel").slideUp();
            }
        });
    }

});