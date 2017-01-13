<?php
use App\Mail\MailTest;

Route::resource('module8', 'IncomeController');
Route::post('invite', 'InviteController@send');


Route::get('expense', 'ExpenseController@index');
Route::post('expense/store', 'ExpenseController@store');
Route::put('expense/{id}', 'ExpenseController@update');
Route::delete('expense/{id}', 'ExpenseController@destroy');

Route::get('transfer', 'TransferController@index');
Route::post('transfer/store', 'TransferController@store');
Route::put('transfer/{id}', 'TransferController@update');
Route::delete('transfer/{id}', 'TransferController@destroy');

Route::get('fast-entry', 'EntryController@index');
Route::post('fast-entry/store', 'EntryController@store');
Route::put('fast-entry/{id}', 'EntryController@update');
Route::delete('fast-entry/{id}', 'EntryController@destroy');




