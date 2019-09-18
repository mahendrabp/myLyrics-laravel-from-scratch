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
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/search', 'Song\SearchController@band')->name('searchs.show');


Route::get('/genres/create', 'Song\GenreController@create')->name('genres.create');
Route::get('/filters/{alphabet}', 'Song\FilterController@show')->name('filters.show');
Route::post('/genres/store', 'Song\GenreController@store')->name('genres.store');
Route::get('/genres/{genre}', 'Song\GenreController@show')->name('genres.show');


Route::get('/bands', 'Song\BandController@index')->name('bands.index');
Route::get('/bands/create', 'Song\BandController@create')->name('bands.create');
Route::post('/bands/store', 'Song\BandController@store')->name('bands.store');
Route::get('/bands/{band}', 'Song\BandController@show')->name('bands.show');
Route::get('/bands/{band}/edit', 'Song\BandController@edit')->name('bands.edit');
Route::put('/bands/{band}/edit', 'Song\BandController@update')->name('bands.update');


Route::get('/albums', 'Song\AlbumController@index')->name('albums.index');
Route::get('/albums/create', 'Song\AlbumController@create')->name('albums.create');
Route::post('/albums/store', 'Song\AlbumController@store')->name('albums.store');
Route::get('/albums/{album}', 'Song\AlbumController@show')->name('albums.show');
// Route::get('/bands/{album}/edit', 'Song\AlbumController@edit')->name('albums.edit');
Route::get('/albums/{album}/edit', 'Song\AlbumController@edit')->name('albums.edit');
Route::put('/albums/{album}/edit', 'Song\AlbumController@update')->name('albums.update');
Route::delete('/albums/{album}/destroy', 'Song\AlbumController@destroy')->name('albums.destroy');
Route::get('/albums/all/{band_id}', 'Song\AlbumController@get_all_albums');


Route::get('/songs', 'Song\SongController@index')->name('songs.index');
Route::get('/songs/create', 'Song\SongController@create')->name('songs.create');
Route::post('/songs/store', 'Song\SongController@store')->name('songs.store');
Route::get('/songs/{song}', 'Song\SongController@show')->name('songs.show');
// Route::get('/bands/{song}/edit', 'Song\SongController@edit')->name('songs.edit');
Route::put('/songs/{song}/edit', 'Song\SongController@update')->name('songs.update');

Route::get('/edit/{song}', 'Song\SongController@edit')->name('songs.edit');
Route::put('/edit/{song}', 'Song\SongController@update')->name('songs.update');
Route::get('/{band}/{song}', 'Song\SongController@show')->name('songs.show');
