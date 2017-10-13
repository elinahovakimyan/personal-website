$(document).ready(function(){
	$(window).scroll(function(){
		if ($(document).scrollTop() > 200) {
			$(".firsty").addClass("animated").addClass("bounceInRight");
		} else {
			$(".firsty").removeClass("animated").addClass("bounceInRight");
		}

		if ($(document).scrollTop() > 550) {
			$(".secondy").addClass("animated").addClass("bounceInLeft");
		} else {
			$(".secondy").removeClass("animated").addClass("bounceInLeft");
		}
	});

});