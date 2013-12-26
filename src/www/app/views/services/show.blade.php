@extends('layouts.master')

@section('content')

<article class="service_profile"> 

<h1>{{$service->name}}</h1> 
<h2>Cost: {{$service->cost}}$</h2>

@if($service->more_info != NULL)
<p>{{$service->more_info}}</p>
@endif

@if(Auth::check())
	<p>{{link_to_route('orders.create', 'Order', $service->id)}}</p> 
@endif

</article>

@stop