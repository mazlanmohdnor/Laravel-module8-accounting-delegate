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

Route::get('income', function () {
    return view('income');
});

Route::get('expense', function () {
    return view('expense');
});

Route::get('account-transfer', function () {
    return view('account-transfer');
});

Route::get('nican.coa-nican', function () {
    return view('nican.coa-nican');
});
