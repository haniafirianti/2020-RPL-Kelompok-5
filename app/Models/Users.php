<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Hash;
class Users extends Model
{
    use SoftDeletes;
    protected $table	= 'users';
    protected $primaryKey = 'user_id';
    protected $dates       = ['deleted_at'];
    protected $guarded	= [];

    public function getAuthPassword()
    {
        return $this->user_password;
    }

    
    public function save_users($data)
    {
        $data['user_password'] = hash::make($data['user_password']);
        
        unset($data['password_confirmation']);
    	return Users::create($data);
    }

    public function update_users($data)
    {
        $data['user_password'] = hash::make($data['user_password']);
    	return Users::update($data);
    }

    public function books()
    {
        return $this->belongsToMany('App\Models\Books');
    }

    
}
