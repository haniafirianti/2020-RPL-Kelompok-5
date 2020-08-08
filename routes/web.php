<?php //syntax untuk membuka PHP

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

Route::get('/', function () {
    return view('welcome');
}); // Untuk menampilkan tampilan awal saat membuka web.

Auth::routes(); // Kode Untuk Autentifikasi seperti, Login, Registrasi, Logout.


Route::get('/home', 'HomeController@index'); // Untuk menampilkan halaman home


//Line 25 sampai line 30 route untuk book
Route::get('/books', 'admin\BooksController@index'); // Untuk menampilkan halaman daftar buku (book)
Route::get('/add-books', 'admin\BooksController@add_books'); // Untuk menampilkan form tambah buku
Route::post('/books', 'admin\BooksController@save_books'); // Untuk mengirimkan data buku yang sudah ditambah ke database
Route::delete('/books/{book_id}', 'admin\BooksController@destroy'); // Untuk menghapus data buku yang ada sesuai book_id yang sudah dipilih
Route::get('/edit-books/{book_id}/edit', 'admin\BooksController@edit_books'); // Untuk menampilkan form Edit buku yang ada sesuai book_id yang sudah dipilih
Route::post('/update-books/{book_id}', 'admin\BooksController@update_books'); // Untuk mengirimkan data buku yang sudah di update atau diubah ke database sesuai book_id yang sudah dipilih
Route::get('/list-book', 'admin\BooksController@list_book'); // Untuk menampilkan halaman daftar buku (book)



//Line 34 sampai 39 route  untuk publisher
Route::get('/publishers', 'admin\PublishersController@index'); //Untuk menampilkan halaman daftar penerbit (publisher)
Route::get('/add-publishers', 'admin\PublishersController@add_publishers');// Untuk menampilkan form tambah penerbit
Route::post('/publishers', 'admin\PublishersController@save_publishers');// Untuk mengirimkan data penerbit yang sudah ditambah ke database
Route::delete('/publishers/{publisher_id}', 'admin\PublishersController@destroy'); // Untuk menghapus data penerbit yang ada sesuai publisher_id yang sudah dipilih
Route::get('/edit-publishers/{publisher_id}/edit', 'admin\PublishersController@edit_publishers');// Untuk menampilkan form Edit penerbit yang ada sesuai publisher_id yang sudah dipilih
Route::post('/update-publishers/{publisher_id}', 'admin\PublishersController@update_publishers');// Untuk mengirimkan data penerbit yang sudah di update atau diubah ke database sesuai publisher_id yang sudah dipilih


//Line 43 sampai 48 route untuk user
Route::get('/users', 'admin\UsersController@index');//Untuk menampilkan halaman daftar pengguna (user)
Route::get('/add-users', 'admin\UsersController@add_users');// Untuk menampilkan form tambah pengguna
Route::post('/users', 'admin\UsersController@save_users');// Untuk mengirimkan data pengguna yang sudah ditambah ke database
Route::delete('/users/{user_id}', 'admin\UsersController@destroy');// Untuk menghapus data pengguna yang ada sesuai user_id yang sudah dipilih
Route::get('/edit-users/{user_id}/edit', 'admin\UsersController@edit_users');// Untuk menampilkan form Edit pengguna yang ada sesuai user_id yang sudah dipilih
Route::post('/update-users/{user_id}', 'admin\UsersController@update_users');// Untuk mengirimkan data pengguna yang sudah di update atau diubah ke database sesuai user_id yang sudah dipilih


Route::get('/borrows', 'admin\BorrowsController@index');//Untuk menampilkan halaman daftar peminjaman (borrow)