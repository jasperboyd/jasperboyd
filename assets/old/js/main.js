$(document).ready(function(){
	$contactlink = $('#contactlink');
	$contact = $('#contact');
	$addresslink = $('#addresslink');
	$address = $('#address'); 
	 
	$contactlink.click(function(){
		$contact.slideToggle(500);
		$contactlink.toggleClass('selected');
	});
	
	$addresslink.click(function(){
		$address.slideToggle(500);
		$addresslink.toggleClass('selected');
	});
});