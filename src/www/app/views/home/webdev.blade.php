@extends('layouts.master')

@section('content')

@if(Auth::user()->admin == true)
	<article class="service_creator"> 
		@include('services.create')
	</article> 
@endif

<article class="webdev">

<h1>Web Development</h1>

<section class="services"> 

@include('services.index')

</section> 

@if(!Auth::check())
<section class="register"> 

<h2>Register</h2> 

@include('users.create')

</section> 

<section class="login"> 

<h2>Login</h2> 

@include('auth.login')

</section>
@endif

</article>

@stop