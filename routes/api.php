<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/expenses', 'ExpenseController@index')->name('expense.all');
Route::post('/expenses', 'ExpenseController@store')->name('expense.store');
Route::get('/expenses/{expense}', 'ExpenseController@show')->name('expense.show');
Route::put('/expenses/{expense}', 'ExpenseController@update')->name('expense.update');
Route::delete('/expenses/{expense}', 'ExpenseController@destroy')->name('expense.destroy');
