<?php

class ThoughtController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$thoughts = Thought::all(); 
        return View::make('thoughts.index', compact('thoughts'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        return View::make('thoughts.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$thought = new Thought(Input::all()); 

		$thought->save(); 

		if($thought->isSaved()){ 
			return $this->show($thought->id); 
		}

		return Redirect::route('thoughts.create')
			->withInput()
			->withErrors($thought->errors()); 
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$thought = Thought::find($id);
        return View::make('thoughts.show', compact('thought'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
        return View::make('thoughts.edit');
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$thought = Thought::find($id); 
		$thought->save(Input::all());

		if($thought->isSaved())
   		{
      		return Redirect::route('thoughts.show', $id)
        	->with('flash', 'The thought was updated');
   		}

   		return Redirect::route('thoughts.edit', $id)
     		->withInput()
      		->withErrors($thought->errors());
	}

	public function showDestroy($id)
	{
		$thought = Thought::find($id); 
		return View::make('thoughts.destroy', compact('thought'));
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Thought::destroy($id); 
		return $this->index();
	}

}
