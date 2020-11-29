<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController@index')->name('/');

Route::post('/contact', 'ContactController@index')->name('contact');

Route::get('/login', 'HomeController@login')->name('login');
Route::get('/logout', 'HomeController@logout')->name('logout');

Route::group(['middleware' => 'auth', 'prefix' => 'dashboard'], function () {
   Route::get('/', 'AnalyticsController@index');
});
