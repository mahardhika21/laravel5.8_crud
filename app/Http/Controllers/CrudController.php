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
				return redirect('crud/crud_view');
			}catch(Exception $e){
				echo $e->message;
			}
		}


		public function detail_buku(Request $request,$id)
		{

			$data = array
					(
						"book_detail" => Books::where('book_id',$id)->first(),
						"url"         => $this->url->to('/'),
					);
			return view('crud/update',$data);

		}


		public function view_buku(Request $request, $id)
		{
				$data = array
						(
							"book_detail" => Books::where('book_id',$id)->first(),
							"url"         => $this->url->to('/')
						);

				return view('crud/crud_update_view',$data);
		}


		public function update_buku(Request $request)
		{
			$book_id  = $request->input('book_id');
			$arr_data['title'] = $request->input('title');
			$arr_data['author'] = $request->input('author');
			$arr_data['sinopsis'] = $request->input('sinopsis');
			$arr_data['cover'] = $request->input('cover');

			try
			{
				Books::where('book_id',$book_id)->update($arr_data);
				DB::commit();
				return redirect('crud/crud_view');
			}catch(Exception $e)
			{
				echo $e->message;
			}
		}

		public function delete_books(Request $request, $id)
		{
			$book_id = $id;

			try
			{
				Books::where('book_id',$book_id)->delete();
				DB::commit();
				return "ok";
			}catch(Exception $e)
			{
				return "null";
			}
		}
}
