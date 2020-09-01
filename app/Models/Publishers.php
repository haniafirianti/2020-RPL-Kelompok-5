<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Books;

class Publishers extends Model
{
    use SoftDeletes;
    protected $table	= 'publishers';
    protected $primaryKey = 'publisher_id';
    protected $dates       = ['deleted_at'];
    protected $guarded	= [];

    public function save_publishers($data)
    {
    	return Publishers::create($data);
    }

    public function update_Publishers($data)
    {
    	return Publishers::update($data);
    }

    public function book()
    {
        return $this->hasMany(Books::class);
    }

    


}
