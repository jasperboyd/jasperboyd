@extends('layouts.master')

@section('content')

<article class="album">

<h1>{{$album->title}}</h1> 
<h2>{{$album->artist}}</h2>
<h3>Released {{$album->release_date}}</h3> 

<h4>Personnel: {{$album->personnel}}</h4>

<a href="{{$album->bandcamp_url}}" target="_blank">
	<img src="{{$album->image_url}}" />
</a>

<p> 
	{{$album->description}}
</p>

</article>

@stop 