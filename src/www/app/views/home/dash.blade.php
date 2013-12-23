@extends('layouts.master')

@section('content')

<article class="dash"> 

<h1>Dashboard</h1>


<h2>Your Orders</h2>

@foreach($orders as $order)

<section class="order">

<h3>{{$order->title}}</h3>
<p><span class="highlight">Summary</span>{{$order->summary}}</p>
<p><span class="highlight">More Info</span>{{$order->more_info}}</p>

<section class="controls">
	{{link_to_route('orders.edit', 'edit', $order->id)}} | 
	{{link_to_route('orders.showDestroy', 'destroy', $order->id)}}
</section> 

</section>

@endforeach

</article> 

@stop