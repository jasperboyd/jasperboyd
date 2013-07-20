$(document).ready(function(){
	$e_link = $('#exp_button');
	$ex_link = $('#ex_link');
	$ed_link = $('#ed_link');
	$experience = $('#experience');
	$education = $('#education');
	
	$e_link.click(function(){
		$('html, body').animate({
        	 scrollTop: $experience.offset().top
     	}, 500);
    });
    
    $ex_link.click(function(){
		$('html, body').animate({
        	 scrollTop: $experience.offset().top -125
     	}, 500);
    });
    
    $ed_link.click(function(){
		$('html, body').animate({
        	 scrollTop: $education.offset().top -125
     	}, 500);
    });
});