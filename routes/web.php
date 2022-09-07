<?php

use App\Http\Controllers\PlayerCommentController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\TechniquesController;
use App\Http\Controllers\TestingController;
use App\Models\Player;
use App\Models\Category;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/players', [PlayerController::class, 'index'])->name('players');
Route::get('/players/{player:slug}', [PlayerController::class, 'show']);
Route::get('/players/{player:slug}/edit', [PlayerController::class, 'edit']);
Route::patch('/players/{player:slug}', [PlayerController::class, 'update']);
Route::delete('/players/{player:slug}', [PlayerController::class, 'destroy']);

Route::post('/players/{player:slug}/comments', [PlayerCommentController::class, 'store']);

Route::get('/players/{player:slug}/techniques', [TechniquesController::class, 'show']);
Route::post('/players/{player:slug}/techniques/save', [TechniquesController::class, 'store']);

Route::get('/players/{player:slug}/testing', [TestingController::class, 'show']);
Route::post('/players/{player:slug}/testing/save', [TestingController::class, 'store']);

Route::get('dashboard/register', [RegisterController::class, 'create'])->middleware(['auth']);
Route::post('dashboard/register', [RegisterController::class, 'store'])->middleware(['auth']);

require __DIR__.'/auth.php';
