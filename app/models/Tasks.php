<?php

class Tasks extends Eloquent {

	public $timestamps = false;
	public $fillable = ['id', 'title', 'complete'];

public static function get_all(){
 	$res = Tasks::all();
	return $res;
}

public static function get_one($id){
 	$res = Tasks::find($id);
	return $res;
}

}
