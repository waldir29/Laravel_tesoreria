<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return Redirect::to('/login');
});

Route::get('logout', function (){
    auth()->logout(); Session()->flush();
    return Redirect::to('/login');
})->name('logout');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('registros','PagesController');

Route::get('editar/{id?}','PagesController@edit')->name('edit');

Route::post('login','UserController@ingresar')->name('log');