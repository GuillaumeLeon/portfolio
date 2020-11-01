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


Auth::routes();

Route::middleware('web')->get('/', 'HomeController@index');

Route::middleware('web')->post('/contact', 'ContactController@index');

Route::get('/login', 'HomeController@login')->name('login');
Route::get('/logout', 'HomeController@logout')->name('logout');

Route::get('/register',function () {
   return view('auth.register');
})->name('register');

Route::group(['middleware' => 'auth', 'prefix' => 'dashboard'], function () {
   Route::get('analytics', 'AnalyticsController@index');
});
//Route::get('/home', 'HomeController@index')->name('home');
