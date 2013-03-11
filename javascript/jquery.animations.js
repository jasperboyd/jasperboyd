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
				var $welcome_c = $('#welcomecontent'); 
				var $welcome_t = $('#welcometext'); 
				var $welcome_p = $('#welcomepic'); 
				var $about = $('#about');
				var $projects = $('#projects'); 
				var $pro_link = $('#pro_link'); 
				var $recordings = $('#recordings');
				var $albums = $('.album');
				var $rec_link = $('#rec_link');  
				var $experience = $('#experience'); 
				var $exp_link = $('#exp_link'); 
				var $contact = $('#contact');
				var $con_link = $('#con_link');
				var $address = $('#addressbox'); 
				var $footer = $('#f');  
				
				//init to blank page
				$('.init_blank').css('display', 'none'); 
				
				//prime color
				$body.css('background-color', '#DFC184'); 
				
				var fade = 500;
				
				var cursor = 0; 
				var temp = 0; //init to -1
				
				var renderWelcome = function(){
					var i_w = $welcome_c.innerWidth();
					i_w /= 2; 
					i_w -= 20; 
					$welcome_t.css('width', i_w);
					$welcome_p.css('width', i_w);
				}
				
				var renderAlbumArt = function(){
					var inner_w = $recordings.innerWidth(); 
					inner_w /= 3; 
					album_w = inner_w; 
					album_w -= 20; //padding
					album_w -= 18; //border
					$albums.css('width', album_w);
					$albums.css('height', album_w); 
				}
				
				//Changes the page hiding and showing the content
				function render(t, c){					
					$(pages[t]).slideUp(fade/2, function(){
						switch(c){
							case 2: 
								renderAlbumArt();
								break; 	
						}	
						$(balls[t]).toggleClass('selected');
						$(pages[c]).delay(fade/2).slideDown(fade/2, function(){
							renderWelcome();
						});
						
						$(balls[c]).toggleClass('selected');
						
					});	
				}
				
				//Boot Animation
				var boot = function (){
					$boot.fadeTo(fade, .5, function(){
						$boot.fadeTo(fade, 0, function(){
							$boot.empty();
							$body.css('background-color', '#2A75A9');
							$header.fadeIn(fade);
							$balls.fadeIn(fade);
							$footer.fadeIn(fade, function(){ 
								render(temp, cursor); 
								$welcome.delay(100).fadeIn(fade);
								$(balls[0]).toggleClass('selected');
							});
						});
					});	 
				}
				
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
					render(temp, cursor); 
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
					render(temp, cursor); 
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
					render(temp, cursor); 
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
					render(temp, cursor); 
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
					render(temp, cursor); 
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
					render(temp, cursor); 
				}); 
				
				//Resize Function for Album Art
				$(window).resize(function(){ 
					switch(cursor){
						case 0:	
							renderWelcome(); 
							break; 
						case 2:
							renderAlbumArt();
							break;
					}
				});
				
				boot();
			});