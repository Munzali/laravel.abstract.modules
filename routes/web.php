<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::resource('expensetype','expenseTypeController',['except'=>['edit','update','show','delete']]);
//Route::post('expenses/{expense_type_id}',['uses'=>'expenseController@store', 'as'=>'expense.store']);
Route::resource('expenses','expenseController',['except'=>['edit','update','show','delete']]);
Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');
