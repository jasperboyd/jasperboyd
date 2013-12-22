@if($errors->any())
  <ul>
    {{ implode('', $errors->all('<li>:message</li>'))}}
  </ul>
@endif

<h1>Service Creator</h1>

{{Form::open(array('route' => 'services.store'))}}

	@include('services.partials.form')

<p>
	{{Form::submit('create')}}
</p>

{{Form::close()}}