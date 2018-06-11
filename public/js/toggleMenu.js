$(document).ready(function(){
	/*
	$('.a-submenu').click(function(){
		$('.submenu-open').slideToggle(1500);


		 $(this).toggleClass("opened");
	});
*/
	$(".click-submenu").click(function(){
		$("#navbar").find(".a-submenu").stop(true,true).toggleClass("opened");
    });
});