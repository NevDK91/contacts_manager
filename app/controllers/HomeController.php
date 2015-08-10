<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function index(){
		return View::make('index');
	}

	public function showWelcome()
	{
		return View::make('hello');
	}

	public function tasks(){

	$fetchTasks = Tasks::all();
	
		return json_encode($fetchTasks); 						//View::make('index')->with('out', $out) ;

	}

		public function task($id){

	$out = Tasks::get_one($id);
	return json_encode($out); //View::make('index')->with('out', $out) ;

	}

		public function putTask($id){

	$input = Input::json();
	return $input->title; 

	}

}
