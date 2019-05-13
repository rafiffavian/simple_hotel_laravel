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

Route::middleware(['auth'])->group(function(){

    Route::get('/admin/rooms', 'Admin\RoomsController@index')->name('admin.rooms');
    Route::get('admin/rooms/create', 'Admin\RoomsController@create')->name('admin.rooms.create');

    Route::get('/admin/katrooms', 'Admin\KatroomsController@index')->name('admin.katrooms');
    Route::get('/admin/katrooms/create', 'Admin\KatroomsController@create')->name('admin.katrooms.create');
    Route::post('/admin/katrooms/store', 'Admin\KatroomsController@store')->name('admin.katrooms.store');
    Route::get('/admin/katrooms/{id}/edit', 'Admin\KatroomsController@edit')->name('admin.katrooms.edit');

    Route::get('/admin/bedtype', 'Admin\BedController@index')->name('admin.bedtype');
});
