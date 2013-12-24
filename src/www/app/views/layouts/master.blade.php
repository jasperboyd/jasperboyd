<html>

<head>
	<title>Jasper Boyd is a web developer and musician, on this site you can order a website, read his thoughts, and listen to his music.</title>
	<link href='http://fonts.googleapis.com/css?family=Lato:900,300|Sorts+Mill+Goudy:400,400italic' rel='stylesheet' type='text/css'>
	{{ HTML::style('css/screen.css') }}
</head>

<body>

	<header> 
		<h1>{{link_to_route('home.welcome', 'Jasper Boyd')}}</h1> 
		<h2><span class="highlight">Web Developer / Musician</span></h2> 

	<nav> 
		@if(Auth::check())
			@if(Auth::user()->admin == true)
				<section class="admin_tasks">
					<h1>Admin</h1>
					{{link_to_route('orders.index', 'Orders')}}
				</section>
			@endif 
		@endif

		@if(Auth::check())
			<section class="user_tasks">
				<h1>User</h1>
				
				{{link_to_route('home.dash', 'dashboard')}}
				{{link_to_route('home.webdev', 'Order A Website')}}
				{{link_to_route('users.edit', 'Settings', Auth::user()->id)}}
				{{link_to_route('session.destroy', 'Logout')}}
			</section>
		@endif

		<section class="site_navigation">
			<h1>Index</h1>

			{{link_to_route('albums.index', 'Music')}}
			{{link_to_route('projects.index', 'Projects')}}
			{{link_to_route('thoughts.index', 'Thoughts')}}
			{{link_to_route('home.resume', 'Resume')}}
	
			@if(!Auth::check())
				{{link_to_route('home.webdev', 'Order A Website')}}
				{{link_to_route('session.create', 'Login')}}
			@endif 
		</section>
	</nav>

	</header> 

	@yield('content') 

	<footer>
		@if(!Auth::check())
		<h6>Jasper Boyd, 2014</h6>
		@else
		<h6>Hello {{Auth::user()->first_name}}</h6>
		@endif
	</footer>

</body>

</html>