<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class DefineController {

	public function bestImageUrl($diractory=false) {
		return url('/images/'.$diractory);
	}

	public function getUserName() {
		return 'sophea';
	}

}
