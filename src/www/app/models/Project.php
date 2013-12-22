<?php

use \Magniloquent\Magniloquent\Magniloquent;

class Project extends Magniloquent {
	protected $guarded = array('id');
	protected $fillable = array('title', 'subtitle', 'description', 'project_url', 'image_url'); 
	public static $rules = array(
		"save" => array(
    		'title' => 'required',
    		'description' => 'required'
  		),
  	
  		"create" => array(
  		),
  	
  		"update" => array(
  		)
	);
}
