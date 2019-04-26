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


Route::put('/update_books',[
		"uses"  => 'CrudController@update_buku',
		"as"    => 'crud.update_book'
]);

