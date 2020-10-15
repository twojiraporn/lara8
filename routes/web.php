<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

Route::get('/', function () {
    return redirect()->route('posts.index');
});

Route::get('/pages', [PagesController::class, 'index'])
    ->name('pages.index');

Route::get('/pages/{id}', [PagesController::class, 'show'])
    ->name('pages.show');

Route::resource('/posts', \App\Http\Controllers\PostsController::class);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia\Inertia::render('Dashboard');
})->name('dashboard');
