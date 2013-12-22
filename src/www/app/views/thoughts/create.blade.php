<h1>Thoughts Creator</h1>

{{Form::open(array('route' => 'thoughts.store'))}}
	@include('thoughts.partials.form')

{{Form::submit('think')}}

{{Form::close()}}