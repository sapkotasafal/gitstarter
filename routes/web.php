<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::group(['middleware'=>"web"],function(){
    Route::get('/','UsersController@index');
Route::get('/list','UsersController@list');
Route::view('/add','add');
Route::post('/add','UsersController@add');
Route::get('/delete/{id}','UsersController@delete');
Route::get('/edit/{id}','UsersController@edit');
Route::post('/edit','UsersController@update');
Route::view('register','register');
Route::post('register','UsersController@register');
Route::view('login','login');
Route::post('login','UsersController@login');
});
