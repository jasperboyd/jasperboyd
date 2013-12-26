@extends('layouts.master')

@section('content')

<article class="comment_destroyer">

<p>Destroy record for <span class="highlight">{{$comment->comment}}</span>?</p>

{{Form::open(array('route' => array('comments.destroy', $comment->id), 'method' => 'DELETE'))}}

{{Form::submit('Yes')}}

{{Form::close()}}

{{link_to_action('HomeController@dash', 'Back To Dashboard')}}

</article> 

@stop