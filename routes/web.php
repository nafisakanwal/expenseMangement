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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware'=>'auth'],function(){
    Route::get('pages', 'CommingSoonController@index');
    Route::resource('expenses', 'ExpenseController');
    Route::get('/reports', 'ReportsController@index');
    Route::get('/reports/monthly/{month}', 'ReportsController@monthly');

});