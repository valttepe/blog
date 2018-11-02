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
Route::get('/', function () {
    return view('welcome');
});

Route::get('/jotain', function () {
    return view('jotain');
});

// Route::get('user/{id}', 'UserController@show');



Route::get('/user/{id}', function($id) {
    return 'This is user ' .$id;
});*/

// Instead using functions in this php file. Call functions from the Controllers
// name of the file @ name of the function
Route::get('/', 'PagesController@index');

Route::get('/about', function() {
    return view(pages.about);
});
