<?php

Route::get('/', function () {
	$products = App\Product::all();
    return view('frontend.home',compact('products'));
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('home/dodaj','HomeController@showAddForm');

Route::post('home/dodaj','ProductController@add');

Route::get('home/uredi/{product}','HomeController@editForm');

Route::patch('home/uredi/{product}','ProductController@edit');

Route::delete('home/obriši/{product}','ProductController@delete');  

Route::get('/ponuda','ProductController@index');

Route::get('/kontakt','ContactUsController@index');





//admin@mail.net qwertz1234
