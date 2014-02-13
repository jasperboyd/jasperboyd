<h2>Services</h2> 


@foreach($services as $service)
<section class="service"> 	
	<h3 class="name"><a href="{{route('services.show', $service->id)}}">{{$service->name}}</a></h3>
		<h4 class="cost"><span class="highlight">Cost:</span>{{$service->cost}}$</h4>
		<p class="description"><span class="highlight">Description:</span>{{$service->description}}</p>

		@if(Auth::check())
		<section class="controls"> 	
			{{link_to_route('orders.create', 'Order', $service->id)}} 
			{{link_to_route('services.show', 'More Info', $service->id)}}
		</section>
		@endif
		

	@if(Auth::check())
		@if(Auth::user()->admin == true)
		<section class="admin_controls"> 
			<h4>Admin Controls</h4>
			{{link_to_route('services.edit', 'edit', $service->id)}} 
			{{link_to_route('services.showDestroy', 'delete', $service->id)}}
		</section> 
		@endif
	@endif
</section>
@endforeach
