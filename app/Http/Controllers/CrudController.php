<?php

namespace App\Http\Controllers;

use App\user;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Routing\UrlGenerator;
use App\Model\Books;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

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
				return redirect('crud');
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
			$arr_data['title'] = $request->input('judul');
			$arr_data['author'] = $request->input('author');
			$arr_data['sinopsis'] = $request->input('sinopsis');
			$arr_data['cover'] = $request->input('coverurl');

			// echo '<pre>'.print_r($arr_data, true).'</pre>';
			// echo $book_id;
			// die();
			try
			{
				Books::where('book_id',$book_id)->update($arr_data);
				DB::commit();
				return redirect('crud');
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


		public function upload_img(Request $request)
		{
				$data = array
					(
						"url"   => $this->url->to('/'),
					);

			return view('crud/upload', $data);

		}


		public function proses_upload(Request $request)
		{
				$file = $request->file('gambar');

				echo "name file ".$file->getClientOriginalName();

				if(file_exists(public_path('images/1461177230.jpg'))){
    				dd('File is exists.');
				}else{
   					 dd('File is not exists.');
				}

				 $destinationPath = 'img';
      			// $res = $file->move($destinationPath,"dsdssds.jpg");
					echo '<pre>'. print_r($res, true) .'</pre>';
		}


		public function test_flash(Request $request, $type)
		{

				// bisa add data \\
			  if($type == "error")
			  {
			  	// $data = array(
						// 	"nama"     => "naruto",
						// 	"email"    => "naruto@gmail.com",
						// 	"password" => "23213123131321",
					 //   );
			  	//  // $request->session()->flash('status',$data);
			  	//  $request->session()->put('datauser',$data);
			  	//     redirect('/crud/flash');
			  }elseif($type == "warning")
			  {
			  	    $request->session()->flash('status',"sss");
			  	   return redirect('/crud/flash')->with(['type' => "warning", "message"=> 'this is warning']);
			  }elseif($type == "info")
			  {
			  		return redirect('/crud/flash')->with(['type' => "info", "message"=> 'this is info']);
			  }elseif($type == "success")
			  {
			  		return redirect('/crud/flash')->with(['type' => "success", "message"=> 'this is success']);
			  }else{
					return redirect('/crud/flash')->with(['type' => "success", "message"=> 'this is default']);			  	
			  }
		}


		public function flash(Request $request)
		{
				// $data = array(
				// 			"nama"     => "naruto",
				// 			"email"    => "naruto@gmail.com",
				// 			"password" => "23213123131321",
				// 	   );
			 //  	  $request->session()->flash('status',$data);
			 // //  	  $request->session()->put('datauser',$data);
			return view('flash');

		// 	$data = array(
		// 					"nama"     => "naruto",
		// 					"email"    => "naruto@gmail.com",
		// 					"password" => "23213123131321",
		// 				);

		// $request->session()->put('datauser',$data);
		}
}
