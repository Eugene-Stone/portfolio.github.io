// start Detect
window.onload = function() {
	$(".preloader").delay(50).fadeOut();

	setTimeout(function() {
		//document.getElementById('body').className = 'page-loaded';
		document.getElementById('body').classList.add('page-loaded');
	}, 250);

}; // window.onload
// start Detect END


$(document).ready(function() {

	$(".header-btn .basic-btn").click(function () {
		$("html, body").animate({scrollTop:  $(this).parents("header").next("div, section").offset().top - 0 }, 800);
	});
	
	// Magnific Popup
	// Documentation: http://dimsemenov.com/plugins/magnific-popup/
	// $(".inner-case").click(function() {
	// 	$("#display").html();
	// }).magnificPopup({
	// 	type:"inline",
	// 	mainClass: "mfp-fade",
	// 	midClick: true 
	// });

	$(".count").click(function() {
		$("#display").html();
	}).magnificPopup({
		type:"inline",
		mainClass: "mfp-fade",
		midClick: true 
	});
	
	// Button up
	$(".btn-top").click(function() {
		$("html, body").animate({ scrollTop: 0 }, "slow");
		return false;
	});
	
	
	// Animation
	// Documentation: http://daneden.github.io/animate.css/
	$("h1").animated("fadeInDownBig", "zoomOut");
	$(".header .profil-wrap").animated("fadeInRightBig");
	$(".header .skills").animated("fadeInRightBig");
	$(".header .contacts").animated("fadeInRightBig");
	$(".header .button-wrap.header-btn").animated("fadeInUpBig");
	$("#portfolio h2").animated("zoomIn");
	
	// The animation is best viewed with section
	$("#portfolio").waypoint(function() {
		$("#portfolio .portfolio_item").each(function(index) {
			var ths = $(this);
			setInterval(function() {
				ths.addClass("on");
			}, 200*index);
		});
	}, {
		offset : "60%"
	});


	// mobilyselect
	$(".selecterBtns li a").click(function(event) {
		event.preventDefault();
	});

	$('.selecter').mobilyselect({
		collection: 'all',
		animation: 'absolute',
		duration: 500,
		listClass: 'selecterContent',
		btnsClass: 'selecterBtns',
		btnActiveClass: 'active',
		elements: 'li',
		onChange: function(){},
		onComplete: function(){}
	});












	$("img, a").on("dragstart", function(event) { event.preventDefault(); });

});




$(document).ready(function(){
	$(document).on("click", ".lang-switch a.rus-btn", function (e) {
		if (!$('body').hasClass("rus")) {
			$(".preloader").show().delay(250).fadeOut();

			$('body').removeClass("eng");
			$('body').addClass("rus");
			localStorage.removeItem('pageEng');
			localStorage.setItem('pageRus', $(this).data('lang'));
			return false;
		}
	});

	$(document).on("click", ".lang-switch a.eng-btn", function (e) {
		if (!$('body').hasClass("eng")) {
			$(".preloader").show().delay(250).fadeOut();
			
			$('body').removeClass("rus");
			$('body').addClass("eng");
			localStorage.removeItem('pageRus');
			localStorage.setItem('pageEng', $(this).data('lang'));
			return false;
		}

	});
});


$(document).ready(function(){
	var pageEng = localStorage.getItem('pageEng');
	if(pageEng){
		$('body').addClass(pageEng)
	}

	var pageRus = localStorage.getItem('pageRus');
	if(pageRus){
		$('body').addClass(pageRus)
	}
});