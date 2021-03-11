
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

	$('.tabbed-content .family-tab').click(function(e){
		$('.tabs div').removeClass('active');
		$(e.target).addClass('active');
		$('.family-content').show(300);
		$('.team-content').hide(300);
		$('.umpire-content').hide(300);
	});

	$('.tabbed-content .team-tab').click(function(e){
		$('.tabs div').removeClass('active');
		$(e.target).addClass('active');
		$('.family-content').hide(300);
		$('.team-content').show(300);
		$('.umpire-content').hide(300);
	});

	$('.tabbed-content .umpire-tab').click(function(e){
		$('.tabs div').removeClass('active');
		$(e.target).addClass('active');
		$('.family-content').hide(300);
		$('.team-content').hide(300);
		$('.umpire-content').show(300);
	});

});