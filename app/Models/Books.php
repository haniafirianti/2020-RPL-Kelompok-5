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

    public function publisher()
    {
        return $this->belongsTo('App\Models\Publishers', 'book_publisher_id', 'publisher_id');
    }

    public function users()
    {
        return $this->belongsToMany('App\Models\Users', 'borrows', 'borrow_book_id', 'borrow_user_id')->withPivot('borrow_date', 'borrow_back_date', 'borrow_fine', 'borrow_total_books');
    }
    



}

