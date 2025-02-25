<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MakerController;
use App\Http\Controllers\BodyController;
use App\Http\Controllers\VehicleController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/makers', [MakerController::class, 'index'])->name('makers.index');
Route::post('/makers', [MakerController::class, 'store'])->name('makers.store');
Route::get('/makers/create', [MakerController::class, 'create'])->name('makers.create');
Route::get('/makers/{maker}', [MakerController::class, 'show'])->name('makers.show');
Route::patch('/makers/{maker}', [MakerController::class, 'update'])->name('makers.update');
Route::get('/makers/{maker}/edit', [MakerController::class, 'edit'])->name('makers.edit');
Route::delete('/makers/{maker}', [MakerController::class, 'destroy'])->name('makers.destroy');

Route::get('/bodies', [BodyController::class, 'index'])->name('bodies.index');
Route::post('/bodies', [BodyController::class, 'store'])->name('bodies.store');
Route::get('/bodies/create', [BodyController::class, 'create'])->name('bodies.create');
Route::get('/bodies/{body}', [BodyController::class, 'show'])->name('bodies.show');
Route::patch('/bodies/{body}', [BodyController::class, 'update'])->name('bodies.update');
Route::get('/bodies/{body}/edit', [BodyController::class, 'edit'])->name('bodies.edit');
Route::delete('/bodies/{body}', [BodyController::class, 'destroy'])->name('bodies.destroy');

Route::get('/vehicles', [VehicleController::class, 'index'])->name('vehicles.index');
Route::post('/vehicles', [VehicleController::class, 'store'])->name('vehicles.store');
Route::get('/vehicles/create', [VehicleController::class, 'create'])->name('vehicles.create');
Route::get('/vehicles/{vehicle}', [VehicleController::class, 'show'])->name('vehicles.show');
Route::patch('/vehicles/{vehicle}', [VehicleController::class, 'update'])->name('vehicles.update');
Route::get('/vehicles/{vehicle}/edit', [VehicleController::class, 'edit'])->name('vehicles.edit');
Route::delete('/vehicles/{vehicle}', [VehicleController::class, 'destroy'])->name('vehicles.destroy');
