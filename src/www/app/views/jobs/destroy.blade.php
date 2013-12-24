@extends('layouts.master')

@section('content')

<article class="job_destroyer">

<p>Destroy record for <span class="highlight">{{$job->title}}</span>?</p>

{{Form::open(array('route' => array('jobs.destroy', $job->id), 'method' => 'DELETE'))}}

{{Form::submit('Yes')}}

{{Form::close()}}

{{link_to_route('jobs.index', 'back to index')}}

</article> 

@stop