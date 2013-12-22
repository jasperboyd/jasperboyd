@extends('layouts.master')

@section('content')

<article class="service_editor"> 

@if($errors->any())
  <ul>
    {{ implode('', $errors->all('<li>:message</li>'))}}
  </ul>
@endif

<h1>Service Editor</h1>

{{Form::model($service, array('route' => array('services.update', $service->id), 'method' => 'PUT'))}}

@include('services.partials.form')

{{Form::submit()}}

{{Form::close()}}

</article>

@stop

