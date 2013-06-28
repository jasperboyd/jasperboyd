$(document).ready(function(){ 
	$cp_link = $('#cp_link');
	$d_link = $('#d_link');
	$currentprojects = $('#currentprojects');
	$discography = $('#discography');
	
	$cp_link.click(function(){
		$currentprojects.scoll();
	});
}); 