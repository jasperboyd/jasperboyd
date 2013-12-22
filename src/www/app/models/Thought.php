<?php

use \Magniloquent\Magniloquent\Magniloquent;

class Thought extends Magniloquent {
	protected $guarded = array('id');
	protected $fillable = array('title', 'body'); 
	public static $rules = array(
		"save" => array(
    		'title' => 'required',
    		'body' => 'required'
  		),
  	
  		"create" => array(
  		),
  	
  		"update" => array(
  		)
	);
}
