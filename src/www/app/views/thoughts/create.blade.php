@if($errors->any())
  <ul>
    {{ implode('', $errors->all('<li>:message</li>'))}}
  </ul>
@endif

<h1>Thoughts Creator</h1>

{{Form::open(array('route' => 'thoughts.store'))}}
	@include('thoughts.partials.form')

<p>
{{Form::submit('think')}}
</p> 

{{Form::close()}}