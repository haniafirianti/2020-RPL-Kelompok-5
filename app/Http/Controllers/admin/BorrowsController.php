<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Borrows;

class BorrowsController extends Controller
{
   

	 public function index(){
        $borrow=Borrows::all();
    	return view('admin/borrows/index', ['borrows' => $borrow]);
    }

}
