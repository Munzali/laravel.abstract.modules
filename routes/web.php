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


Route::resource('expensetype','expenseTypeController',['except'=>['edit','update','delete']]);

Route::get('/expenses',['uses'=>'expenseController@index', 'as'=>'expenses.index']);
Route::post('suboutput','expenseController@fetchdata')->name('suboutput');


Route::post('expenses/{expense_type_id}',['uses'=>'expenseController@store', 'as'=>'expenses.store']);
Auth::routes();



Route::get('/home', 'HomeController@index')->name('home');
