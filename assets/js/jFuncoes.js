$(document).ready(function () {
	$('#myVideo').on('hidden.bs.modal', function () {
		$('video').trigger('pause');
	});
});

$(document).ready(function () {
	$("#close").click(function () {
		$("#aviso").hide();
		window.location.href = "http://reservabothanica.com.br"
	});
});

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

$(document).ready(function () {
	$('#cookies').show();
	if (window.localStorage.getItem('accept_cookies')) {
		$('#cookies').hide();
		return false;
	}
	$(".btn_cookie").click(function () {
		window.localStorage.setItem('accept_cookies', true);
		$('#cookies').hide();
		return false;
	});
});

$(function () {
	$('.nome').clear();
	$('.email').clear();
	$('.phone').clear();
	$('.cidade').clear();
	$('.msg').clear();

	$('.btn_enviar').on('click', function () {
		var n, e, t, c, m;
		var msg = "";
		n = $('.nome').val();
		e = $('.email').val();
		t = $('.phone').val();
		c = $('.cidade').val();
		m = $('.msg').val();
	});
});

$(function () {
	$('.homeNome').clear();
	$('.homeEmail').clear();
	$('.homePhone').clear();

	$('.btn_home_enviar').on('click', function () {
		var n, e, t;
		n = $('.homeNome').val();
		e = $('.homeEmail').val();
		t = $('.homePhone').val();
	});
});