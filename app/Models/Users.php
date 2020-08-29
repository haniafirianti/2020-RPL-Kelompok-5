<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Users extends Model
{
    use SoftDeletes;
    protected $table	= 'users';
    protected $primaryKey = 'user_id';
    protected $dates       = ['deleted_at'];
    protected $guarded	= [];

    public function save_users($data)
    {
    	return Users::create($data);
    }

    public function update_users($data)
    {
    	return Users::update($data);
    }

    public function books()
    {
        return $this->belongsToMany('App\Models\Books');
    }

    
}
