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
    	return Users::create($data, $data['user_level'] = '1');
    }

    public function update_users($data)
    {
    	return Users::update($data);
    }
}
