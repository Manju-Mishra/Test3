<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Main;

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



Route::get('/add',[Main::class,'add']);
Route::post('/sendpost',[Main::class,'sendpost']);
Route::get('/show',[Main::class,"List"]);
Route::get('/del/{id}',[Main::class,"delete"]);
Route::post('/edit',[Main::class,"edit"]);
Route::get('/edit/{id}',[Main::class,"update"]);



