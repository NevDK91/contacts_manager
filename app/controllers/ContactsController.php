<?php

class ContactsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$fetchedContacts = Contact::all();
		return $fetchedContacts;
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::json();
		Contact::create([
			'name' => $input->get('name'),
			'surname' => $input->get("surname"),
			'phone' => $input->get("phone"),
			'email' => $input->get("email"),
			'description' => $input->get('description')

			]);
		$query = Contact::select('id')->where("email", '=', $input->get('email'))->first();
		$id= $query->id;
		Session::put('id', $id);

				$returnArray = array(
					'id' => $id,
					'name' => $input->get('name'),
					'surname' => $input->get('surname'),
					'phone' => $input->get('phone'),
					'email' => $input->get('email'),
					'description' => $input->get('description')
					);
				return $returnArray;
		
	}



	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		return Contact::find($id);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$input = Input::json();

		$contact = Contact::find($id);
		$contact->name = $input->get('name');
		$contact->surname = $input->get('surname');
		$contact->email = $input->get('email');
		$contact->phone = $input->get('phone');
		$contact->description = $input->get('description');
		$contact->save();
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$res = Contact::find($id);
		$res->delete();
		return $res;
	}


}
