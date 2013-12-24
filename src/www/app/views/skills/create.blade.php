<h1>Skill Creator</h1>

{{Form::open(array('route' => 'skills.store'))}}

@include('skills.partials.form')

<p>
	{{Form::submit('create')}}
</p>

{{Form::close()}}