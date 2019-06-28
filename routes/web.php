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

Route::get('/', 'BookController@index')->name('home');
Route::get('/book', 'BookController@create')->name('create');
Route::post('/book', 'BookController@store')->name('create_book');
Route::get('/books', 'BookController@index')->name('list_books');
Route::get('/book/{id}', 'BookController@show')->name('show_book');
Route::get('/books/{id}/delete', 'BookController@destroy')->name('delete_book');
Route::get('/books/{id}/edit', 'BookController@edit')->name('edit_book');
Route::post('/books/{id}/update', 'BookController@update')->name('update_book');
