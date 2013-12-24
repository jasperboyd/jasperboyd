<?php

class JobsController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        return View::make('jobs.index');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        return View::make('jobs.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$job = new Job(Input::all()); 

		$job->save(); 

		if($job->isSaved()){ 
			return $this->show($job->id); 
		}

		return Redirect::route('jobs.create')
			->withInput()
			->withErrors($job->errors()); 
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
        return View::make('jobs.show');
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
        return View::make('jobs.edit');
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$job = Job::find($id); 
		$job->save(Input::all());

		if($job->isSaved())
   		{
   			$jobs = Job::all(); 
   			$skills = SKill::all(); 
      		return Redirect::route('home.resume', $jobs, $skills)
        	->with('flash', 'The job was updated');
   		}

   		return Redirect::route('jobs.edit', $id)
     		->withInput()
      		->withErrors($job->errors());
	}

	public function showDestroy($id){ 
		$job = Job::find($id); 
		return View::make('jobs.destroy', compact('job'));
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Job::destroy($id); 
		$jobs = Job::all(); 
		$skills = Skill::all(); 
		return 	View::make('home.resume', compact('jobs', 'skills'));
	}

}
