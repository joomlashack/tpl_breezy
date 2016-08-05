(function ($)
{

    var blink, d, x, y;
    $(".btn").click(function(e){
        if($(this).find(".blink").length === 0){
            $(this).prepend("<span class='blink'></span>");
        }

        blink = $(this).find(".blink");
        blink.removeClass("animate");

        if(!blink.height() && !blink.width()){
            d = Math.max($(this).outerWidth(), $(this).outerHeight());
            blink.css({height: d, width: d});
        }

        x = e.pageX - $(this).offset().left - blink.width()/2;
        y = e.pageY - $(this).offset().top - blink.height()/2;

        blink.css({top: y+'px', left: x+'px'}).addClass("animate");
    });

})(jQuery);