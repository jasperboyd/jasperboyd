$(document).ready(function(){
	$e_link = $('#e_link');
	$experience = $('#experience');
	
	$e_link.click(function(){
		$('html, body').animate({
        	 scrollTop: $experience.offset().top
     	}, 500);
    });
});