<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\ArtistController;
use \App\Http\Controllers\SongController;

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

Route::post('getImagePath',[ArtistController::class,'getImagePath'])->name('image-path');

Route::post('add',[ArtistController::class,'addArtists'])->name('add-artists');
Route::get('list',[ArtistController::class,'allArtists'])->name('all-artists');
Route::get('editArtists/{id}',[ArtistController::class,'editArtists'])->name('edit-artists');
Route::put('updateArtists/{id}',[ArtistController::class,'updateArtists'])->name('update-artists');
Route::delete('deleteArtist/{id}',[ArtistController::class,'deleteArtist'])->name('delete-artist');


Route::post('add-song',[SongController::class,'addSongs'])->name('add-songs');
Route::get('songs',[SongController::class,'allSongs'])->name('all-songs');

//Route::post('add',[ArtistController::class,'addArtists'])->name('add-artists');

//Route::prefix('artist')->group(function () {
//    Route::post('/add',[ArtistController::class,'addArtists'])->name('add-artists');
//});

//Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Route::get('{any}', function () {
//    return view('welcome');
//})->where('any','.*');



