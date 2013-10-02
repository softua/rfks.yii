$(function() {

	$('.main-nav li').hover(function() {
		clearTimeout($.data(this,'timer'));
		$('.dropdown-menu', this).stop(true, true).slideDown(200);
	}, function() {
		$.data(this, 'timer', setTimeout($.proxy(function() {
			$('.dropdown-menu', this).stop(true, true).slideUp(200);
		}, this), 100));
	});
	
})