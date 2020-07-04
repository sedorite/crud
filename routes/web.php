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
// Route::get('form','AuthController@form');
// Route::post('saveform','AuthController@save');

Route::get('/datatable',function(){
    return view('table/datatable');
});
Route::get('/','homeController@index');

Route::get('/pertanyaan','pertanyaanController@index');
Route::post('/pertanyaan','pertanyaanController@store');
Route::post('/pertanyaan/{id}','pertanyaanController@store');
Route::get('/pertanyaan/delete/{id}','pertanyaanController@destroy');
Route::get('/pertanyaan/create','pertanyaanController@create');
Route::get('/pertanyaan/{id}/edit','pertanyaanController@create');

Route::get('/answer','answerController@index');
Route::post('/answer','answerController@store');
Route::get('/answer/create/{id}','answerController@create');

Route::get('/modal','pertanyaanController@show');

