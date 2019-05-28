<?php

use Illuminate\Http\Request;

/*  --------------------- Crud Route --------------------------*/


Route::get('/', [
	"uses"  => 'CrudController@crud_view',
	"as"    => 'Crud.view'
]);


Route::post('/add_buku', [
	"uses"  => 'CrudController@add_buku',
	"as"    => 'crud.insertData'
]);

Route::get('/detail_books/{id}',[
	"uses"  => 'CrudController@detail_buku',
	"as"    => 'crud.detail_view'
]);

Route::get('/delete_books/{id}',[
		"uses" => 'CrudController@delete_books',
		"as"   => 'crud.delete_book'
]);


Route::post('/update_books',[
		"uses"  => 'CrudController@update_buku',
		"as"    => 'crud.update_book'
]);


Route::get('/upload',[
	"uses"    => 'CrudController@upload_img',
	"as"      => 'web.insert_img',
]);

Route::post('/upload', [
	"uses"   => 'CrudController@proses_upload',
	"as"     => 'web.proses_upload',
]);


Route::get('/flash', [
	"middleware" =>"web",
	"uses" => "CrudController@flash",
	"as"   => "web.flash",
]);

Route::get('/flash_msg/{type?}', [
	"middleware" =>"web",
	"uses" 		 => "CrudController@test_flash",
	"as"   		 => "web.flash",
]);