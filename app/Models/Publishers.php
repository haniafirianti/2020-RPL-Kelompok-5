<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Publishers extends Model
{

    protected $table	= 'publishers';
    protected $primaryKey = 'publisher_id';
    protected $guarded	= [];

    public function save_publishers($data)
    {
    	return Publishers::create($data);
    }

    public function update_Publishers($data)
    {
    	return Publishers::update($data);
    }

}
