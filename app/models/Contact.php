<?php

class Contact extends Eloquent{

	public $table = 'contacts';
	public $timestamps = false;
	public $fillable = ['name', 'surname', 'email', 'phone', 'description', ];

}


 ?>