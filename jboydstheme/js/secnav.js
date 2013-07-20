$(document).ready(function(){
	$search_link = $('#search_link');
	$archive_link = $('#archives_link');
	$tt_link = $('#tt_link');
	$search = $('#search-2');
	$archive = $('#archives-2');
	
	$search_link.click(function(){
		$('html, body').animate({
        	 scrollTop: $search.offset().top - 125
     	}, 500);
    });
    
    $archive_link.click(function(){
    	$('html, body').animate({
        	 scrollTop: $archive.offset().top - 125
     	}, 500);
    }); 
    
     $tt_link.click(function(){
    	$('html, body').animate({
        	 scrollTop: 0
     	}, 500);
    }); 
});