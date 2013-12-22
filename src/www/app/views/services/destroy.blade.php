@extends('layouts.master')

@section('content')

<article class="service_destroyer">

<p>Destroy record for <span class="highlight">{{$service->name}}</span>?</p>

{{Form::open(array('route' => array('services.destroy', $service->id), 'method' => 'DELETE'))}}

{{Form::submit('Yes')}}

{{Form::close()}}

{{link_to_route('services.index', 'back to index')}}

</article> 

@stop