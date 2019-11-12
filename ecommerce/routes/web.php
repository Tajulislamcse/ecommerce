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
Route::get('/home','HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/report', 'HomeController@report')->name('report');

Route::prefix('admin')->group(function()
{
    Route::get('/dashboard','Admin\DashBoardController@index')->name('dashboard');

});
Route::get('/store','PagesController@index')->name('store');