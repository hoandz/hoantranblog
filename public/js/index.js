$(function(){
	// var menuDesktop = $('.header_desktop');
	// var menuMobile = $('.header_mobile');
	// var trangThaiMenu = 'duoi97';
	//backtotop
	window.addEventListener('scroll', function(){
		if($(window).scrollTop() > 149){
			$('#back-to-top').addClass('active');
		}else{
			$('#back-to-top').removeClass('active');
		}
	});

	$('#back-to-top').on('click', function(){
		$('html,body').animate({scrollTop: 0}, "slow");
		return false;
	});
	// end backtotop
	$('.nut').on('click', function(){
		$('.content').toggleClass('content2');
		$('.contentMenu').toggleClass('menutrai');
	});
})