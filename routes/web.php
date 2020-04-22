
<?php

// use Illuminate\Support\Facades\Route;

Route::get('/', 'Oung\HomeController@index')->name('oung.index');
Route::get('/profile', 'Oung\ProfileController@index')->name('oung.profile.index');

Route::group('budget', function () {
    Route::get('/', 'Budget\HomeController@index')->name('oung.budget.home');
});


Auth::routes();
