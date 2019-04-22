<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;


class Books extends Model
{
	protected $table = 'books';
	protected $fillable = ['book_id','title','author','sinopsis','cover'];	

}