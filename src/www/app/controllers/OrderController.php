<?php

class OrderController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$orders = Order::all(); 
        return View::make('orders.index', compact('orders'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create($serviceid)
	{
		$service = Service::find($serviceid);
        return View::make('orders.create', compact('service'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$order = new Order(Input::all()); 

		$file = Input::file('design_elements');

		$destinationPath = 'uploads/'.str_random(8);
		$filename = $file->getClientOriginalName();

		$uploadSuccess = Input::file('design_elements')->move($destinationPath, $filename);

		$order->design_elements = $destinationPath . '/' . $filename;

		$order->save(); 

		$user = Auth::user(); 
		$user->orders()->save($order); 

		$service = Service::find($order->service_id); 
		$service->orders()->save($order);

		if($order->isSaved()){ 
			return $this->show($order->id); 
		}

		return Redirect::route('orders.create')
			->withInput()
			->withErrors($order->errors()); 
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$order = Order::find($id); 
        return View::make('orders.show', compact('order'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$order = Order::find($id); 
        return View::make('orders.edit', compact('order'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$order = Order::find($id); 
		$order->save(Input::all());

		if($order->isSaved())
   		{
      		return Redirect::route('orders.show', $id)
        	->with('flash', 'The order was updated');
   		}

   		return Redirect::route('orders.edit', $id)
     		->withInput()
      		->withErrors($order->errors());
	}

	public function showDestroy($id){ 
		$order = Order::find($id); 
		return View::make('orders.destroy', compact('order'));
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Order::destroy($id); 
		$user = Auth::user(); 
		$orders = $user->orders;

		return Redirect::route('home.dash', compact('user', 'orders'));
	}

}
