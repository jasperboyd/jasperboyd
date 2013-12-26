@include('layouts.master')

<article class="comment_editor">

<h1>Edit Your Comment</h1>

{{Form::model($comment, array('route' => array('comments.update', $comment->id), 'method' => 'PUT'))}}

	<p>
		{{Form::text('comment')}}
	</p>

	<p>
		{{Form::submit('update')}}
	</p>

{{Form::close()}}

</article>
