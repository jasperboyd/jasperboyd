<html>

<head>
	<title>Jasper Boyd is a web developer and musician, on this site you can order a website, read his thoughts, and listen to his music.</title>
	<link href='http://fonts.googleapis.com/css?family=Lato:900,300|Sorts+Mill+Goudy:400,400italic' rel='stylesheet' type='text/css'>
	{{ HTML::style('css/screen.css') }}
</head>

<body>

	<header> 
		<h1>{{link_to_route('home.welcome', 'Jasper Boyd')}}</h1> 
		<h2><span class="highlight">Web Developer</span> <span class="normal">|</span> <span class="highlight">Musician</span></h2> 

	<nav> 
		{{link_to_route('albums.index', 'Music')}}
		{{link_to_route('projects.index', 'Projects')}}
		{{link_to_route('thoughts.index', 'Thoughts')}}
		{{link_to_route('home.webdev', 'Order A Website')}}
		@if(!Auth::check())
		{{link_to_route('session.create', 'Login')}}
		@else 
		{{link_to_route('users.edit', 'Settings', Auth::user()->id)}}
		{{link_to_route('session.destroy', 'Logout')}}
		@endif 
	</nav>

	</header> 

	@yield('content') 

	<footer>
		<h6>Jasper Boyd, 2014</h6> 
	</footer>

</body>

</html>