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

Route::get('/about', function() {
    // TODO prebaciti logiku u controller (recimo AboutController)
    $books = \Illuminate\Support\Facades\DB::table('books')->get();
    return view('about', compact('books'));
});

Route::get('/authors', 'AuthorController@showAll');

Route::get('/authors/{id}', 'AuthorController@showOne');
