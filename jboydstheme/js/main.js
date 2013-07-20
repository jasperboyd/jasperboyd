$(document).ready(function(){
	$contactlink = $('#contactlink');
	$contact = $('#contact');
	$addresslink = $('#addresslink');
	$address = $('#address');
	
	$contactlink.click(function(){
		$contact.slideToggle(300);
		$contactlink.toggleClass('selected'); 
	});
	
	$addresslink.click(function(){
		$address.slideToggle(300);
		$addresslink.toggleClass('obscure');
	}); 
});