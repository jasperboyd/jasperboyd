@extends('layouts.master')

@section('content')

<article class="project_profile">

<h1>{{$project->title}}</h1> 
<h2>{{$project->subtitle}}</h2> 
<p>{{$project->description}}</p>

</article>

@stop