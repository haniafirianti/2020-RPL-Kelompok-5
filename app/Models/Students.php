<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    protected $table	= 'students';
    protected $primaryKey = 'student_id';
    protected $guarded	= [];

    public function save_students($data)
    {
    	return students::create($data);
    }

    public function update_students($data)
    {
    	return students::update($data);
    }

    public function books()
    {
        return $this->belongsToMany('App\Models\Books');
    }

}
