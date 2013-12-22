<?php

class ServiceController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$services = Service::all(); 
        return View::make('services.index', compact('services'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        return View::make('services.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$service = new Service(Input::all()); 

		$service->save(); 

		if($service->isSaved()){ 
			return $this->show($service->id); 
		}

		return Redirect::route('services.create')
			->withInput()
			->withErrors($service->errors()); 
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$service = Service::find($id); 
        return View::make('services.show', compact('service'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$service = Service::find($id); 
        return View::make('services.edit', compact('service'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$service = Service::find($id); 
		$service->save(Input::all());

		if($service->isSaved())
   		{
      		return Redirect::route('services.show', $id)
        	->with('flash', 'The service was updated');
   		}

   		return Redirect::route('services.edit', $id)
     		->withInput()
      		->withErrors($service->errors());
	}

	public function showDestroy($id){
		$service = Service::find($id); 
		return View::make('services.destroy', compact('service'));
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Service::destroy($id); 
		return Redirect::route('home.webdev');
	}

}
