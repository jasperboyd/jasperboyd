@extends('layouts.master')

@section('content')

<article>

<h1>Orders Up</h1>

@foreach($orders as $order)

<section class="order">
	<h2>{{$order->title}}</h2>
	<h3>Created at: <span class="highlight">{{$order->created_at}}</span></h3>
	<h3>Updated at: <span class="highlight">{{$order->updated_at}}</span></h3>
	<p><span class="highlight">Summary: </span>{{$order->summary}}</p>
	<p><span class="highlight">More Info: </span>{{$order->more_info}}</p>
	@if($order->design_elements != NULL)
		<p><span class="highlight">Design Elements: </span><a href="{{$order->design_elements}}" target="_blank">{{$order->design_elements}}</a></p>
	@endif
</section>

@endforeach

</article>

@stop