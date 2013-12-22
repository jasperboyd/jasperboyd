@extends('layouts.master')

<article class="album_editor"> 

<h1>Edit an Album</h1> 

{{Form::model($album, array('route' => array('albums.update', $album->id), 'method'=>'PUT'))}}

@include('albums.partials.form');

{{Form::submit('Update')}}

{{Form::close()}}

</article> 