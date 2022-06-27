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

Route::get('/teste',function(){
    return view('teste');

});

Route::get('/inicio','AdminController\HomeController@homePage')->name('inicio.homePage');

Route::get('/lancamentos','AdminController\ReleasesController@list')->name('lancamentos.list');

Route::get('/cadastro','AdminController\ReleasesController@add')->name('cadastro.add');

Route::post('/cadastro','AdminController\ReleasesController@addAction')->name('cadastro.addAction');

Route::get('/excluir/{id}','AdminController\ReleasesController@deleteAction')->name('excluir.deleteAction');







Route::get('/editar/{id}','AdminController\ReleasesController@edit')->name('editar.edit');

Route::post('/editar/{id}', 'AdminController\ReleasesController@editAction')->name('editar.editAction');
