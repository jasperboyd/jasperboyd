<?php

use \Magniloquent\Magniloquent\Magniloquent;

class Service extends Magniloquent {
	protected $guarded = array('id');
	protected $fillable = array('name', 'description', 'cost', 'more_info', 'image_url');
	public static $rules = array(
		"save" => array(
    		'name' => 'required',
    		'description' => 'required', 
    		'cost' => 'required'
  		),
  	
  		"create" => array(
  		),
  	
  		"update" => array(
  		)
	);

  public static $relationships = array (
    'orders' => array('hasMany', 'Order')
  ); 
}
