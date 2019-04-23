<?php

namespace App\Http\Controllers;

use App\user;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Routing\UrlGenerator;
use App\Model\Books;
use Illuminate\Support\Facades\DB;


class CrudController extends Controller
{
		var $url;
		function __construct(UrlGenerator $url)
		{
			$this->url = $url;
		}


		public function index()
		{
			$this->crud_view();
		}


		public function  crud_view(Request $request)
		{
			$data = array
					(
						"books" => Books::get(),
						"url"   => $this->url->to('/'),
					);
			return view('crud/crud_view',$data);
		}


		public function add_buku(Request $request)
		{
			$arr_data['title'] = $request->input('title');
			$arr_data['author'] = $request->input('author');
			$arr_data['sinopsis'] = $request->input('sinopsis');
			$arr_data['cover'] = $request->input('cover');
			try{
				Books::insert($arr_data);
				DB::commit();
			}catch(Exception $e){

			}
		}
}
