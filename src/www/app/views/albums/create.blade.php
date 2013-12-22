<h1>Create an Album</h1> 

{{Form::open(['route' => 'albums.store'])}}
	
	@include('albums.partials.form')

	<p> 
	{{Form::submit('Create')}}
	</p> 

{{Form::close()}}