<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Borrows;
use App\Models\Students;
use App\Models\Books;
// use Auth;

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


	public function add_borrow(){
		$book=Books::all();
		$student = Students::all();
        $borrow = Borrows::all();
    	return view('admin/borrows/add-borrow', ['borrow' => $borrow, 'books' => $book, 'students' => $student]);
    }

    public function save_borrow(Request $request){        
    	$borrow = new borrows;
    	$borrow->save_borrow($request->all());
    	return redirect('/borrows');
    }


	
}
