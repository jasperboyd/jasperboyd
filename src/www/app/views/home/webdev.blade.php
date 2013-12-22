@extends('layouts.master')

@section('content')

<article class="webdev">

<h1>Web Development</h1>

<section class="services"> 

@include('services.index')

</section> 

<section class="register"> 

<h2>Register</h2> 

@include('users.create')

</section> 

<section class="login"> 

<h2>Login</h2> 

@include('auth.login')

</section>

</article>

@stop