<?php

use Illuminate\Http\Request;



Route::get('/', function(){

		return "helow";
});


Route::get('/login', [
	"uses"  => 'login@login',
	"as"    => 'user.login',
]);