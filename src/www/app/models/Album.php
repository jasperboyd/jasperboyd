<?php

use \Magniloquent\Magniloquent\Magniloquent;

class Album extends Eloquent {
	protected $guarded = array();
	protected $fillable = array('title', 'artist', 'bandcamp_url'); 
	public static $rules = array();
}
