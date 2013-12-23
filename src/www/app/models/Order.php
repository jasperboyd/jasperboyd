<?php

use \Magniloquent\Magniloquent\Magniloquent;

class Order extends Magniloquent {
	protected $guarded = array('id');
	protected $fillable = array('title', 'summary', 'more_info', 'service_id');
	public static $rules = array(
		"save" => array(
    		'title' => 'required',
    		'more_info' => 'required'
  		),
  	
  		"create" => array(
  		),
  	
  		"update" => array(
  		)
	);

	public static $relationships = array (
		'user' => array('belongsTo', 'User'), 
		'service' => array('belongsTo', 'Service')
	); 
}
