<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Borrows;
// use App\Models\Users;
use App\Models\Books;

class BorrowsController extends Controller
{


	public function index()
	{
		$book=Books::all();
		return view('admin/borrows/index', ['borrow' => $book]);
	}

	public function book()
	{
		$user = User::all();
		$book = Book::all();
		return view('book', compact('book', 'user'));
	}

	
}
