<?php

use \Magniloquent\Magniloquent\Magniloquent;

class Project extends Magniloquent {
	protected $guarded = array('id');
	protected $fillable = array('title', 'description', 'project_url', 'image_url'); 
	public static $rules = array();
}
