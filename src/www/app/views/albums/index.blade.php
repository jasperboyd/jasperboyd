@extends('layouts.master')

@section('content')

<article class="album_creator"> 
@if(Auth::user()->admin == true)
	@include('albums.create')
@endif
</article> 

<article class="music"> 

<h1>Albums</h1> 

@foreach($albums as $album)

	<h2><a href="{{route('albums.show', $album->id)}}">{{$album->title}}</a></h2> 

	<h3>{{$album->artist}}</h2> 


	@if(Auth::user()->admin == true)
	<section class="admin_controls"> 
		{{link_to_route('albums.edit', 'edit', $album->id)}} |
		{{link_to_route('albums.showDestroy', 'delete', $album->id)}}
	</section> 
	@endif

@endforeach

</article> 

@stop 