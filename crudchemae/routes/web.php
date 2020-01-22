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

Route::get('/', 'HumanController@welcome');

// Route::get('/', function () {
//     return view('welcome ');
// });

Route::get('/create',function(){
    return view('create');
});
Route::get('/index',function(){
    return view('index');
});

Route::get('/gotoCreate','HumanController@gotoCreate')->name('gotoCreate');
Route::get('/create','HumanController@addinformation')->name('addinformation');
Route::get('/delete/{id}','HumanController@destroy')->name('destroy');
// Route::get('/edit/{id}','HumanController@edit')->name('edit');
Route::get('edit/{id}','HumanController@show')->name('update.update');  