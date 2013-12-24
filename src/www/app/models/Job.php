<?php

use \Magniloquent\Magniloquent\Magniloquent;

class Job extends Magniloquent{
	protected $guarded = array('id');

	public static $rules = array(
		"save" => array(
  		),
  	
  		"create" => array(
  		),
  	
  		"update" => array(
  		)
	);
}
