@extends('layouts.master')

@section('content')

@if(Auth::check())
	@if(Auth::user()->admin == true)
		<article class="job_creator">
			@include('jobs.create')
		</article>

		<article class="skill_creator">
			@include('skills.create')
		</article>
	@endif
@endif

<article class="resume">

<h1>Resume</h1>

@include('jobs.index')

@include('skills.index')

</article>

@stop