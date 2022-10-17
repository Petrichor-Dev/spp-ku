$(document).scroll(function () {
	var wScroll = $(this).scrollTop();
	console.log(wScroll);
	
	if (wScroll > 257) {
		$('.menu').css({"top":"-83px","transition":"2s"});
	}else if(wScroll < 560){
		$('.menu').css({"top":"83px", "trasition":".2s"});
	}
});