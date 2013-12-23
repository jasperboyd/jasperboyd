@extends('layouts.master')

@section('content')
	
<article class="order_creator">
	<h1>Create an Order</h1>
	<h2>Service: {{$service->name}}</h2>
	<p>
	Here you can specify what it is that you want me to design. 
	You can also include images or any other types of files (photoshop, indesign, etc.).
	Alternatively if you have a more specific vision in mind you can <a href="mailto:jboyd@clarku.edu">email me</a>,
	and we can setup a phone call to discuss it.
	</p>

	{{Form::open(array('route' => 'orders.store'))}}
	
	@include('orders.partials.form')

	{{Form::hidden('service_id', $service->id)}}

	<p>
		{{Form::submit('order')}}
	</p>

	{{Form::close()}}

</article>

@stop 