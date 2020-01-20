$( document ).ready(function() {

	$('.menu-toggle').click(function(){
		$(this).toggleClass('active');
		$(this).toggleClass('inactive');
		$('.nav').toggleClass('active');
		$('.nav').toggleClass('inactive');
	});

	AOS.init({
		duration: 1000,
		easing: 'ease-out'
	});

});