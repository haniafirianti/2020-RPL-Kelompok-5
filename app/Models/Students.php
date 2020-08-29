<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Students extends Model
{
    use SoftDeletes;
    protected $table	= 'students';
    protected $primaryKey = 'student_id';
    protected $dates       = ['deleted_at'];
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
