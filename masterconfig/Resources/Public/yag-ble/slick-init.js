$(document).ready(function(){
    function GetURLParameter(sParam){
        var sPageURL = window.location.search.substring(1);
        var sURLVariables = sPageURL.split('&');
        for (var i = 0; i < sURLVariables.length; i++) {
            var sParameterName = sURLVariables[i].split('=');
            if (sParameterName[0] === sParam){
                return sParameterName[1];
            }
        }
    }

    var targetIndex = 0;
    var targetUid = parseInt(GetURLParameter('targetItem'));
    //console.log(targetUid);
    if (isNaN(targetUid)) {
        targetUid = 0;
    }
    
    $('.tx-yag.image-slider').slick({
        adaptiveHeight: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        useCSS: false,
        appendArrows: 'ul.pagination.image-detail',
        prevArrow: '<li class="previous"><a href="#"><span>Vorheriges</span></a></li>',
        nextArrow: '<li class="next"><a href="#"><span>Nächstes</span></a></li>',
        onInit: function(slider) {
            $('#slick-total').text(slider.slideCount);
            $('.tx-yag-items.theme-ble.imagelist-detailview a.image-link').each(function(e){
                $(this).closest('.tx-yag-items.theme-ble.imagelist-detailview').find('.image-frame').removeClass('active');
            });
            setTimeout(function() {
                if (targetUid > 0) {
                    targetIndex = parseInt($('.tx-yag.image-slider .tx-yag.image-slide.image-' + targetUid).attr('index'));
                    //console.log($('.tx-yag.image-slider .tx-yag.image-slide.image-' + targetUid));
                }
                $('.tx-yag.image-slider').slickGoTo(targetIndex);
            },10);
            $('#slick-current').text(targetIndex + 1);
            $('.tx-yag-items.theme-ble.imagelist-detailview .tx-yag-thumb-outerframe.tx-yag-item-thumb-outerframe.theme-ble:nth-child(' + (targetIndex+1) +')').find('.image-frame').first().addClass('active');
            pagerPosition(targetIndex);
        },
        onAfterChange: function (slider, index) {
            $('#slick-current').text(index + 1);
            $('.tx-yag-items.theme-ble.imagelist-detailview .tx-yag-thumb-outerframe.tx-yag-item-thumb-outerframe.theme-ble').find('.image-frame').removeClass('active');
            $('.tx-yag-items.theme-ble.imagelist-detailview .tx-yag-thumb-outerframe.tx-yag-item-thumb-outerframe.theme-ble:nth-child(' + (index+1) +')').find('.image-frame').first().addClass('active');
            pagerPosition(index);
        }
    });

    //window.resize
    $( window ).resize(function() {
        pagerPosition(-1);
    });

    function pagerPosition(index) {
        if (index < 0) {
            index = parseInt($('.tx-yag.image-slider .tx-yag.image-slide.slick-active').attr('index'));
        }

        //position of pagination at narrow/responsive view
        var diff = 30;
        var pagerHeight = 65;
        var containerHeight = $('.tx-yag-pi1.theme-ble .image-detailview').height();
        var imageHeight = $('.tx-yag.image-slide[index='+index+'] .tx-yag-image.image-container').height();
        var newDiff = containerHeight - imageHeight - pagerHeight;
        console.log(newDiff);
        if (newDiff > diff) {
            $('.tx-yag-pi1.theme-ble .image-detailview .gallery-pagination').css('bottom', diff + newDiff +'px');
        } else {
            $('.tx-yag-pi1.theme-ble .image-detailview .gallery-pagination').css('bottom', diff + 'px');
        }
    }

    $('.tx-yag-items.theme-ble.imagelist-detailview a.image-link').click(function(e){
        e.preventDefault();
        var newIndex = $(this).closest('.tx-yag-items.theme-ble.imagelist-detailview').find('.tx-yag-thumb-outerframe.tx-yag-item-thumb-outerframe.theme-ble').index($(this).closest('.tx-yag-thumb-outerframe.tx-yag-item-thumb-outerframe.theme-ble'));
        $('.tx-yag.image-slider').slickGoTo(newIndex);
        $(this).closest('.tx-yag-items.theme-ble.imagelist-detailview').find('.image-frame').removeClass('active');
        $(this).parent().addClass('active');
    });
});