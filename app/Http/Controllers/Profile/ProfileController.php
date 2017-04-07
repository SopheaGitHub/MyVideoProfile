<?php namespace App\Http\Controllers\Profile;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Http\Controllers\DefineController;
use App\Http\Controllers\Common\HeaderController;
use App\Http\Controllers\Common\FooterController;
class ProfileController extends Controller {

	protected $data = null;

	public function __construct(){

		$this->data = new \stdClass();
		$this->define = new DefineController();
		$this->header = new HeaderController();
		$this->footer = new FooterController();
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function getIndex($profileid)
	{
		$this->data->title = 'Profile';

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
		$this->data->header = $this->header->index($this->data->title);
		$this->data->footer = $this->footer->index();

		return view('profile.index', ['data' => $this->data]);
	}

	public function getAbout() {
		$this->data->title = 'About';
		$imageProfiles = $this->define->bestImageUrl('profiles');

		$this->data->avatar_g = $imageProfiles.'/avatar_g.jpg';
		$this->data->me2 = $imageProfiles.'/me2.jpg';

		// loading layout
		$this->data->header = $this->header->index($this->data->title);
		$this->data->footer = $this->footer->index();
		return view('profile.about', ['data' => $this->data]);
	}

	public function getContact() {
		$this->data->title = 'Contact';

		// loading layout
		$this->data->header = $this->header->index($this->data->title);
		$this->data->footer = $this->footer->index();
		return view('profile.contact', ['data' => $this->data]);
	}

}
