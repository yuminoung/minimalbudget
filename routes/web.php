
<?php

// oung
Route::prefix('/')
    ->name('oung.')
    ->namespace('Oung')
    ->group(function () {
        Route::get('/', 'HomeController@index')->name('index');
    });

/**
 * BUDGET
 */
Route::prefix('budget')
    ->namespace('Budget')
    ->group(function () {
        # Home
        Route::get('/', 'HomeController@index')->name('budget.index');

        # Category
        Route::get('/categories', 'CategoryController@index')->name('budget.categories.index');
        Route::get('/categories/create', 'CategoryController@create')->name('budget.categories.create');
        Route::post('/categories', 'CategoryController@store')->name('budget.categories.store');
        Route::get('/categories/{category}/edit', 'CategoryController@edit')->name('budget.categories.edit');
        Route::patch('/categories/{category}', 'CategoryController@update')->name('budget.categories.update');
        Route::delete('/categories/{category}', 'CategoryController@destroy')->name('budget.categories.destroy');

        # Expense
        Route::get('/expenses', 'ExpenseController@index')->name('budget.expenses.index');
        Route::get('/expenses/create', 'ExpenseController@create')->name('budget.expenses.create');
        Route::post('/expenses', 'ExpenseController@store')->name('budget.expenses.store');
        Route::get('/expenses/{expense}/edit', 'ExpenseController@edit')->name('budget.expenses.edit');

        # Income
        Route::get('/income', 'IncomeController@index')->name('budget.income.index');
    });


/**
 * PROFILE
 */
Route::prefix('profile')
    ->namespace('Profile')
    ->group(function () {
        # Home
        Route::get('/', 'ProfileController@index')->name('profile.index');
    });

/**
 * AUTH
 */
Auth::routes();
