<?php
use App\Upload;



Route::get('/', 'UploadsController@index');

Route::get('/uploads', 'UploadsController@create');

Route::post('/uploads', 'UploadsController@store');

Route::post('/edit', 'UploadsController@edit');

Route::get('/about', 'UploadsController@about');

Route::post('getter', 'UploadsController@getter');

Route::get('/delete/{id}', 'UploadsController@delete');



Route::get('/login', 'SessionsController@create');

Route::post('/login', 'SessionsController@store');

Route::get('/logout', 'SessionsController@destroy');



Route::get('/cartview', 'CartController@cartview');

Route::post('cart', 'CartController@cart');

Route::get('/remove/{id}', 'CartController@remove');


Route::get('orders', 'OrderController@orders');

Route::post('/order', 'OrderController@store');










