<h1>Job Creator</h1>

{{Form::open(array('route' => 'jobs.store'))}}

@include('jobs.partials.form')

<p>
	{{Form::submit('create')}}
</p>

{{Form::close()}}