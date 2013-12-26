<?php

Order::created(function($model){
	$user = User::admin();
	$notifications = $user->notifications; 
	$user->notifications = $notifications + 1; 
	$user->save();
});

Comment::created(function($model){
	$order = Order::find($model->order_id);
	$user = $order->user; 
	$notifications = $user->notifications; 
	$user->notifications = $notifications + 1; 
	$user->save();
});