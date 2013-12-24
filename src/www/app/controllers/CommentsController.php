<?php

class CommentsController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        return View::make('comments.index');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store($orderid)
	{
		$comment = new Comment(Input::all()); 
		$user = Auth::user(); 
		$order = Order::find($orderid);

		$user->comments()->save($comment); 
		$order->comments()->save($comment); 

		$orders = $user->orders; 

		if($comment->isSaved()){ 
			return Redirect::route('home.dash', compact('user', 'orders'));
		}

		return Redirect::route('home.dash', compact('user', 'orders'))
			->withInput()
			->withErrors($album->errors()); 
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
        return View::make('comments.show');
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
        return View::make('comments.edit');
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	public function showDestroy($id){
		$comment = Comment::find($id); 
		return View::make('comments.destroy', compact('comment'));
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
