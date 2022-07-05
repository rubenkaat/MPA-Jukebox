<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\SongController;
use App\Http\Controllers\PlaylistController;
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

Route::get('/index', function () {
    return view('index');
});
Route::get('/login', function () {
    return view('login');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/genres', [GenreController::class, 'getGenres']);
Route::get('/songs/{id}', [SongController::class, 'getSongs']);
Route::get('/songdetail/{id}', [SongController::class, 'ShowDetails']);
Route::get('/queue', [PlaylistController::class, 'index'])->name('playlist');
Route::get('/addToPlaylist/{id}', [PlaylistController::class, 'addSongToPlaylist']);
Route::get('/deleteFromPlaylist/{id}', [PlaylistController::class, 'deleteSongFromPlaylist']);
Route::get('/savePlaylist', [PlaylistController::class, 'savePlaylist']);
Route::get('/playlists', [PlaylistController::class, 'getPlaylists']);
Route::get('/playlistdetails/{id}', [PlaylistController::class, 'getPlaylistDetails']);

