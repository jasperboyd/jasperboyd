<?php

use \Magniloquent\Magniloquent\Magniloquent;

class Album extends Magniloquent {
	protected $guarded = array();
	protected $fillable = array('title', 'artist', 'release_date', 'description', 'personnel', 'bandcamp_url', 'image_url'); 
	public static $rules = array(
		"save" => array(
    		'title' => 'required',
    		'artist' => 'required',
        'release_date' => 'required',
        'description' => 'required', 
        'personnel' => 'required'
  		),
  	
  		"create" => array(
  		),
  	
  		"update" => array(
  		)
	);
}
