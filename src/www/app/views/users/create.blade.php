@if($errors->any())
  <ul>
    {{ implode('', $errors->all('<li>:message</li>'))}}
  </ul>
@endif

{{Form::open(['route' => 'users.store'])}}
	<h3>Required</h3>
	<p> 
		{{Form::label('email', 'Email:')}}
		{{Form::text('email')}}
	</p> 
	<p> 
		{{Form::label('password', 'Password:')}}
		{{Form::password('password')}}
	</p> 

	<p> 
		{{Form::label('confirm_password', 'Confirm Password:')}}
		{{Form::password('confirm_password')}}
	</p> 

	<h3>Extra Info</h3>
	<p>
	{{Form::label('company_name', 'Company Name:')}}
	{{Form::text('company_name')}}
	</p>
	<p>
	{{Form::label('first_name', 'First Name:')}}
	{{Form::text('first_name')}}
	</p> 
	<p> 
	{{Form::label('last_name', 'Last Name:')}}
	{{Form::text('last_name')}}
	</p> 

	<p>
		{{Form::submit('Create Account')}}
	</p>
	
{{Form::close()}}