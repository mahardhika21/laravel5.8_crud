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



