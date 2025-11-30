<?php

use App\Http\Controllers\Blog;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;

Route::get('/test', function() {
    return 'Basic test - working!';
});

Route::get('/', function () {
    return view('home');
})->name('home');

// Route::get('/', function () {
//     return view('park');
// })->name('park');

// Show single blog from markdown file
Route::get('/blog/{slug}', [Blog::class, 'show'])->name('blog.show');

Route::get('/blog', [Blog::class, 'index'])->name('blog.index');
Route::get('/blog/{slug}', [Blog::class, 'show'])->name('blog.show');