@extends('layouts.master')

@section('content')

<article class="thought_destroyer">

<p>Destroy record for <span class="highlight">{{$thought->title}}</span>?</p>

{{Form::open(array('route' => array('thoughts.destroy', $thought->id), 'method' => 'DELETE'))}}

{{Form::submit('Yes')}}

{{Form::close()}}

{{link_to_route('thoughts.index', 'back to index')}}

</article> 

@stop