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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', function () {
    return view('site.home');
})->name('site.home');

Route::get('about', function() {
	return view('site.about');
})->name('site.about');

Route::get('contact', function() {
	return view('site.contact');
})->name('site.contact');

Route::get('immobile/{id}/{title?}', function() {
	return view('site.immobile_detail');
})->name('site.immobile');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
