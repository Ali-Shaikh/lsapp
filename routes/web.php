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

/*
Route::get('/hello', function () {
    //return view('welcome');
    return "Hello World!";
});

Route::get('/html', function () {
    //return view('welcome');
    return "<h1>Hello World!</h1>";
});

//Dynamic Route Example 1
Route::get('/users/{id}', function ($id) {
//    return "This is User $id";
    return 'This is User ' . $id;
});

//Dynamic Route Example 2
Route::get('/users/{id}/{name}', function ($id,$name) {
   return "This is User $name with an ID of $id";
//    return 'This is User ' . $name . ' with an ID of ' . $id;
});

*/

Route::get('/', 'PagesController@index');

Route::get('/about', function () {
    return view('pages.about');
});