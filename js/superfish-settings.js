
/*
 * Custom Superfish settings
 */

jQuery(document).ready(function($){
    var breakpoint = 600;
    var sf = $('ul.nav-menu');

    if($(document).width() >= breakpoint){ /* run superfish normally on larger screens*/
        sf.superfish({
            delay: 200,
            speed: 'fast'
        });
    }

    $(window).resize(function(){
        if($(document).width() >= breakpoint & !sf.hasClass('sf-js-enabled')){
            sf.superfish({
                delay: 200,
                speed: 'fast'
            });
        } else if($(document).width() < breakpoint) {  /* don't run superfish if resized to small or mobile */
            sf.superfish('destroy');
        }
    });
});
