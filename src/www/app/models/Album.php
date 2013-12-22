<?php

use \Magniloquent\Magniloquent\Magniloquent;

class Album extends Magniloquent {
	protected $guarded = array();
	protected $fillable = array('title', 'artist', 'bandcamp_url', 'image_url', 'description', 'more_info'); 
	public static $rules = array(
		"save" => array(
    		'title' => 'required',
    		'artist' => 'required'
  		),
  	
  		"create" => array(
  		),
  	
  		"update" => array(
  		)
	);
}
