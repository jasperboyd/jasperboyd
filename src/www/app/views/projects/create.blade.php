@if($errors->any())
  <ul>
    {{ implode('', $errors->all('<li>:message</li>'))}}
  </ul>
@endif

<h1>Projects Creator</h1> 

{{Form::open(array('route' => 'projects.store'))}}

@include('projects.partials.form')

<p>
{{Form::submit('create')}}
</p>

{{Form::close()}}