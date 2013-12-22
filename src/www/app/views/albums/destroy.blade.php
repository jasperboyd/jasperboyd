@extends('layouts.master')

@section('content')

<article class="album_destroyer">

<p>Destroy record for <span class="highlight">{{$album->title}}</span>?</p>

{{Form::open(array('route' => array('albums.destroy', $album->id), 'method' => 'DELETE'))}}

{{Form::submit('Yes')}}

{{Form::close()}}

{{link_to_route('albums.index', 'back to index')}}

</article> 

@stop