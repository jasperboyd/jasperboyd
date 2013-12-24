<h2>Services</h2> 


@foreach($services as $service)
<section class="service"> 	
	<h3 class="name"><a href="{{route('services.show', $service->id)}}">{{$service->name}}</a></h3>
		<p class="description"><span class="highlight">Description:</span>{{$service->description}}</p>
		<p class="cost"><span class="highlight">Cost:</span>{{$service->cost}}$</p>
		@if(Auth::check())
			<p>{{link_to_route('orders.create', 'Order', $service->id)}}</p> 
		@endif
		

	@if(Auth::check())
		@if(Auth::user()->admin == true)
		<section class="admin_controls"> 
			{{link_to_route('services.edit', 'edit', $service->id)}} |
			{{link_to_route('services.showDestroy', 'delete', $service->id)}}
		</section> 
		@endif
	@endif
</section>
@endforeach
