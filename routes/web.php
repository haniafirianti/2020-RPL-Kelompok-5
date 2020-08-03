<?php

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
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/books', 'BooksController@index');

Route::get('/add-books', 'BooksController@add_books');
Route::post('/books', 'BooksController@save_books');

Route::delete('/books/{book_id}', 'BooksController@destroy');


Route::get('/edit-books/{book_id}/edit', 'BooksController@edit_books');
Route::post('/update-books/{book_id}', 'BooksController@update_books');

	