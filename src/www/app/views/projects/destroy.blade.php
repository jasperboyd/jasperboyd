@extends('layouts.master')

@section('content')

<article class="project_destroyer">

<p>Destroy record for <span class="highlight">{{$project->title}}</span>?</p>

{{Form::open(array('route' => array('projects.destroy', $project->id), 'method' => 'DELETE'))}}

{{Form::submit('Yes')}}

{{Form::close()}}

{{link_to_route('projects.index', 'back to index')}}

</article> 

@stop