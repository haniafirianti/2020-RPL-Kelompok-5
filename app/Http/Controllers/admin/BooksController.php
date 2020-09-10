<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Books;
use App\Models\Publishers;

class BooksController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
        $this->middleware('DisablePreventBack');
    }
    
	 public function index(){
        $book=Books::all();
        $count = 0;
        return view('admin/books/index', ['books' => $book, 'count' => $count]);
    }

    public function add_books(){
        $publisher = Publishers::all();
    	return view('admin/books/add-book', ['publisher' => $publisher]);
    }

    public function save_books(Request $request){
        $this->validate($request, [
            'book_title'            => 'required|min:3',
            'book_publisher_id'     => 'required',
            'book_page_total'       => 'required|numeric|min:10',
            'book_total'            => 'required|numeric|min:1',
            'book_category'         => 'required',
            ]);
        
    	$book = new Books;
    	$book->save_books($request->all());
    	return redirect('/books');
    }


    public function edit_books($book_id){
    	$book=Books::find($book_id);
        $publisher = Publishers::all();
    	return view('admin/books/edit-book', ['book' => $book, 'publisher' => $publisher]);
    }

    public function update_books(Request $request, $book_id){
        $this->validate($request, [
            'book_title'            => 'required|min:3',
            'book_publisher_id'     => 'required',
            'book_page_total'       => 'required|numeric|min:10',
            'book_total'            => 'required|numeric|min:1',
            'book_category'         => 'required',
            ]); 
        
    	$book = Books::find($book_id);
    	$book->update_books($request->all());
    	return redirect('/books/');
    }

    public function destroy($book_id)
    {
        $book = Books::find($book_id);
        $book->delete();
        return redirect('/books');
    }

    public function trash()
    {
       $trash=Books::onlyTrashed()->get();
       $count=0;
       return view('admin.books.trash', compact('trash','count'));
    }

    public function restore($book_id)
    {
       $restore=Books::onlyTrashed()->where('book_id', $book_id);
       $restore->restore();
       return redirect('/books');

    }

    public function list_book()
    {
        $book=Books::all();
        $count = 0;
        return view('admin/books/list-book', ['books' => $book, 'count' => $count]);
    }
}