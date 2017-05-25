$(window).scroll(function(){
		if ($(this).scrollTop() > $(window).height()) {
			$('.scrollToTop').fadeIn();
		} else {
			$('.scrollToTop').fadeOut();
		}
	});

	//Click event to scroll to top
	$('.scrollToTop').click(function(){
		$('html, body').animate({scrollTop : 0},800);
		return false;
	});

var lien = $('#events-link');

var $root = $('html, body');
$('a.events-link').click(function() {
    var href = $.attr(this, 'href');
    $root.animate({
        scrollTop: $($.attr(this, 'href')).offset().top - 100
    }, 800, function () {
        window.location.hash = href;
    });
    return false;
});
