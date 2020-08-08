<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Books;

class BooksController extends Controller
{
	 public function index(){
        $book=Books::all();
        return view('admin/books/index', ['books' => $book]);
    }

    public function add_books(){
    	return view('admin/books/add-book');
    }

    public function save_books(Request $request){
    	$book = new Books;
    	$book->save_books($request->all());
    	return redirect('/books');
    }


    public function edit_books($book_id){
    	$book=Books::find($book_id);
    	return view('admin/books/edit-book', ['book' => $book]);
    }

    public function update_books(Request $request, $book_id){
    	$book = Books::find($book_id);
    	$book->update_books($request->all());
    	return redirect('/books/');
    }

    public function destroy($book_id)
    {
        $book = Books::find($book_id);
        $book->delete();
        return redirect('/books/');
    }

    public function list_book()
    {
        $book=Books::all();
        return view('admin/books/list-book', ['books' => $book]);
    }
}
