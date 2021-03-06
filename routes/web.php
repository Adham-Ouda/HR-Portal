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
Route::get('/add', 'HomeController@add');
Route::post('/store','HomeController@store');
Route::get('/delete/{id}', 'HomeController@delete');
Route::get('/edit/{id}', 'HomeController@edit');
Route::put('/update/{id}','HomeController@update');

Route::get('/attendance', 'HomeController@attendance');
Route::get('/attendance.add', 'HomeController@attendanceAdd');


