<h2>Skills</h2>

@foreach($skills as $skill)
<section class="skill">
	<h2>{{$skill->title}}</h2>
	<p>{{$skill->description}}</p>

@if(Auth::check())
	@if(Auth::user()->admin == true)
	<section class="admin_controls"> 
		<h4>Admin Controls</h4>
		{{link_to_route('skills.edit', 'edit', $skill->id)}} |
		{{link_to_route('skills.showDestroy', 'delete', $skill->id)}}
	</section> 
	@endif
@endif

</section>
@endforeach