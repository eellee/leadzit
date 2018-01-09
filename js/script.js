$('.wodry').wodry({
    animation: 'rotateAll',
    delay: 1000
});

$('.message a').click(function(){
    $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
});

;