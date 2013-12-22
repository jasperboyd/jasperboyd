@extends('layouts.master')

<article class="album_editor"> 

<h1>Edit a Project</h1> 

{{Form::model($project, array('route' => array('projects.update', $project->id), 'method'=>'PUT'))}}

@include('projects.partials.form');

{{Form::submit('Update')}}

{{Form::close()}}

</article> 