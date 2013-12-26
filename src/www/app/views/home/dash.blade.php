@extends('layouts.master')

@section('content')

<article class="dash"> 

<h1>Dashboard</h1>


<h2>Your Orders</h2>

@foreach($orders as $order)

<section class="order">

<h3>{{$order->title}}</h3>
<h4>Created at: <span class="highlight">{{$order->created_at}}</span> Updated at: <span class="highlight">{{$order->updated_at}}</span></h4>

@if($order->summary != NULL)
	<p><span class="highlight">Summary</span>{{$order->summary}}</p>
@endif

<p><span class="highlight">More Info</span>{{$order->more_info}}</p>

@if($order->design_elements != NULL)
	<p><span class="highlight">Design Elements: </span><a href="{{$order->design_elements}}" target="_blank">Download</a></p>
@endif

<hr>

<h4>Comments</h4>

@foreach($order->comments as $comment)
<section class="comment">
	<p><span class="highlight">{{$comment->user->first_name}}: </span>{{$comment->comment}}</p>
	<h6>Posted At: {{$comment->created_at}} | {{link_to_route('comments.edit', 'edit', $comment->id)}} | {{link_to_route('comments.showDestroy', 'delete', $comment->id)}}</h6>
</section>
@endforeach

@include('comments.create')

<section class="controls">
	{{link_to_route('orders.edit', 'edit', $order->id)}} | 
	{{link_to_route('orders.showDestroy', 'destroy', $order->id)}}
</section> 

</section>

@endforeach

</article> 

@stop