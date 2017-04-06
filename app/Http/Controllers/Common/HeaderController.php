<?php namespace App\Http\Controllers\Common;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Http\Controllers\DefineController;
class HeaderController extends Controller {

	protected $data = null;

	public function __construct(){

		$this->data = new \stdClass();

	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index($title=false)
	{
		$this->data->title = $title;
		
		$define = new DefineController();
		$imageProfiles = $define->bestImageUrl('profiles');
		$this->data->avatar_g2 = $imageProfiles.'/avatar_g2.jpg';

		$this->data->userName = $define->getUserName();
		$this->data->profile = url('profile/'.$this->data->userName);
		$this->data->about = url('profile/'.$this->data->userName.'/about');
		$this->data->contact = url('profile/'.$this->data->userName.'/contact');

		return view('common.header', ['data' => $this->data]);
	}

}
