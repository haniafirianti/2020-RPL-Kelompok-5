<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    protected $table	= 'users';
    protected $primaryKey = 'user_id';
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
