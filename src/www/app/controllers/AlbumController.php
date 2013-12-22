<?php

class AlbumController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$albums = Album::all(); 
        return View::make('albums.index', compact('albums'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        return View::make('albums.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$album = new Album(Input::all()); 

		$album->save(); 

		if($album->isSaved()){ 
			return $this->show($album->id); 
		}

		return Redirect::route('albums.create')
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
		$album = Album::find($id);
        return View::make('albums.show', compact('album'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$album = Album::find($id);
        return View::make('albums.edit', compact('album'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$album = Album::find($id); 
		$album->save(Input::all());

		if($album->isSaved())
   		{
      		return Redirect::route('albums.show', $id)
        	->with('flash', 'The album was updated');
   		}

   		return Redirect::route('albums.edit', $id)
     		->withInput()
      		->withErrors($album->errors());
	}

	public function showDestroy($id){
		$album = Album::find($id); 
		return View::make('albums.destroy', compact('album'));
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$album = Album::destroy($id);

		return $this->index(); 
	}

}
