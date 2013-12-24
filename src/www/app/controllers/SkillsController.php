<?php

class SkillsController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        return View::make('skills.index');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        return View::make('skills.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$skill = new Skill(Input::all()); 

		$skill->save(); 

		if($skill->isSaved()){ 
			return $this->show($skill->id); 
		}

		return Redirect::route('skills.create')
			->withInput()
			->withErrors($skill->errors()); 
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
        return View::make('skills.show');
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
        return View::make('skills.edit');
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$skill = Skill::find($id); 
		$skill->save(Input::all());

		if($skill->isSaved())
   		{
      		return Redirect::route('skills.show', $id)
        	->with('flash', 'The skill was updated');
   		}

   		return Redirect::route('skills.edit', $id)
     		->withInput()
      		->withErrors($skill->errors());
	}

	public function showDestroy($id){ 
		$skill = Skill::find($id); 
		return View::make('skills.destroy', compact('skill'));
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Skill::destroy($id); 
		$jobs = Job::all(); 
		$skills = Skill::all(); 
		return 	View::make('home.resume', compact('jobs', 'skills'));
	}

}
