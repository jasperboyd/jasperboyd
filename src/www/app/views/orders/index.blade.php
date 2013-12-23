@extends('layouts.master')

@section('content')

<article>

<h1>Orders Up</h1>

@foreach($orders as $order)

<section class="order">
	<h2>{{$order->title}}</h2>
	<h3>Summary</h3>
	<p>{{$order->summary}}</p>
	<h3>More Info</h3> 
	<p>{{$order->more_info}}</p>
</section>

@endforeach

</article>

@stop