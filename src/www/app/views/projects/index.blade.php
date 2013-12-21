@extends('layouts.master')

@section('content')

<article>
	
<h1>Projects</h1> 

@foreach($projects as $project)

<section class="project"> 

	<h2>
	
		@if($project->project_url != NULL)
		<a href="{{$project->project_url}}">
		@endif

		{{$project->title}}
		
		@if($project->project_url != NULL)
		</a> 
		@endif
	
	</h2>
	
	<p>{{$project->description}}</p> 

</section>

@endforeach

</article>

@stop