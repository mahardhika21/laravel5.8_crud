<?php 
namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Routing\UrlGenerator;

class Myuser extends Controller {

	var $url;

	function __construct(UrlGenerator $url)
	{
		$this->url = $url;
	}
	function index()
	{
		return "Mahardhika";
	}

	function login(Request $request)
	{
		return "Mahardhika ". $request->input('password');
	}


	function return_view(Request $request,$nama='')
	{
		$arr = array
				(
					"nama" => $nama,
					"url"  => $this->url->to('/'), // generate base url
				);
		return view('home/home',$arr);
	}

	public function post2(Request $request)
	{
		$nama = $request->input('nama');
		echo "helo ".$nama ." saya post 2";
	}


	public function view_calculator(Request $request)
	{
		$data = array
				(
					"url"  => $this->url->to('/')
				);

		return view('home/calculator', $data);
	}

	public function opCalculator(Request $request)
	{
		
	}


	public function session(Request $request)
	{
		$sesi = $request->session()->get('datauser');

		echo '<pre>'.print_r($sesi, true) .'</pre>';
	}


	public function setSession(Request $request)
	{
		$data = array(
			"nama"     => "naruto",
			"email"    => "naruto@gmail.com",
			"password" => "23213123131321",
		);

		$request->session()->put('datauser',$data);
	}
}