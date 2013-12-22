@extends('layouts.master')

@section('content')

<article class="album">

<h1>{{$album->title}}</h1> 
<h2>{{$album->artist}}</h2>

</article>

@stop 