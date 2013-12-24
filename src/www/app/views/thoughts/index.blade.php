@extends('layouts.master')

@section('content')

@if(Auth::check())
	@if(Auth::user()->admin == true)
		<article class="thought_creator">
			@include('thoughts.create')
		</article>
	@endif
@endif

<article class="thoughts"> 

<h1>Thoughts</h1> 

@foreach($thoughts as $thought)

<section class="thought"> 

	<h2>{{$thought->title}}</h1>

	<p>{{$thought->body}}</p> 

@if(Auth::check())
	@if(Auth::user()->admin == true)
	<section class="admin_controls"> 
		{{link_to_route('thoughts.edit', 'edit', $thought->id)}} |
		{{link_to_route('thoughts.showDestroy', 'delete', $thought->id)}}
	</section> 
	@endif
@endif

</section> 

@endforeach

</article> 

@stop