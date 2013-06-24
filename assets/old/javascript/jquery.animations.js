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
				
				var $in_sub_l = $('#in_sub_link'); 
				
				//Album Covers
				var $tge_cover = $('#tge_cover'); 
				var $par_cover = $('#par_cover'); 
				var $isu_cover = $('#isu_cover'); 
				var $bri_cover = $('#bri_cover'); 
				var $rdi_cover = $('#rdi_cover'); 
				var $dos_cover = $('#dos_cover');
				var $bro_cover = $('#bro_cover'); 
				var covers = new Array(); 
				covers[0] = $tge_cover; 
				covers[1] = $par_cover; 
				covers[2] = $isu_cover; 
				covers[3] = $bri_cover; 
				covers[4] = $rdi_cover; 
				covers[5] = $dos_cover; 
				covers[6] = $bro_cover; 
				
				//Players
				var $tge_player = $('#tge_player');
				var $par_player = $('#par_player'); 
				var $isu_player = $('#isu_player'); 
				var $bri_player = $('#bri_player'); 
				var $rdi_player = $('#rdi_player'); 
				var $dos_player = $('#dos_player'); 
				var $bro_player = $('#bro_player'); 
				var players = new Array(); 
				players[0] = $tge_player;
				players[1] = $par_player;
				players[2] = $isu_player; 
				players[3] = $bri_player; 
				players[4] = $rdi_player; 
				players[5] = $dos_player; 
				players[6] = $bro_player; 
				
				var $hideplayer = $('.hideplayer'); 
				
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
				 
				$('.init_blank').css('display', 'none'); 
				
				$body.css('background-color', '#DFC184'); 
				
				var fade = 500;
				
				var cursor = 0; 
				var temp = 0; 
				
				var album_cursor = -1; 
				var last_album = -1; 
				
				/*
				===================================================
				closeAlbumPlayer: 
				
				Closes the music player for any album that was just
				clicked. 
				===================================================
				*/
				var closeAlbumPlayer = function(c){ 
					if (album_cursor === c){
						players[c].fadeToggle(); 
						album_cursor = -1; 
						last_album = -1; 
					}
				}
				
				/*
				===================================================
				openAlbumPlayer: 
				
				Opens the music player for any album that was just
				clicked. 
				===================================================
				*/
				var openAlbumPlayer = function(c){ 
					if (album_cursor === -1 && last_album === -1) {
						album_cursor = c; 
						players[album_cursor].fadeToggle(function(){
							$('html, body').animate({ scrollTop: 1000 }, 300);
						}); 
					} else if (album_cursor === c) {
						$('html, body').animate({ scrollTop: 1000 }, 300);
					} else { 
						last_album = album_cursor; 
						album_cursor = c; 
						players[last_album].fadeToggle(function(){
							players[album_cursor].fadeToggle(function(){
								$('html, body').animate({ scrollTop: 1000 }, 300);
							}); 
						});
					}
				}
				
				/*
				===================================================
				renderWelcome: 
				
				Insures proper position of picture and text for 
				a collapsing browser page. 
				===================================================
				*/
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
				
				/*
				===================================================
				renderAlbumArt: 
				
				Insures proper grid formatting of album art in the
				recording section. 
				===================================================
				*/
				var renderAlbumArt = function(){
					var inner_w = $recordings.innerWidth(); 
					album_w = inner_w/3; 
					album_w -= 80; 
					album_w -= 8; 
					$albums.css('width', album_w);
					$albums.css('height', album_w);
					inner_w -= 180; 
					$album_g.css('width', inner_w); 
				}
				
				/*
				===================================================
				render: 
				
				renders the next page taking current page, and
				the target page as parameters. 
				===================================================
				*/
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
				
				/*
				===================================================
				boot: 
				
				shows a splash screen before loading the site. 
				===================================================
				*/
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
				//Recording Page
					
					//In Submission Link
				$in_sub_l.mouseover(function(){ 
					$isu_cover.css('border', '1px solid #DFC184')
				});
				
				$in_sub_l.mouseleave(function(){ 
					$isu_cover.css('border', '0px solid #DFC184')
				});
				
				$albums.click(function(){
					var thisId = $(this).attr('id');
					var choice; 
					switch(thisId){
							case 'tge_cover':
								choice = 0;
								break;
							case 'par_cover':
								choice = 1;
								break;
							case 'isu_cover':
								choice = 2;
								break;
							case 'bri_cover':
								choice = 3;
								break;
							case 'rdi_cover':
								choice = 4;
								break;
							case 'dos_cover':
								choice = 5; 
								break; 
							case 'bro_cover': 
								choice = 6; 
								break; 
					}
					openAlbumPlayer(choice); 
				}); 
				 
				$hideplayer.click(function(){
					closeAlbumPlayer(album_cursor); 
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