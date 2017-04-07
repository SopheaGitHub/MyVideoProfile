<?php namespace App\Http\Controllers;
use App\Http\Controllers\DefineController;
use App\Http\Controllers\Common\HeaderController;
use App\Http\Controllers\Common\FooterController;
class WelcomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
	|
	*/

	protected $data = null;

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('guest');
		$this->data = new \stdClass();
		$this->define = new DefineController();
		$this->header = new HeaderController();
		$this->footer = new FooterController();
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		$this->data->title = 'Welcome';

		// define image profile
		$imageProfiles = $this->define->bestImageUrl('profiles');
		$imagePosts = $this->define->bestImageUrl('posts');

		$this->data->avatar_g2 = $imageProfiles.'/avatar_g2.jpg';
		$this->data->nature = $imagePosts.'/nature.jpg';
		$this->data->mountains = $imagePosts.'/mountains.jpg';
		$this->data->lights = $imagePosts.'/lights.jpg';
		$this->data->nature = $imagePosts.'/nature.jpg';
		$this->data->p1 = $imagePosts.'/p1.jpg';
		$this->data->p2 = $imagePosts.'/p2.jpg';
		$this->data->p3 = $imagePosts.'/p3.jpg';

		// loading layout
		$this->data->header = $this->header->webHeader($this->data->title);
		$this->data->footer = $this->footer->index();
		return view('welcome', ['data' => $this->data]);
	}
	
}
