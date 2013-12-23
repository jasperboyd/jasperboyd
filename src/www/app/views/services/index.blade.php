<h2>Services</h2> 

<ul> 
@foreach($services as $service)
<section class="service"> 	
	<li class="name"><a href="{{route('services.show', $service->id)}}">{{$service->name}}</a></li>
	<ul>
		<li class="description"><span class="highlight">Description:</span>{{$service->description}}</li>
		<li class="cost"><span class="highlight">Cost:</span>{{$service->cost}}$</li>
		@if(Auth::check())
			<li>{{link_to_route('orders.create', 'Order', $service->id)}}</li> 
		@endif
	</ul>	

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
</ul>