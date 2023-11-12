<?php

use App\Http\Controllers\PersonController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth')->group(function() {
    Route::get('/', [PersonController::class, 'index'])->name('person.index');
    Route::get('/create', [PersonController::class, 'create'])->name('person.create');
    Route::post('/store', [PersonController::class, 'store'])->name('person.store');
    Route::get('/{person}/edit', [PersonController::class, 'edit'])->name('person.edit');
    Route::put('/{person}/update', [PersonController::class, 'update'])->name('person.update');
    Route::delete('/{person}/destroy', [PersonController::class, 'destroy'])->name('person.destroy');
});

require __DIR__.'/auth.php';
