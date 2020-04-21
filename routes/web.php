
<?php

// use Illuminate\Support\Facades\Route;

Route::get('/', 'Oung\HomeController@index');
Route::get('/', 'Oung\ProfileController@index');


Auth::routes();
