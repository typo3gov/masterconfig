$(document).ready(function(){

    $('.tx-yag-items-wrapper.image-slider.ble-breit').each(function(idx, item){
        var carouselId = "carousel" + idx;
        $(this).parent().parent().attr('id', carouselId);
        $(this).slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            variableWidth: true,
            useCSS: false,
            appendArrows: "#" + carouselId + ' ul.pagination.image-detail.ble-breit',
            prevArrow: '<li class="previous"><a href="#"><span>Vorheriges</span></a></li>',
            nextArrow: '<li class="next"><a href="#"><span>Nächstes</span></a></li>'
        });
    });
});