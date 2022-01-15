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

Route::get('/series', 'SeriesController@index')->name('listar_series');
Route::get('/series/criar', 'SeriesController@create')->name('form_criar_serie');

/*
A MESMA ROTA COM FORMAS DIFERENTES FORAM CRIADAS
POIS O /series/criar É UMA PÁGINA DE ENVIO DE INFORMAÇÃO NA
MESMA PÁGINA, LOGO NÃO FUNCIONARIA SEM A Route::post
*/

Route::post('/series/criar', 'SeriesController@store');
Route::delete('/series/{id}', 'SeriesController@destroy');
