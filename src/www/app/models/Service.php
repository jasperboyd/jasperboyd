<?php

use \Magniloquent\Magniloquent\Magniloquent;

class Service extends Magniloquent {
	protected $guarded = array('id');
	protected $fillable = array('name', 'description', 'more_info', 'image_url')
	public static $rules = array();
}
