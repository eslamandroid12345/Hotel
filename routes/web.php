<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
//routes update

Route::get('/', function () {
    return view('hotels.welcome');
});

    //Route group rooms
     Route::resource('rooms','RoomController');
     Route::get('soft/{id}','RoomController@softData')->name('soft');
     Route::get('trashed','RoomController@trashData')->name('trash');
     Route::get('back/{id}','RoomController@backData')->name('back');
     Route::get('force/{id}','RoomController@forceData')->name('force');


     //Route group rooms
     Route::resource('users','UserController');
     Route::get('user/soft/{id}','UserController@softData')->name('user.soft');
     Route::get('user/trashed','UserController@trashData')->name('user.trashed');
     Route::get('user/back/{id}','UserController@backData')->name('user.back');
     Route::get('user/force/{id}','UserController@forceData')->name('user.force');




Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
