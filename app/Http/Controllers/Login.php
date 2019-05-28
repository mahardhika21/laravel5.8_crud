<?php 
namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Routing\UrlGenerator;
use App\Model\Users;
use Illuminate\Support\Facades\DB;

class Login extends Controller
{

	private $url;

	function __construct(UrlGenerator $url)
	{
		$this->url = $url; 
	}


	function login(Request $request)
	{
		$data = array
				(
					"url" => $this->url->to('/'),
				);
		return view('user/login');
	}
}