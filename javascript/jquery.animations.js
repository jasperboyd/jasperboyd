//Author:   Jasper Boyd
//Date: 	03/12/2013
$(document).ready(function () {
					
				//navigation
				var pages = new Array();
				pages[0] = '#welcome';
				pages[1] = '#projects';
				pages[2] = '#recordings';
				pages[3] = '#experience';
				pages[4] = '#contact';
				var balls = new Array(); 
				balls[0] = '#b1';
				balls[1] = '#b2';
				balls[2] = '#b3';
				balls[3] = '#b4';
				balls[4] = '#b5';
				
				//cache variables for optimized performance
				//organize variables by page
				
				//General
				var $restart_b = $('#restart_b'); 
				var $body = $('body'); 
				var $footer = $('footer'); 
				
				//Boot
				var $boot = $('#boot');
				var $button = $('button');
				
				
				//Title
				var $header = $('header');
				var $title = $('#title');
				
				//Nav
				var $ind = $('#indicator'); 
				var $balls = $('.ball'); 
				
				//Welcome
				var $welcome = $('#welcome');
				var $welcome_h = $('#welcomeheader'); 
				var $welcome_c = $('#welcomecontent'); 
				var $welcome_t = $('#welcometext'); 
				var $welcome_p = $('#welcomepic'); 
				
				//About
				//var $about = $('#about');
				
				//Project
				var $projects = $('#projects'); 
				var $pro_link = $('#pro_link'); 
				
				//Recording
				var $recordings = $('#recordings');
				var $albums = $('.album');
				var $album_g = $('#albumgrid'); 
				var $rec_link = $('#rec_link'); 
				var $rec_text = $('#rec_text');  
				var $in_sub = $('#in_sub'); 
				var $in_sub_l = $('#in_sub_link'); 
				
				//Experience
				var $experience = $('#experience'); 
				var $exp_link = $('#exp_link'); 
				var $courses_expand = $('#current_c');
				var $courses = $('#courses');  
				var $razzo_expand = $('#razzo_exp'); 
				var $razzo = $('#razzo');
				var $events_expand = $('#office_exp'); 
				var $events = $('#eventsoffice'); 
				var $swater_expand = $('#salt_exp'); 
				var $swater = $('#swater'); 
				var $clarks_expand = $('#clarks_exp');
				var $clarks = $('#clarks');
				var $tmc_expand = $('#tmc_exp');
				var $tmc = $('#tmc');   
				
				var courses_exp = 0; 
				var razzo_exp = 0; 
				var events_exp = 0; 
				var swater_exp = 0; 
				var clarks_exp = 0; 
				var tmc_exp = 0;
				
				//Contact
				var $contact = $('#contact');
				var $con_link = $('.con_link');
				var $address = $('#addressbox'); 
				var $address_b = $('#addressbutton');
				var $email = $('#emailbutton'); 
				 
				
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
					i_w -= 40; 
					$welcome_h.css('width', 2*i_w); 
					var t_w = i_w*2;
					t_w /= 3;  
					t_w -= 40;
					$welcome_t.css('width', 2*t_w);
					i_w /= 2; 
					i_w += 60;
					$welcome_p.css('width', i_w);
				}
				
				var renderAlbumArt = function(){
					var inner_w = $recordings.innerWidth(); 
					album_w = inner_w/3; 
					album_w -= 80; //padding
					album_w -= 8; //border
					$albums.css('width', album_w);
					$albums.css('height', album_w);
					inner_w -= 180; //offset
					$album_g.css('width', inner_w); 
				}
				
				//Changes the page hiding and showing the content
				function render(t, c){					
					$(pages[t]).slideUp(fade/3, function(){
						switch(c){
							case 2: 
								renderAlbumArt();
								break; 	
						}	
						$(balls[t]).toggleClass('selected');
						$(pages[c]).delay(fade/3).slideDown(fade/3, function(){
							renderWelcome();
						});
						
						$(balls[c]).toggleClass('selected');
						
					});	
				}
				
				//Boot Animation
				var boot = function (){
					$boot.fadeTo(fade, 1, function(){
						$boot.delay(fade).fadeTo(fade, 0, function(){
							$boot.empty();
							$body.css('background-color', '#274257');
							$restart_b.fadeIn(fade, function(){
								$header.fadeIn(fade, function(){
									$(balls[0]).toggleClass('selected');
									render(temp, cursor);
									$balls.fadeIn(fade, function(){
											$footer.fadeIn(fade, function(){  
												$welcome_p.fadeIn(fade);
										});
									});
								});
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
							render(temp, cursor); 
							break;
						case 39://right arrow
							temp = cursor; 
							cursor = ++cursor % pages.length;
							render(temp, cursor); 
							break;
					}
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
				
				$restart_b.click(function(){
					location.reload();
				});  
				
				//Links
				
				//Experience
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
				
				//Projects
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
				
				//Recordings
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
				
				//Contact
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
				
				//In Submission
				$in_sub_l.mouseover(function(){ 
					$in_sub.css('border', '1px solid #DFC184')
				});
				
				$in_sub_l.mouseleave(function(){ 
					$in_sub.css('border', '0px solid #DFC184')
				});
				
				//Experience Page
				$courses_expand.click(function(){
					$courses.fadeToggle(fade);
					if (courses_exp === 0){
						courses_exp = 1; 
						$courses_expand.text('-');
					} else { 
						courses_exp = 0; 
						$courses_expand.text('+');
					}
				}); 
				
				$razzo_expand.click(function(){ 
					$razzo.fadeToggle(fade);
					if (razzo_exp === 0){
						razzo_exp = 1; 
						$razzo_expand.text('-');
					} else { 
						razzo_exp = 0; 
						$razzo_expand.text('+');
					}
				}); 
				
				$events_expand.click(function(){ 
					$events.fadeToggle(fade);
					if (events_exp === 0){
						events_exp = 1; 
						$events_expand.text('-');
					} else { 
						events_exp = 0; 
						$events_expand.text('+');
					}
				}); 
				
				$swater_expand.click(function(){
					$swater.fadeToggle(fade); 
					if (swater_exp === 0){
						swater_exp = 1; 
						$swater_expand.text('-');
					} else { 
						swater_exp = 0; 
						$swater_expand.text('+');
					}
				}); 
				
				$clarks_expand.click(function(){
					$clarks.fadeToggle(fade);
					if (clarks_exp === 0){
						clarks_exp = 1; 
						$clarks_expand.text('-');
					} else { 
						clarks_exp = 0; 
						$clarks_expand.text('+');
					}
				});  
				
				$tmc_expand.click(function(){ 
					$tmc.fadeToggle(fade); 
					if (tmc_exp === 0){
						tmc_exp = 1; 
						$tmc_expand.text('-');
					} else { 
						tmc_exp = 0; 
						$tmc_expand.text('+');
					}
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
				
				$address_b.click(function(){
					$address.fadeToggle(fade, 'swing');
				});
				
				//begin the program
				boot();
			});