<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/welcome', function () {
    return view('welcome');
});

// Route::get('/', function () {
//     return "<h1>Welcome to Laravel";
// });

// Route::get('/about', function () {
//     return view('pages.about');
// });

// Route::get('/users/{id}/{name}', function ($id, $name) {
//     return "This is user ".$name." with an id ".$id;
// });

Route::get('/', 'PagesController@index');

Route::get('/about', 'PagesController@about');

Route::get('/services', 'PagesController@services');

Route::post('/poststore', 'PostsController@store');

Route::resource('posts', 'PostsController');  //kreira nove putanje na osnovu funkcija zadatog kontrolera
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
