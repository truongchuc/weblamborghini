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

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/store', 'MyController@getshop');
Route::get('/kid', 'MyController@getkid');
Route::get('/men', 'MyController@getmen');
Route::get('/women', 'MyController@getwoman');
Route::get('/travel', 'MyController@gettravel');
Route::get('/homepage', 'MyController@gethomepage');
Route::get('/models', 'MyController@getmodel');
Route::get('schema/create-table', function(){
    Schema::create('users',function($table){
        $table->increments('id');
    });
});

