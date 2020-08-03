<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    protected $table	= 'books';
    protected $primaryKey = 'book_id';
    protected $guarded	= [];

    public function save_books($data)
    {
    	return Books::create($data);
    }

    public function update_books($data)
    {
    	return Books::update($data);
    }




}
