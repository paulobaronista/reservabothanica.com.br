$(document).on('ready', function () {
	$(".galeria-reserva").slick({
		draggable: false,
		arrows: false,
		dots: false,
		infinite: true,
		speed: 800,
		fade: true,
		cssEase: 'linear',
		autoplay: true,
		autoplaySpeed: 5000,
		pauseOnHover: false,
	});

	$('.galeria-fotos-slider').slick({
		dots: false,
		infinite: true,
		speed: 500,
		fade: true,
		cssEase: 'linear'
	});
});

$(document).on('ready', function () {
	$(window).scroll(function(){
		if( $(document).scrollTop() > 0 ) {
			$('#home-form').css("bottom", "-85px");
		} else {
		   $('#home-form').css("bottom", "0px");
		}
	 });
});

$(function () {
	$('.nome').clear();
	$('.email').clear();
	$('.phone').clear();
	$('.msg').clear();

	$('.btn_enviar').on('click', function () {
		var n, e, t, m, s;
		var msg = "";
		n = $('.nome').val();
		e = $('.email').val();
		t = $('.phone').val();
		m = $('.msg').val();
	});
});

$(function () {
	$('.homeNome').clear();
	$('.homeEmail').clear();
	$('.homePhone').clear();

	$('.btn_home_enviar').on('click', function () {
		var n, e, t;
		n = $('.nome').val();
		e = $('.email').val();
		t = $('.phone').val();
	});
});