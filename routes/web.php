<?php

Route::get('/', function () {
    return redirect('api/products');
});

Auth::routes();

Route::get('/home', 'AcceuilController@index')->name('acceuil');
