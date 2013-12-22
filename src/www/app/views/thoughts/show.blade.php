@extends('layouts.master')

@section('content')

<article class="thought_profile"> 

<h1>{{$thought->title}}</h1>
<p>{{$thought->body}}</p>

</article>

@stop