$(document).ready(function() {

	$('.bt-tabs').click(function() {

		$('.bt-tabs').removeClass('on');
	 	$('.cnt-tabs').slideUp('fast');
		if($(this).next().is(':hidden') == true) {
			$(this).addClass('on');
			$(this).next().slideDown('fast');
		 }
	});

	$('.cnt-tabs').hide();
});
