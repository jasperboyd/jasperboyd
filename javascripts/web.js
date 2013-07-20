$(document).ready(function(){
	$p_link = $('#p_link');
	$ph_link = $('#ph_link');
	$portfolio = $('#portfolio');
	$selfpromotion = $('#selfpromotion');
	$yes_button = $('#yes_button');
	$no_button = $('#no_button');
	$yes_answer = $('#yes_answer');
	$no_answer = $('#no_answer');
	var yes_open = false; 
	var no_open = false; 
	
	$p_link.click(function(){
		$('html, body').animate({
        	 scrollTop: $portfolio.offset().top
     	}, 500);
    });
    
    $ph_link.click(function(){
    	$('html, body').animate({
        	 scrollTop: $selfpromotion.offset().top -125
     	}, 500);
    }); 
    
    $yes_button.click(function(){
    	if (!yes_open){
     			yes_open = true; 
     			if (no_open){
     				$no_answer.slideToggle(300); 
     				no_open = false; 
     			}
     			$yes_answer.slideToggle(300, function(){
    			$('html, body').animate({
        		 scrollTop: $yes_answer.offset().top
     			}, 500);
    		}); 	
     	} else { 
     			yes_open = false; 
     			$yes_answer.slideToggle(300); 
     	} 
    	
    });
    
    $no_button.click(function(){
    	if (!no_open){
     			no_open = true; 
     			if (yes_open){
     				$yes_answer.slideToggle(300);
     				yes_open = false; 
     			}
     			$no_answer.slideToggle(300, function(){
    			$('html, body').animate({
        		 scrollTop: $no_answer.offset().top
     			}, 500);
    		}); 	
     	} else { 
     			no_open = false; 
     			$no_answer.slideToggle(300); 
     	} 
    });
$no_answer.slideToggle(); 
$yes_answer.slideToggle(); 
});