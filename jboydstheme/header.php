<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package jboydstheme
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title>Jasper Boyd's Blog</title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="http://www.jboyd.co/blog/xmlrpc.php" />
<link href='http://fonts.googleapis.com/css?family=Raleway:100|Ubuntu+Mono:400,400italic|Merriweather:300italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=BenchNine:400,300,700' rel='stylesheet' type='text/css'>
	<script src="http://code.jquery.com/jquery-2.0.0.min.js"> </script>
	<script src="/blog/wp-content/themes/jboydstheme/js/main.js"></script>
	<script src="/blog/wp-content/themes/jboydstheme/js/secnav.js"></script>
	<link rel="icon" href="/favicon.gif" type="image/gif" />
	<link rel="apple-touch-icon" href="/apple-touch-icon.png" />
	<script>
 	 (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
 	 m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
 	 })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

 	 ga('create', 'UA-42082641-1', 'jboyd.co');
 	 ga('send', 'pageview');
	</script>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<?php do_action( 'before' ); ?>
	<header id="masthead"> 
	<h1><a id="titlelink" href="/">Jasper Boyd</a></h1>
	<h2><a href="/music">Musician</a> & <a href="/web">Web Designer</a></h2>
	</header><!-- #masthead -->
	<nav id="mastnav">
			<a id="bloglink" class="selected">Blog</a>
			<a id="musiclink" href="/music">Music</a> 
			<a id="weblink" href="/web">Web</a> 
			<a id="resumelink" href="/resume">Resume</a>
			<a id="contactlink">Contact</a>
			<section id="contact" class="initblank"> 
				<a id="addresslink">Address</a> 
				<a href="mailto:jasperboyd@lavabit.com">Email</a>
				<section id="address" class="initblank">
					<p>
					   Campus Box 210 <br />
					   Clark U <br /> 
					   Worcester, MA 01610 <br />
					</p>
				</section>
			</section>
	</nav> 
	<nav id="secnav"> 
		<a id="search_link">Search</a>
		<a id="archives_link">Archives</a> 
		<a id="tt_link">To Top</a>
	</nav> 
	<div id="main" class="site-main">
