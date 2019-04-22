<?php



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/helow', function(){
	return "helow";
});

Route::get('/halo/{nama}', function($nama){
	return "halo ". $nama;
});

Route::get('/user', 'myUser@index');

Route::post('postpertama', function(){
	return "post_1";
});


Route::post('/login', [
	'uses'  => 'MyUser@login',
	'as'    => 'user.login'
]);

Route::post('/post2', [
	'uses'  =>'MyUser@post2',
	'as'    => 'web.post2'
]);


Route::get('/view_home/{nama?}', 'MyUser@return_view');

// part calculator extends midelware \\
Route::get('/calculator', [
	"uses"  => 'MyUser@view_calculator',
	"as"    => "web.calculator",
]);

Route::post('/operation_calculator', [
	"uses"  => 'MyUser@opCalculator',
	"as"    => "web.opCalculator"
]);