{{Form::model($job, array('route' => array('jobs.update', $job->id), 'method' => 'PUT'))}}

@include('jobs.partials.form')

<p>
	{{Form::submit('update')}}
</p>

{{Form::close()}}

