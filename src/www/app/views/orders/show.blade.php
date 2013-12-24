@extends('layouts.master')

@section('content')

<article class="order_profile">

<h1>{{$order->title}}</h1>
<h2>Summary</h2> 
<p>{{$order->summary}}</p>
<h2>More Info</h2>
<p>{{$order->more_info}}</p>
<h2>Design Elements</h2>


<section class="controls">
	{{link_to_route('orders.edit', 'edit', $order->id)}} | 
	{{link_to_route('orders.showDestroy', 'destroy', $order->id)}}
</section> 

</article>

@stop