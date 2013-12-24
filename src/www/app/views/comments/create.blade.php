<section class="comment_creator">
{{Form::open(array('route' => array('comments.store', $order->id)))}}
	<p>
		{{Form::text('comment')}}

		{{Form::submit('comment')}}
	</p>
{{Form::close()}}
</section>