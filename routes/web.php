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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/ ', 'HomeController@index')->name('home');
Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

Route::get('/genres/create', 'Song\GenreController@create')->name('genres.create');
Route::post('/genres/store', 'Song\GenreController@store')->name('genres.store');

Route::get('/bands', 'Song\BandController@index')->name('bands.index');
Route::get('/bands/create', 'Song\BandController@create')->name('bands.create');
Route::post('/bands/store', 'Song\BandController@store')->name('bands.store');
Route::get('/bands/{band}', 'Song\BandController@show')->name('bands.show');
