<h1>Projects Creator</h1> 

{{Form::open(array('route' => 'projects.store'))}}

@include('projects.partials.form')

{{Form::submit('create')}}

{{Form::close()}}