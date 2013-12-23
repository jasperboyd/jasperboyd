@extends('layouts.master')

@section('content')

<article class="order_editor">

	<h1>Edit {{$order->title}}</h1>

	{{Form::model($order, array('route' => array('orders.update', $order->id), 'method' => 'PUT'))}}

	@include('orders.partials.form')


	<p>
		{{Form::submit('Update')}}
	</p>

	{{Form::close()}}

</article>

@stop 