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

		$comment->user()->associate($user); 
		$comment->order()->associate($order); 

		$comment->save();

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
		$comment = Comment::find($id); 
        return View::make('comments.edit', compact('comment'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$comment = Comment::find($id); 
		$comment->save(Input::all());

		if($comment->isSaved())
   		{
   			$user = Auth::user(); 
   			$orders = $user->orders; 
      		return Redirect::route('home.dash', compact('user', 'orders'))
        	->with('flash', 'The comment was updated');
   		}

   		return Redirect::route('comments.edit', $id)
     		->withInput()
      		->withErrors($comment->errors());
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
		Comment::destroy($id); 
		$user = Auth::user(); 
		$orders = $user->orders; 
		return Redirect::route('home.dash', compact('user', 'orders'));

	}

}
