
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
    ->namespace('Budget')
    ->group(function () {
        Route::get('/', 'HomeController@index')->name('budget.index');
        Route::get('/expenses', 'ExpenseController@index')->name('budget.expenses.index');
        Route::get('/expenses/create', 'ExpenseController@create')->name('budget.expenses.create');
        Route::post('/expenses', 'ExpenseController@store')->name('budget.expenses.store');

        Route::get('/income', 'IncomeController@index')->name('budget.income.index');
    });

Auth::routes();
