@extends('layouts.master')

<article class="thought_editor"> 

<h1>Edit a Thought</h1> 

{{Form::model($thought, array('route' => array('thoughts.update', $thought->id), 'method'=>'PUT'))}}

@include('thoughts.partials.form');

{{Form::submit('Update')}}

{{Form::close()}}

</article> 