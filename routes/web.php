
<?php

// oung
Route::prefix('/')
    ->name('oung.')
    ->namespace('Oung')
    ->group(function () {
        Route::get('/', 'HomeController@index')->name('index');
        Route::get('/profile', 'ProfileController@index')->name('profile.index');
    });

// budget
Route::prefix('budget')
    ->name('budget.')
    ->namespace('Budget')
    ->group(function () {
        Route::get('/', 'HomeController@index')->name('index');
        Route::get('/expenses', 'ExpenseController@index')->name('expenses.index');
    });

Auth::routes();
