$(function(){


	$('.menu-pc-in > li').each(function(){

		if ($(this).find('> ul > li').length==1) {
			$(this).find('> ul').addClass('one');
		}
		else if ($(this).find('> ul > li').length==2) {
			$(this).find('> ul').addClass('two');
		}

	});









});