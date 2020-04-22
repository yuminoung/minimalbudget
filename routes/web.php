
<?php

// use Illuminate\Support\Facades\Route;

Route::get('/', 'Oung\HomeController@index');
Route::get('/profile', 'Oung\ProfileController@index')->name('oung.profile.index');


Auth::routes();
