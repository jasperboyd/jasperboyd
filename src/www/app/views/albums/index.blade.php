@extends('layouts.master')

@section('content')

<article class="music"> 

<h1>Albums</h1> 

@foreach($albums as $album)

	<h2>{{$album->title}}</h2> 

	<h3>{{$album->artist}}</h2> 

@endforeach

</article> 

@stop 