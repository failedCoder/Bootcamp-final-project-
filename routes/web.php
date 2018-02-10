<?php

Route::get('/', function () {
    return view('frontend.home');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('home/dodaj','HomeController@showAddForm');

Route::post('home/dodaj','ProductController@add');

Route::get('home/uredi/{product}','HomeController@editForm');

//Route::patch('home/uredi/{id}','ProductController@edit');

Route::get('home/obriši','HomeController@delete');  //trebat ce dodat wildcardove za id-e

Route::get('/ponuda','ProductController@index');

Route::get('/kontakt','ContactController@index');



//TREBA DODAT DEFAULT ZA SLIKU,NAPRAVI PATCH RUTU ZA EDIT I DELETE NAPRAVI!

//admin@mail.net qwertz1234
