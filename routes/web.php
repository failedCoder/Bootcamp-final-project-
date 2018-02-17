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

Route::post('/kontakt','ContactUsController@store');

Route::get('/ponuda/{product}','ProductController@show');

Route::get('/kontakt/{product}','ContactUsController@indexSpecific');

Route::get('/ponuda/kategorija/{category}','ProductController@sort');

/*TO DO:
-PAGINACIJA/backend
-PREGLEDAVANJE I BRISANJE PORUKA NA BACKENDU
-RESPONZIVNI DIZAJN
-PROVJERIT SITUACIJU KAD JE SVE PRAZNO I DODAT PORUKE PO POTREBI
-LATEST
-alt
*/



//admin@mail.net qwertz1234

