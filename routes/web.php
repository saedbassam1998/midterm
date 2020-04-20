<?php
 Route::get('/','MidController@index');
 Route::get('index_page','MidController@index_page');
 Route::get('add_page','MidController@add_page');
 Route::delete('delete/{id}','MidController@destroy') ;
 Route::post('store','MidController@store');
 Route::post('edit/{id}', 'MidController@edit');
 Route::patch('update/{id}', 'MidController@update');