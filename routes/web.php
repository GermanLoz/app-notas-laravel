<?php

Route::resource('usuario', 'usuarioController');

Route::group(['prefix' => 'nota'], function(){
        Route::get('index', 'NotaController@index');
        Route::get('detalle/{id}', 'NotaController@detalle');
        Route::get('delete/{id}', 'NotaController@delete');
        Route::get('edit/{id}', 'NotaController@edit');
        Route::post('search/', 'NotaController@search');
        Route::post('editar/{id}', 'NotaController@editar');
        Route::get('add', 'NotaController@addFruta');
        Route::post('save', 'NotaController@save');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/logout', 'HomeController@logout')->name('logout');