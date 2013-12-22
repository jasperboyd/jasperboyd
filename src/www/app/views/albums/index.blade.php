@extends('layouts.master')

@section('content')

@if(Auth::check())
	@if(Auth::user()->admin == true)
	<article class="album_creator"> 
		@include('albums.create')
	</article> 
	@endif
@endif

<article class="music"> 

<h1>Albums</h1> 

@foreach($albums as $album)

	<h2><a href="{{route('albums.show', $album->id)}}">{{$album->title}}</a></h2> 

	<h3>{{$album->artist}}</h3> 

	<img src="{{$album->image_url}}" />

@if(Auth::check())
	@if(Auth::user()->admin == true)
	<section class="admin_controls"> 
		{{link_to_route('albums.edit', 'edit', $album->id)}} |
		{{link_to_route('albums.showDestroy', 'delete', $album->id)}}
	</section> 
	@endif
@endif

@endforeach

</article> 

@stop 