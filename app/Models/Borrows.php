<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Auth;

class Borrows extends Model
{
    protected $table	= 'borrows';
    protected $primaryKey = 'borrow_id';
    protected $guarded	= [];

    public function save_borrow($data)
    {
    	$data['borrow_user_id'] = Auth::user()->user_id;
    	$data['borrow_fine'] = '0';
    	return Borrows::create($data);
    }

}
