<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Books;

class BooksController extends Controller
{
	 public function index(){
        $book=Books::all();
    	return view('books/index', ['book' => $book]);
    }

    public function add_books(){
    	return view('books/add-book');
    }

    public function save_books(Request $request){
    	$book = new Books;
    	$book->save_books($request->all());
    	return redirect('/books');
    }


    public function edit_books($book_id){
    	$book=Books::find($book_id);
    	return view('books/edit-book', ['book' => $book]);
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
}
