@extends('layouts.master')

@section('content')

<article class="order_destroyer">

<p>Destroy record for <span class="highlight">{{$order->title}}</span>?</p>

{{Form::open(array('route' => array('orders.destroy', $order->id), 'method' => 'DELETE'))}}

{{Form::submit('Yes')}}

{{Form::close()}}

{{link_to_action('HomeController@dash', 'back to dash')}}

</article> 

@stop