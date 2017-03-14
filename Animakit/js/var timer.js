var timer;
$(".perso ul li").mouseenter(function() {
    var that = this;
    timer = setTimeout(function(){
        $('.perso ul li').removeClass('hovered').addClass('adapt');
        $(that).addClass('hovered');
    }, 300);
}).mouseleave(function() {
    clearTimeout(timer);
});