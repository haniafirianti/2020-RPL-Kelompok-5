<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Borrows extends Model
{
    protected $table	= 'borrows';
    protected $primaryKey = 'borrow_id';
    protected $guarded	= [];

}
