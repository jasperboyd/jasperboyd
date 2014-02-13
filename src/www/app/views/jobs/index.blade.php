<h2>Jobs</h2>

@foreach($jobs as $job)
<section class="job">
	<h2>{{$job->title}} - {{$job->company}}</h2>
	<h3>{{$job->date_range}}</h3>
	<p>{{$job->summary}}</p>

@if(Auth::check())
	@if(Auth::user()->admin == true)
	<section class="admin_controls"> 
		<h4>Admin Controls</h4>
		{{link_to_route('jobs.edit', 'edit', $job->id)}} |
		{{link_to_route('jobs.showDestroy', 'delete', $job->id)}}
	</section> 
	@endif
@endif

</section>
@endforeach