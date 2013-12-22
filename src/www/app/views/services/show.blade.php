@extends('layouts.master')

@section('content')

<article class="service_profile"> 

<h1>{{$service->name}}</h1> 
<p>{{$service->description}}</p>

</article>

@stop