<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MakerController;


//Route::resource('makers', MakerController::class);

// Route::get('/', function () {
//     return view('welcome');
// });

 //Route::get('maker', [MakerController::class, 'maker']);



 Route::get('/makers', [MakerController::class, 'index'])->name('makers.index');
 Route::post('/makers', [MakerController::class, 'store'])->name('makers.store');
 Route::get('/makers/create', [MakerController::class, 'create'])->name('makers.create');
 Route::patch('/makers/{maker}', [MakerController::class, 'update'])->name('makers.update');
 Route::get('/makers/{maker}/edit', [MakerController::class, 'edit'])->name('makers.edit');
 Route::get('/makers/{maker}', [MakerController::class, 'show'])->name('makers.show');
 Route::delete('/makers/{maker}', [MakerController::class, 'destroy'])->name('makers.destroy');