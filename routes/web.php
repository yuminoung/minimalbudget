
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
        // home
        Route::get('/', 'HomeController@index')->name('budget.index');

        // categories
        Route::get('/categories', 'CategoryController@index')->name('budget.categories.index');
        Route::get('/categories/create', 'CategoryController@create')->name('budget.categories.create');
        Route::post('/categories', 'CategoryController@store')->name('budget.categories.store');
        Route::get('/categories/{category}/edit', 'CategoryController@edit')->name('budget.categories.edit');
        Route::patch('/categories/{id}', 'CategoryController@update')->name('budget.categories.update');
        Route::delete('/categories/{id}', 'CategoryController@destroy')->name('budget.categories.destroy');

        // expenses
        Route::get('/expenses', 'ExpenseController@index')->name('budget.expenses.index');
        Route::get('/expenses/create', 'ExpenseController@create')->name('budget.expenses.create');
        Route::post('/expenses', 'ExpenseController@store')->name('budget.expenses.store');

        // income
        Route::get('/income', 'IncomeController@index')->name('budget.income.index');
    });

Auth::routes();
