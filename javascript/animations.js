$(document).ready(function(){
				
				//pages array for navigation
				var pages = new Array();
				
				pages[0] = '#welcome';
				pages[1] = '#about';
				pages[2] = '#projects';
				pages[3] = '#recordings';
				pages[4] = '#experience';
				pages[5] = '#contact';
				
				//array of divs used to navigate
				var balls = new Array(); 
				
				balls[0] = '#b1';
				balls[1] = '#b2';
				balls[2] = '#b3';
				balls[3] = '#b4';
				balls[4] = '#b5';
				balls[5] = '#b6';
				
				//cache variables for optimized performance
				var $body = $('body'); 
				var $boot = $('#boot');
				var $button = $('button');
				var $email = $('#emailbutton');
				var $header = $('header');
				var $title = $('#title');
				var $ind = $('#indicator'); 
				var $balls = $('.ball'); 
				var $welcome = $('#welcome');
				var $about = $('#about');
				var $projects = $('#projects'); 
				var $recordings = $('#recordings'); 
				var $experience = $('#experience'); 
				var $contact = $('#contact');
				var $address = $('#addressbox'); 
				var $footer = $('#f');  
				
				//init to blank page
				$boot.css('display', 'none'); 
				$header.css('display', 'none'); 
				$about.css('display', 'none');  
				$welcome.css('display', 'none'); 
				$projects.css('display', 'none'); 
				$recordings.css('display', 'none'); 
				$experience.css('display', 'none');
				$contact.css('display', 'none');
				$balls.css('display', 'none');   
				$footer.css('display', 'none');
				$address.css('display', 'none'); 
				
				//prime color
				$body.css('background-color', '#DFC184'); 
				
				var fade = 500;
				
				$boot.fadeTo(fade, .5, function(){
					
				}).delay(fade).fadeTo(fade, 0, function(){
					$boot.empty();
					$body.css('background-color', '#2A75A9'); 
					$header.delay(100).fadeIn(fade); 
					$welcome.delay(100).fadeIn(fade);
					$balls.delay(100).fadeIn(fade); 
					$footer.delay(100).fadeIn(fade);
				});
				
				var cursor = 0; 
				var temp = cursor; 
				
				$(balls[cursor]).toggleClass('selected');
				
				$(document).keydown(function(key) {
        			switch(parseInt(key.which,10)) {
						case 37://left arrow
							temp = cursor; 
							if (cursor===0){
								cursor = 5; 
							} else {
								--cursor;
							}
							break;
						case 39://right arrow
							temp = cursor; 
							cursor = ++cursor % pages.length;
							break;
						default:
							//blank for now
							break;
					}
					$(pages[temp]).slideUp(fade); 
					$(balls[temp]).toggleClass('selected');
					$(pages[cursor]).delay(fade).slideDown(fade);  
					$(balls[cursor]).toggleClass('selected');
				});
				
				$balls.mouseover(function(){
					var thisId = $(this).attr('id');
					$(this).addClass('ballhover');
					$title.fadeOut(fade/4, function(){
						switch(thisId){
							case 'b1':
								$title.text('Welcome');
								break;
							case 'b2':
								$title.text('About');
								break;
							case 'b3':
								$title.text('Projects');
								break;
							case 'b4':
								$title.text('Recordings');
								break;
							case 'b5':
								$title.text('Experience');
								break;
							case 'b6':
								$title.text('Contact');
								break;
						}
						$title.fadeIn(fade/4);
					});		
				});
				
				$balls.mouseleave(function(){ 
					$(this).removeClass('ballhover');
				}); 
				
				$ind.mouseleave(function(){ 
					$title.fadeOut(fade/4, function(){
						$title.text('Jasper Boyd');
						$title.fadeIn(fade/4);
					});
				});
				
				$balls.click(function(){
					var thisId = $(this).attr('id');
					temp = cursor; 
					$(balls[temp]).toggleClass('selected');
					$(pages[temp]).slideUp(fade); 
					switch(thisId){
							case 'b1':
								cursor = 0;
								break;
							case 'b2':
								cursor = 1;
								break;
							case 'b3':
								cursor = 2;
								break;
							case 'b4':
								cursor = 3;
								break;
							case 'b5':
								cursor = 4;
								break;
							case 'b6':
								cursor = 5;
								break;
					}
					
					$(balls[cursor]).toggleClass('selected');
					$(pages[cursor]).delay(fade).slideDown(fade); 
				});
				
				$button.mouseover(function(){
					$(this).addClass('buttonhover');
				});
				
				$button.mouseleave(function(){ 
					$(this).removeClass('buttonhover');
				}); 
			});