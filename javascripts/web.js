$(document).ready(function(){
	$p_link = $('#p_link');
	$portfolio = $('#portfolio');
	
	$p_link.click(function(){
		$('html, body').animate({
        	 scrollTop: $portfolio.offset().top
     	}, 500);
    });
});