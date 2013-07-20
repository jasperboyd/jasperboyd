$(document).ready(function(){ 
	$cp_link = $('#cp_link');
	$d_link = $('#d_link');
	$currentprojects = $('#currentprojects');
	$discography = $('#discography');
	$tt_link = $('#tt_link');
	$musiclanding = $('#musiclanding');
	
	$cp_link.click(function(){
     	$('html, body').animate({
         scrollTop: $currentprojects.offset().top
     	}, 500);
	});
	
	$d_link.click(function(){
		$('html, body').animate({
         scrollTop: $discography.offset().top -125
     	}, 500);
	}); 
	
	$tt_link.click(function(){
		$('html, body').animate({
         scrollTop: $currentprojects.offset().top
     	}, 500);
	});
}); 