@extends('layouts.master')

@section('content')

<article class="thoughts"> 

<h1>Thoughts</h1> 

@foreach($thoughts as $thought)

<section class="thought"> 

	<h2>{{$thought->title}}</h1>

	<p>{{$thought->body}}</p> 

</section> 

@endforeach

</article> 

@stop