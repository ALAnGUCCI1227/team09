<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\TeamController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/players', [PlayerController::class, 'index'])->name('players.index');
Route::get('/players/create', [PlayerController::class, 'create'])->name('players.create');
Route::post('/players/store', [PlayerController::class, 'store'])->name('players.store');
Route::get('/players/{id}', [PlayerController::class, 'show'])->name('players.show');
Route::get('/players/{id}/edit', [PlayerController::class, 'edit'])->name('players.edit');
Route::patch('/players/update/{id}', [PlayerController::class, 'update'])->name('players.update');
Route::delete('/players/delete/{id}', [PlayerController::class, 'destroy'])->name('players.destroy');

Route::get('/teams', [TeamController::class, 'index'])->name('teams.index');
Route::get('/teams/create', [TeamController::class, 'create'])->name('teams.create');
Route::post('/teams/store', [TeamController::class, 'store'])->name('teams.store');
Route::get('/teams/{id}', [TeamController::class, 'show'])->name('teams.show');
Route::get('/teams/{id}/edit', [TeamController::class, 'edit'])->name('teams.edit');
Route::patch('/teams/update/{id}', [TeamController::class, 'update'])->name('teams.update');
Route::delete('/teams/delete/{id}', [TeamController::class, 'destroy'])->name('teams.destroy');
