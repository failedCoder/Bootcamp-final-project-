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
    return view('frontend.home');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('home/dodaj','HomeController@showAddForm');

Route::post('home/dodaj','ProductController@add');

Route::get('home/uredi','HomeController@edit');

Route::get('home/obriši','HomeController@delete');  //trebat ce dodat wildcardove za id-e

Route::get('/ponuda','ProductController@index');

Route::get('/kontakt','ContactController@index');





//admin@mail.net qwertz1234
