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

Route::get('/', function () {
    return view('welcome');
});
Route::view('/home','home');
Route::view('/createform','createform');
Route::view('/fillform','fillform');



Route::view('/fillform','fillform');
Route::post('/openquestion','Controllerfirst@show');

Route::view('/questionpaper','questionpaper');
Route::get('/questionpaper','Controllerfirst@fetch');

Route::view('/createform','createform');
Route::post('/submit','Controllerfirst@store');


Route::view('/choices','choices');
Route::get('/choices','Controllerfirst@select');
Route::post('/submitted','Controllerfirst@answerinsert');

Route::post('/questionsubmit','Controllerfirst@questionsubmit');



