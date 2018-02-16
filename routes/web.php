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

/*TO DO:
-POPRAVI NAVBAR NA FRONTENDU
-POPIS KATEGORIJA NA FRONTENDU SAMO U JEDNU VARIABLU
-NAPRVAVI PONUDU SA CARDOVIMA
-DODAJ KATEGORIJE
-PAGINACIJA
-PREGLEDAVANJE I BRISANJE PORUKA NA BACKENDU
-RESPONZIVNI DIZAJN
-KONTAKT SA DEFAULT VRIJEDNOSTIMA ZA PROIZVOD
-DETALJI O PROIZVODU
-PROVJERIT SITUACIJU KAD JE SVE PRAZNO I DODAT PORUKE PO POTREBI

*/



//admin@mail.net qwertz1234
