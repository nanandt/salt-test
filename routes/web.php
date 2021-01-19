<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/home','HomeController@index')->name('home');
Route::get('/prepaid-balance','PrepaidBalanceController@index')->name('prepaid-index');
Route::post('store', 'PrepaidBalanceController@store');

Route::get('/product-page','ProductController@index')->name('product');




// Route::middleware('auth', 'member')
//         ->namespace('Member')
//         ->group(function(){
//             Route::resource('prepaid-balance', PrepaidBalanceController::class);
//         });

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
