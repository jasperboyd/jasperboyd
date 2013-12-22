@if (Session::has('login_errors'))
  <span class="error">Email or password incorrect.</span>
@endif

{{Form::open(['route' => 'session.store'])}}

	<p> 
	{{Form::label('email', 'Email:')}}
	{{Form::text('email')}}
	</p> 

	<p>
	{{Form::label('password', 'Password:')}}
	{{Form::password('password')}}
	</p>

	<p>
	{{Form::submit('Login')}}
	</p>

{{Form::close()}}