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
        $count = 0;
		return view('admin/borrows/index', ['borrow' => $book, 'count' => $count]);
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


        //dari nti tpi blm selesai      
    	// $book  			= Book::whereId($book_id)->first();
    	// $stock 			= $book->stock_book;
    	// $total_borrow	= $request->input('total_borrow');

    	// if ($stock == 0) {
    	// 	Session::flash('Gagal Meminjam', 'Melebihi Stok Yang Tersedia');
    	// 	return redirect('/borrows');
    	// }elseif ($stock > $total_borrow or $stock == $total_borrow) {
    	// 	$borrow = new Borrows();
    	// 	$borrow -> book_id = $book_id;
    	// }


        //yutub
        // $cek = DB::table('books')->where('book_id', $book_id)->where('stock', '>', 0)->count();

        // if ($cek > 0) {
        //     DB::table('borrows')->insert([
        //         'book'=> $book_id,
        //         'users'=>\Auth::users()->user_id,
        //         'creted_at'=>date('Y-m-d H:i:s')
        //         ]);
        //     Session::flash('Sukses', 'Berhasil Meminjam');
        //     return redirect('/books');
        //     echo'Sukses';
        // }else{
        //     Session::flash('Gagal', 'Melebihi Stok');
        //     return redirect('/books');
        // }
     //    dd($request->all());
        
    }


	
}
