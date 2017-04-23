<?php

Route::get('/', function () {
    return view('welcome');
});

use app\Note;


Route::group(['prefix' => 'web'], function() {
  Route::resource('notes','NotesController@index');
  Route::resource('create','NotesController@create');  
  Route::post('create','NotesController@store');  
  Route::get('details/{note}','NotesController@show'); 


  Route::get('edit/{id}','NotesController@edit'); 
  Route::put('edit/{id}','NotesController@update');

  Route::get('delete/{id}','NotesController@destroy'); 
  
}); 



