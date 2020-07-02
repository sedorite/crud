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

Route::get('/','homeController@index');
Route::get('/datatable',function(){
    return view('table/datatable');
});
