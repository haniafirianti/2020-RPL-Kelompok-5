<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Borrows;
use App\Models\Students;
use App\Models\Books;
Use Carbon\Carbon;

class BorrowsController extends Controller
{


	public function index()
	{
		$book=Books::all();
        $count = 0;
        $borrow_back_date =Carbon::parse(date('Y-m-d', strtotime(Carbon::today()->toDateString())));
        $fine = 1000;
        //dd(Carbon::parse($borrow_back_date)->diffInDays($a));
		return view('admin/borrows/index', ['borrow' => $book, 'count' => $count, 'borrow_back_date' => $borrow_back_date, 'fine' => $fine]);
	}

	public function book()
	{
		$user = User::all();
		$book = Book::all();
		return view('book', compact('book', 'user'));
	}


	public function add_borrow(){
		$book    =Books::all();
		$student = Students::all();
        $borrow  = Borrows::all();
    	return view('admin/borrows/add-borrow', ['borrow' => $borrow, 'books' => $book, 'students' => $student]);
    }

    public function save_borrow(Request $request){  
        $this->validate($request, [
            'borrow_book_id'    => 'required',
            'borrow_student_id' => 'required',
            'borrow_total_books' => 'required',
            'borrow_date' => 'required',
            'borrow_expectation_back_date' => 'required|after:borrow_date',
            ]);

        $borrow_total = $request->get('borrow_total_books');
        $book         = Books::whereBookId($request->get('borrow_book_id'))->first();
        $book_total   = $book->book_total;
        if ($borrow_total < $book_total ) {
            $borrow = new Borrows;
            $borrow->save_borrow($request->all());

            $book->update([
                            'book_total' => ($book->book_total -= $borrow_total),
                         ]);
            return redirect('/borrows')->with('status', 'Buku berhasil dipinjam');;    
        } else {
            return redirect()->back()->with('status', 'Jumlah pinjam melebihi stok');;
        }
        
    }

    public function return(Request $request, $borrow_id)
    {
        // dd($request->all());
        $borrow = Borrows::find($borrow_id);
        $borrow->return_borrow($request->all());
        return redirect('/borrows');
    }


	
}
