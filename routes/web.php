<?php //syntax untuk membuka PHP
// Di dalam project ini terdapat middleware yaitu sebagai penghubung antara Controller dan route. Middleware telah terhubung dengan RouteServiceProvider. Jadi, tidak perlu pemanggilan lagi di dalam web.php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//Line 15 sampai line 17 route untuk menampilkan tampilan awal saat membuka web
Route::get('/', function () {
    return view('welcome');
}); 

Auth::routes(['register'=>false]); // Kode Untuk Autentifikasi seperti, Login, Registrasi, Logout


Route::get('/home', 'HomeController@index'); // Untuk menampilkan halaman home

Route::group(['middleware' => 'auth'], function () {

//Line 26 sampai line 32 route untuk book
Route::get('/books', 'admin\BooksController@index'); // Untuk menampilkan halaman daftar buku (book)
Route::get('/add-books', 'admin\BooksController@add_books'); // Untuk menampilkan form tambah buku
Route::post('/books', 'admin\BooksController@save_books'); // Untuk mengirimkan data buku yang sudah ditambah ke database
Route::delete('/books/{book_id}', 'admin\BooksController@destroy'); // Untuk menghapus data buku yang ada sesuai book_id yang sudah dipilih
Route::get('/edit-books/{book_id}/edit', 'admin\BooksController@edit_books'); // Untuk menampilkan form Edit buku yang ada sesuai book_id yang sudah dipilih
Route::post('/update-books/{book_id}', 'admin\BooksController@update_books'); // Untuk mengirimkan data buku yang sudah di update atau diubah ke database sesuai book_id yang sudah dipilih
Route::get('/list-book', 'admin\BooksController@list_book'); // Untuk menampilkan halaman daftar buku (book) dalam bentuk card


//Line 36 sampai 41 route  untuk publisher
Route::get('/publishers', 'admin\PublishersController@index'); //Untuk menampilkan halaman daftar penerbit (publisher)
Route::get('/add-publishers', 'admin\PublishersController@add_publishers');// Untuk menampilkan form tambah penerbit
Route::post('/publishers', 'admin\PublishersController@save_publishers');// Untuk mengirimkan data penerbit yang sudah ditambah ke database
Route::delete('/publishers/{publisher_id}', 'admin\PublishersController@destroy'); // Untuk menghapus data penerbit yang ada sesuai publisher_id yang sudah dipilih
Route::get('/edit-publishers/{publisher_id}/edit', 'admin\PublishersController@edit_publishers');// Untuk menampilkan form Edit penerbit yang ada sesuai publisher_id yang sudah dipilih
Route::post('/update-publishers/{publisher_id}', 'admin\PublishersController@update_publishers');// Untuk mengirimkan data penerbit yang sudah di update atau diubah ke database sesuai publisher_id yang sudah dipilih


//Line 45 sampai 50 route untuk user
Route::get('/users', 'admin\UsersController@index');//Untuk menampilkan halaman daftar pengguna (user)
Route::get('/add-users', 'admin\UsersController@add_users');// Untuk menampilkan form tambah pengguna
Route::post('/users', 'admin\UsersController@save_users');// Untuk mengirimkan data pengguna yang sudah ditambah ke database
Route::delete('/users/{user_id}', 'admin\UsersController@destroy');// Untuk menghapus data pengguna yang ada sesuai user_id yang sudah dipilih
Route::get('/edit-users/{user_id}/edit', 'admin\UsersController@edit_users');// Untuk menampilkan form Edit pengguna yang ada sesuai user_id yang sudah dipilih
Route::post('/update-users/{user_id}', 'admin\UsersController@update_users');// Untuk mengirimkan data pengguna yang sudah di update atau diubah ke database sesuai user_id yang sudah dipilih


//Line 54 sampai 59 route untuk student
Route::get('/students', 'admin\StudentsController@index');//Untuk menampilkan halaman daftar pengguna (Student)
Route::get('/add-students', 'admin\StudentsController@add_students');// Untuk menampilkan form tambah pengguna
Route::post('/students', 'admin\StudentsController@save_students');// Untuk mengirimkan data pengguna yang sudah ditambah ke database
Route::delete('/students/{student_id}', 'admin\StudentsController@destroy');// Untuk menghapus data pengguna yang ada sesuai student_id yang sudah dipilih
Route::get('/edit-students/{student_id}/edit', 'admin\StudentsController@edit_students');// Untuk menampilkan form Edit pengguna yang ada sesuai student_id yang sudah dipilih
Route::post('/update-students/{student_id}', 'admin\StudentsController@update_students');// Untuk mengirimkan data pengguna yang sudah di update atau diubah ke database sesuai student_id yang sudah dipilih

//Line 62 route untuk borrow
Route::get('/borrows', 'admin\BorrowsController@index');//Untuk menampilkan halaman daftar peminjaman (borrow)
Route::get('/add-borrow', 'admin\BorrowsController@add_borrow'); // Untuk menampilkan form tambah peminjaman
Route::post('/borrows', 'admin\BorrowsController@save_borrow'); // Untuk mengirimkan data peminjaman yang sudah ditambah ke database
Route::post('/return/{borrow_id}', 'admin\BorrowsController@return'); // Untuk mengirimkan data buku yang sudah di update atau diubah ke database sesuai book_id yang sudah dipilih

});
