@extends('layouts.master')

@section('content')

<article class="user_editor">

<h1>Settings</h1>

{{Form::model($user, array('route' => array('users.update', $user->id), 'method' => 'PUT'))}}

	<p> 
	{{Form::label('email', 'Email:')}}
	{{Form::text('email')}}
	</p> 

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
	{{Form::submit('update')}}
	</p>

{{Form::close()}}

@include('users.destroy')

</article>

@stop