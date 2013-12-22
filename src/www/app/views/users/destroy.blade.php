<h1>Delete</h1>

<p>You will lose all your saved information by doing this.</p>

{{Form::open(array('route'=>'users.destroy', 'method' => 'DELETE'))}}

<p>{{Form::submit('Destroy it!')}}</p>

{{Form::close()}}