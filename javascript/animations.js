$(document).ready(function(){
				
				//pages array for navigation
				var pages = new Array();
				
				pages[0] = '#welcome';
				pages[1] = '#projects';
				pages[2] = '#recordings';
				pages[3] = '#experience';
				pages[4] = '#contact';
				
				//array of divs used to navigate
				var balls = new Array(); 
				
				balls[0] = '#b1';
				balls[1] = '#b2';
				balls[2] = '#b3';
				balls[3] = '#b4';
				balls[4] = '#b5';
				
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
				var $pro_link = $('#pro_link'); 
				var $recordings = $('#recordings');
				var $rec_link = $('#rec_link');  
				var $experience = $('#experience'); 
				var $exp_link = $('#exp_link'); 
				var $contact = $('#contact');
				var $con_link = $('#con_link');
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
				
				//Keyboard Navigation
				$(document).keydown(function(key) {
        			switch(parseInt(key.which,10)) {
						case 37://left arrow
							temp = cursor; 
							if (cursor===0){
								cursor = pages.length-1; 
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
				
				
				//Navigation Animations
				$balls.mouseover(function(){
					var thisId = $(this).attr('id');
					$(this).addClass('ballhover');
					$title.fadeOut(fade/4, function(){
						switch(thisId){
							case 'b1':
								$title.text('Welcome');
								break;
							case 'b2':
								$title.text('Projects');
								break;
							case 'b3':
								$title.text('Recordings');
								break;
							case 'b4':
								$title.text('Experience');
								break;
							case 'b5':
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
					}
					
					$(balls[cursor]).delay(fade).toggleClass('selected');
					$(pages[cursor]).delay(fade).slideDown(fade); 
				});
				
				//Button Animations
				$button.mouseover(function(){
					$(this).addClass('buttonhover');
				});
				
				$button.mouseleave(function(){ 
					$(this).removeClass('buttonhover');
				}); 
				
				//Links
				$exp_link.mouseover(function(){
					$title.fadeOut(fade/4, function(){
						$title.text('Experience');
						$title.fadeIn(fade/4); 
					}); 
					$(balls[3]).toggleClass('ballhover');
				}); 
				
				$exp_link.mouseleave(function(){
					$title.fadeOut(fade/4, function(){
						$title.text('Jasper Boyd');
						$title.fadeIn(fade/4); 
					}); 
					$(balls[3]).toggleClass('ballhover');
				}); 
				
				$exp_link.click(function(){
					temp = cursor; 
					cursor = 3; 
					$(balls[temp]).toggleClass('selected');
					$(pages[temp]).slideUp(fade); 
					$(balls[cursor]).delay(fade).toggleClass('selected');
					$(pages[cursor]).delay(fade).slideDown(fade); 
				}); 
				
				$pro_link.mouseover(function(){
					$title.fadeOut(fade/4, function(){
						$title.text('Projects');
						$title.fadeIn(fade/4); 
					}); 
					$(balls[1]).toggleClass('ballhover');
				}); 
				
				$pro_link.mouseleave(function(){
					$title.fadeOut(fade/4, function(){
						$title.text('Jasper Boyd');
						$title.fadeIn(fade/4); 
					}); 
					$(balls[1]).toggleClass('ballhover');
				}); 
				
				$pro_link.click(function(){
					temp = cursor; 
					cursor = 1; 
					$(balls[temp]).toggleClass('selected');
					$(pages[temp]).slideUp(fade); 
					$(balls[cursor]).delay(fade).toggleClass('selected');
					$(pages[cursor]).delay(fade).slideDown(fade); 
				}); 
				
				$rec_link.mouseover(function(){
					$title.fadeOut(fade/4, function(){
						$title.text('Recordings');
						$title.fadeIn(fade/4); 
					}); 
					$(balls[2]).toggleClass('ballhover');
				}); 
				
				$rec_link.mouseleave(function(){
					$title.fadeOut(fade/4, function(){
						$title.text('Jasper Boyd');
						$title.fadeIn(fade/4); 
					}); 
					$(balls[2]).toggleClass('ballhover');
				}); 
				
				$rec_link.click(function(){
					temp = cursor; 
					cursor = 2; 
					$(balls[temp]).toggleClass('selected');
					$(pages[temp]).slideUp(fade); 
					$(balls[cursor]).delay(fade).toggleClass('selected');
					$(pages[cursor]).delay(fade).slideDown(fade); 
				}); 
				
				$con_link.mouseover(function(){
					$title.fadeOut(fade/4, function(){
						$title.text('Recordings');
						$title.fadeIn(fade/4); 
					}); 
					$(balls[4]).toggleClass('ballhover');
				}); 
				
				$con_link.mouseleave(function(){
					$title.fadeOut(fade/4, function(){
						$title.text('Jasper Boyd');
						$title.fadeIn(fade/4); 
					}); 
					$(balls[4]).toggleClass('ballhover');
				}); 
				
				$con_link.click(function(){
					temp = cursor; 
					cursor = 4; 
					$(balls[temp]).toggleClass('selected');
					$(pages[temp]).slideUp(fade); 
					$(balls[cursor]).delay(fade).toggleClass('selected');
					$(pages[cursor]).delay(fade).slideDown(fade); 
				}); 
			});