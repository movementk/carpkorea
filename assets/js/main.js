(function($) {            
    //일정표 달력
    $( "#schedule" ).datepicker({
        dateFormat: 'yy-mm-dd',
        prevText: '<span class="ui-icon ui-icon-circle-triangle-w"><i class="icon-left-open"><span class="sr-only">이전달</span></i></span>',
        nextText: '<span class="ui-icon ui-icon-circle-triangle-e"><i class="icon-right-open"><span class="sr-only">다음달</span></i></span>',
        monthNames: ['01', '02', '03', '04', '05', '06', '07', '08', '09', '10', '11', '12'],
        monthNamesShort: ['01', '02', '03', '04', '05', '06', '07', '08', '09', '10', '11', '12'],
        showMonthAfterYear: true,
    });

    // 메인 슬라이더
    $(document).ready(function(){
        $('.jumbotron > ul').bxSlider({
            auto: true,
            controls: false
        });
    });
    // 이벤트 베너 슬라이더
    $(document).ready(function(){
        $('.event-banner > ul').bxSlider({
            auto: true,
            controls: false
        });
    });

    // 파트너 슬라이더
    var partnerSliderOpt = {
        auto: true,
        controls: false,
        minSlides: 1,
        maxSlides: 1,
        moveSlides: 1,
        slideMargin: 10
    };
    
    var partnerSlider = $('.partner-list').bxSlider(partnerSliderOpt);

    $(window).on('load resize', function() {
        var conWidth = $('.container:eq(0)').outerWidth();
        partnerSlider.reloadSlider(partnerSliderOpt);
        if ( conWidth >= 750 ) {
            partnerSlider.reloadSlider({
                auto: true,
                controls: false,
                slideWidth: 352,
                minSlides: 2,
                maxSlides: 2,
                moveSlides: 1,
                slideMargin: 10
            });
        }
        if ( conWidth >= 970 ) {
            partnerSlider.reloadSlider({
                auto: true,
                controls: false,
                slideWidth: 250,
                minSlides: 4,
                maxSlides: 4,
                moveSlides: 1,
                slideMargin: 10
            });
        }
        if ( conWidth >= 1200 ) {
            partnerSlider.reloadSlider({
                auto: true,
                controls: false,
                slideWidth: 270,
                minSlides: 4,
                maxSlides: 4,
                moveSlides: 1,
                slideMargin: 30
            });
        }
    });
})(jQuery);