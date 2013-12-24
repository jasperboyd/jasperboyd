@extends('layouts.master')

@section('content')

<article class="skill_destroyer">

<p>Destroy record for <span class="highlight">{{$skill->title}}</span>?</p>

{{Form::open(array('route' => array('skills.destroy', $skill->id), 'method' => 'DELETE'))}}

{{Form::submit('Yes')}}

{{Form::close()}}

{{link_to_route('skills.index', 'back to index')}}

</article> 

@stop