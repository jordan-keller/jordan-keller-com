<?php

use App\Http\Controllers\Lyrics;
use App\Http\Controllers\Videos;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;

Route::get('/test', function() {
    return 'Basic test - working!';
});

Route::get('/', function () {
    return view('home');
})->name('home');


Route::get('/lyrics/{slug}', [lyrics::class, 'show'])->name('lyrics.show');

Route::get('/lyrics', [lyrics::class, 'index'])->name('lyrics.index');
Route::get('/lyrics/{slug}', [lyrics::class, 'show'])->name('lyrics.show');

Route::get('/credits', function () {
    return view('credits');
})->name('credits');

Route::get('/videos', function () {
    return view('videos');
})->name('videos');

Route::get('/videos', [Videos::class, 'index'])->name('videos');

Route::get('/listen', function () {
    return view('listen');
})->name('listen');