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

Auth::routes();

Route::get('/', 'HomeController@show')->name('home_page');


Route::get('/publisher/{publisher}', 'BooksController@booksbypublisher')->name('books_by_publisher');

Route::get('/genre/{genre}', 'BooksController@booksbygenre')->name('books_by_genre');


Route::group(['prefix' => 'admin'], function () {
   Route::resource('pages', 'AdminPageHController');
});

Route::get('/{page_name}', 'PageController@index')->name('page');
Route::get('/{page_name}/{lan}', 'PageController@index')->name('page_lan');






