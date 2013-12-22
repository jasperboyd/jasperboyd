<h2>Services</h2> 

<ul> 
@foreach($services as $service)
	
	<li class="name">{{$service->name}}</li>
	<ul>
		<li class="description"><span class="highlight">Description:</span>{{$service->description}}</li>
	</ul>	
@endforeach
</ul>