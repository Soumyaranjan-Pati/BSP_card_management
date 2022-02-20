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
    return view('home');
})->name('home');
Route::get('card_create', 'App\Http\Controllers\CardController@cardCreate')->name('card_create');
Route::get('/card_list','App\Http\Controllers\CardController@cardLists')->name('card_list');
Route::get('/card_edit','App\Http\Controllers\CardController@cardEdit')->name('card_edit');
Route::get('/card_delete','App\Http\Controllers\CardController@cardDelete')->name('card_delete');
Route::post('/create', 'App\Http\Controllers\CardController@cardStore');
Route::post('/update', 'App\Http\Controllers\CardController@cardUpdate');