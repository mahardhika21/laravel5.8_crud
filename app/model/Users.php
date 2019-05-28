<?php 

namespace App\model;

use Illuminatie\Database\Elequent\Model;


class User extends Model 
{
	protected $table = "user";

	protected $fillabel = ['name','email','password','remember_token'];

	protected $hidden  = ['created_at','updated_at'];
}