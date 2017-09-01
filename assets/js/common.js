(function($) {
    $(document).on('click', '#header .btn-nav-open', function() {
        $('body').addClass('nav-opened');
    });
    $(document).on('click', '#nav-side', function(e) {
        if ($(e.target).attr('id') == 'nav-side') {
            $('body').removeClass('nav-opened');
        }
    });
    $(document).on('click', '#nav-side .btn-nav-close', function() {
        $('body').removeClass('nav-opened');
    });

    $(document).on('mouseenter focus', '#header .nav > ul > li > a', function(e) {
		$(this).parent().siblings('.active').removeClass('active');
		$(this).parent().addClass('active');
		e.preventDefault();
    });
    $(document).on('mouseleave', '#header', function() {
        //$('body').removeClass('nav-expanded');
        $('#header .nav > ul > li').removeClass('active');
    });
    $(document).on('click', '#nav-side .nav > ul > li > a', function(e) {
		if (! $(this).parent().hasClass("has-no-child")) {
			if ($(this).parent().hasClass("selected")) {
				$(this).parent().removeClass("selected")
			} else {
				$(this).parent().siblings(".selected").removeClass("selected");
				$(this).parent().addClass("selected")
			}
			e.preventDefault();
		}
        
    });
})(jQuery);