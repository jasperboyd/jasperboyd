<?php

class ProjectController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$projects = Project::all(); 
        return View::make('projects.index', compact('projects'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        return View::make('projects.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$project = new Project(Input::all()); 

		$project->save(); 

		if($project->isSaved()){ 
			return $this->show($project->id); 
		}

		return Redirect::route('projects.create')
			->withInput()
			->withErrors($project->errors()); 
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$project = Project::find($id); 
        return View::make('projects.show', compact('project'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$project = Project::find($id); 
        return View::make('projects.edit', compact('project'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$project = Project::find($id); 
		$project->save(Input::all());

		if($project->isSaved())
   		{
      		return Redirect::route('projects.show', $id)
        	->with('flash', 'The project was updated');
   		}

   		return Redirect::route('projects.edit', $id)
     		->withInput()
      		->withErrors($project->errors());
	}

	public function showDestroy($id){
		$project = Project::find($id); 
		return View::make('projects.destroy', compact('project'));
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Project::destroy($id); 
		return $this->index();
	}

}
