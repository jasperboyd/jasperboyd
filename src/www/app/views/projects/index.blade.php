@extends('layouts.master')

@section('content')

<article class="project_creator"> 
@if(Auth::user()->admin == true)
	@include('projects.create')
@endif
</article> 

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

	@if($project->subtitle != NULL)
	<h3>{{$project->subtitle}}</h3> 
	@endif

	<p>{{$project->description}}</p> 

	@if(Auth::user()->admin == true)
	<section class="admin_controls"> 
		{{link_to_route('projects.edit', 'edit', $project->id)}} |
		{{link_to_route('projects.showDestroy', 'delete', $project->id)}}
	</section> 
	@endif

</section>

@endforeach

</article>

@stop